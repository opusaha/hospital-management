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
            <table class="table table-striped table-dark container">
                <thead class="pb-4">
                    <tr>
                        <th class="text-center" scope="col">Patient's Name</th>
                        <th class="text-center" scope="col">Patient's Phone</th>
                        <th class="text-center" scope="col">Doctor's Name</th>
                        <th class="text-center" scope="col">Appointment Date</th>
                        <th class="text-center" scope="col">Symptoms</th>
                        <th class="text-center" scope="col">Message</th>
                        <th class="text-center" scope="col">Status</th>
                        <th class="text-center" scope="col">Approve Appointment</th>
                        <th class="text-center" scope="col">Cancel Appointment</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointment as $key => $appointments)
                    <tr>
                        <th class="text-center" scope="row">{{$appointments->patientName}}</th>
                        <td class="text-center">{{$appointments->patientPhone}}</td>
                        <td class="text-center">{{$appointments->doctor}}</td>
                        <td class="text-center">{{$appointments->date}}</td>
                        <td class="text-center">{{$appointments->symptoms}}</td>
                        <td class="text-center">{{$appointments->message}}</td>
                        <td class="text-center">{{$appointments->status}}</td>
                        <td class="text-center"><a href="{{url('approve',$appointments->id)}}">Approve</a></td>
                        <td class="text-center"><a href="{{url('cancel',$appointments->id)}}">Cancel</a></td>
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