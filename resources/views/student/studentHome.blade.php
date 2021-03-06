@extends('layouts.student')

@section('studentHome')

  <section>
    <div id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <i class="fas fa-users"></i> <a class="ad-active" href="{{route('student.home')}}"> Std Profile</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('student.allcourses')}}">All Courses</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('student.choosecourses')}}">Enroll Course</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('student.viewcourses')}}">View Course</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('student.notes')}}">Notes Download</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('student.viewnotice')}}">View Notice</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('student.viewresult')}}">Check Results</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="{{route('student.complaint')}}">Complaint BOX</a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6 border border-warning mt-2">
                        <h1 class="mt-5">Personal Info</h1>
                        <form action="" method="POST">
                            <div class="form-group pt-2">
                            <label for="fullname">Full Name of Student: {{$data->uname}}</label>
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Email: {{$data->uemail}}</label>

                            </div>
                            <a href="{{route('student.profileEdit',['id'=>session('regid')])}}" class="btn btn-warning mb-4"> Edit</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
