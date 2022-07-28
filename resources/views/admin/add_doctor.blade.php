<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        @include ('admin.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include ('admin.navbar')
            <div class="container-fluid page-body-wrapper">
                <form class="w-75" action="{{url('/store-doctor-data')}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputName1" class="form-label">Name</label>
                            <input type="text" class="form-control text-light" id="exampleInputName1" name="name">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control text-light" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputPhone1" class="form-label">Phone</label>
                            <input type="text" class="form-control text-light" id="exampleInputPhone1" name="phone">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputSpecialty1" class="form-label">Specialty</label>
                            <input type="text" class="form-control text-light" id="exampleInputSpecialty1" name="specialty">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputRoom1" class="form-label">Room</label>
                            <input type="text" class="form-control text-light" id="exampleInputRoom1" name="room">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputQualifications1" class="form-label">Qualifications</label>
                            <input type="text" class="form-control text-light" id="exampleInputQualifications1" name="qualifications">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputImages1" class="form-label">Image</label>
                            <input type="file" class="form-control text-light" id="exampleInputImages1" name="file">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
    @include('admin.script')
</body>

</html>