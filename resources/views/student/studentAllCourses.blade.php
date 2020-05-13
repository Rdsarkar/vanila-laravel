@extends('layouts.student')

@section('studentAllcourses')
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
                        <h1 class="mt-5">All Couses</h1>
                        <div class="container">
                            <div class="row text-center  justify-content-center mr-lg-4">
                                
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table-col">
                                        <th scope="col">Course ID</th>
                                        <th scope="col">Course Type</th>
                                        <th scope="col">Batch</th>
                                        <th scope="col">Class Time</th>
                                        <th scope="col">Class Day</th>
                                        <th scope="col">Fees</th>
                                        </tr>
                                    </thead>
                                    @foreach ($all as $allc)
                                    <tbody>
                                    
                                            <th scope="row">{{$allc['id']}}</th>
                                            <td>{{$allc['courseType']}}</td>
                                            <td>{{$allc['batch']}}</td>
                                            <td>{{$allc['classTime']}}</td>
                                            <td>{{$allc['classDay']}}</td>
                                            <td>{{$allc['fees']}}</td>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection