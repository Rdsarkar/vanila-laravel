@extends('layouts.student')

@section('studentNotice')
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
                        <i class="fas fa-users"></i> <a href="s_notes.html">Notes Download</a>
                    </li>
                    <li>
                        <i class="fas fa-users"></i> <a href="{{route('student.viewnotice')}}">View Notice</a>
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
                        <h1 class="mt-5">Notice</h1>
                        <div class="container">
                            <div class="row text-center  justify-content-center mr-lg-4">
                                
                                    <table class="table table-striped">
                                        <thead>
                                          <tr class="table-col">
                                            <th scope="col">Topic</th>
                                            <th scope="col">Details</th>
                                          </tr>
                                        </thead>
                                        @foreach ($all as $allc)
                                        <tbody>
                                        
                                                <th scope="row">{{$allc['topic']}}</th>                                                
                                                <td>{{$allc['details']}}</td>                                               
                                            @endforeach
                                          
                                        </tbody>
                                      </table>
                               
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection