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
            <div class="page-body-wrapper">
            <div class="bg-dark pb-4 pt-4">
            <table class="table table-striped table-dark">
                <thead class="pb-4">
                    <tr>
                        <th class="text-center" scope="col">Doctor's Name</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">Phone</th>
                        <th class="text-center" scope="col">Specialty</th>
                        <th class="text-center" scope="col">Room</th>
                        <th class="text-center" scope="col">Qualifications</th>
                        <th class="text-center" scope="col">Photo</th>
                        <th class="text-center" scope="col">Remove Doctor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $key => $doctor)
                    <tr>
                        <td class="text-center">{{$doctor->name}}</td>
                        <td class="text-center">{{$doctor->email}}</td>
                        <td class="text-center">{{$doctor->phone}}</td>
                        <td class="text-center">{{$doctor->specialty}}</td>
                        <td class="text-center">{{$doctor->room}}</td>
                        <td class="text-center">{{$doctor->qualifications}}</td>
                        <td><img src="doctorImage/{{$doctor->image}}"></td>
                        <td class="text-center"><a href="{{url('remove-doctor',$doctor->id)}}" onclick="return confirm('Are you want to remove your profile ?')">Remove Doctor</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            </div>

        </div>
    </div>
    @include('admin.script')
</body>

</html>