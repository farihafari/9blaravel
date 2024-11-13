@include ('component.header')

<table class="table">
                                <thead>
                                    <tr>
                    
                                        <th scope="col"> Name</th>
                                        <th scope="col">image</th>
                                        <th scope="col" colspan="2">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allCat as $values )
                                    
                                  
                                    <tr>
                                       
                                        <td>{{$values['name']}}</td>
                                        <td><img src="assets/img/categories/{{$values['image']}}" width="90px" alt=""></td>
                                        <td><a href="update.{{$values['id']}}" class="btn btn-info">Edit</a></td>
                                        <td><a href="delete.{{$values['id']}}" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if(session("updated"))
                            <script>
                                alert("category Updated sucessfully");

                            </script> 
                            @elseif(session("deleted"))
                            <script>
                                alert("category delete sucessfully");

                            </script>
                            @endif
@include ('component.footer')
