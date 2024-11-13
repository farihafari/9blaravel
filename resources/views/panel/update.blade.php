@include ("component.header")

<div class="container-fluid pt-4 px-4">
    <div class="row  bg-light rounded mx-0">
        <div class="col-md-12">
            <h3>update Categories</h3>
            <form method="post" action="{{url('edit')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="cid" value="{{$object['id']}}">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="text" name="cname" value="{{$object['name']}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">name</label>
                    <input type="file" name="cimage"  class="form-control" id="exampleInputPassword1">
                    <img src="assets/img/categories/{{$object['image']}}" alt="" width="90px">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@include ("component.footer")