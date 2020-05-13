@extends('layouts.student')

@section('studentViewNotes')
<section>
    <div id="wrapper">
             <!-- Sidebar -->
             <div class="sidebar">
                <ul>
                    <li>
                        <i class="fas fa-users"></i> <a href="{{route('student.home')}}"> Std Profile</a>
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
                    <li>
                        <i class="fas fa-users"></i> <a href="s_pre_course.html">Pre. Course</a>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->

            <div id="content-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h2 class="mt-5">View Notes</h2>
                            <div class="container">
                                <div class="row text-center  justify-content-center mr-lg-4">
                                    <h3>{{$data->title}} </h3>
                                    <p>
                                        <iframe src="{{url('public/assets/upload/'.$file=substr($data->fileName,21))}}" style="width: 600px; height: 500px;"></iframe>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

