@extends('layouts.student')

@section('studentComplaint')
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
                        <i class="fas fa-users"></i> <a class="ad-active" href="{{route('student.complaint')}}">Complaint BOX</a>
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
                        <h1 class="mt-5">Complaint Box</h1>
                        
                        @foreach($errors->all() as $err)
                        <span style="background-color: #0043ff5e; padding:6px; font-size: 18px;  font-weight: 700; display:block;"
                        >{{$err}} </span>
                        @endforeach

                        <form class="form" action="{{route('student.complaint.post')}}" method="post">
                            @csrf
                                <div class="form-group mb-3 mt-3">
                                    <label for="SelectBatch" class="font-weight-bold">Title</label>
                                   <input type="text" name="title">
                                </div>
                                <div class="form-group mb-3 mt-3">
                                    <label for="SelectBatch" class="font-weight-bold">Details</label>
                                   <input type="text" name="details">
                                </div>
                                

                            <button type="submit" name="submit" class="btn btn-warning mt-3" >Send </button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection



