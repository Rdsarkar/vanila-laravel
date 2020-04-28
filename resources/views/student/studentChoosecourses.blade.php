@extends('layouts.student')

@section('studentChoosecourses')
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
                        <i class="fas fa-users"></i> <a href="s_view_course.html">View Course</a>
                    </li>
                    <li>
                        <i class="fas fa-users"></i> <a href="s_notes.html">Notes Download</a>
                    </li>
                    <li>
                        <i class="fas fa-users"></i> <a href="s_view_notice.html">View Notice</a>
                    </li>
                    <li>
                        <i class="fas fa-users"></i> <a href="s_check_results.html">Check Results</a>
                    </li>
                    <li>
                        <i class="fas fa-users"></i> <a href="s_msg_send.html">Send Message</a>
                    </li>
                    <li>
                        <i class="fas fa-users"></i> <a href="s_payment.html">Payment</a>
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
                        <h1 class="mt-5">Student Enroll</h1>
                        <form class="form" action="{{route('student.courses.post')}}" method="post">
                            @csrf
                                <div class="form-group mb-3 mt-3">
                                    <label for="SelectBatch" class="font-weight-bold">Select Course ID</label>
                                    <select class="form-control" name="id">
                                        @foreach ($all as $allc)
                                            <option>{{$allc['id']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <button type="submit" name="submit" class="btn btn-warning mt-3" >Confirm </button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection