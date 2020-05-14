@extends('layouts.student')

@section('studentNotes')
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
                        <i class="fas fa-users"></i> <a class="ad-active" href="{{route('student.notes')}}">Notes Download</a>
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
                            <h1 class="mt-5">View Notes</h1>
                            <div class="container">
                                <div class="row text-center  justify-content-center mr-lg-4">
                                    
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="table-col">
                                            <th scope="col">Serial</th>
                                            <th scope="col">Notes Title</th>
                                            <th scope="col">Course ID</th>
                                            </tr>
                                        </thead>
                                        @foreach ($downloads as $down)   
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{$down->id}}</th>
                                                <td>{{$down->title}} </td>
                                                <td>{{$down->cid}}</td>
                                                <td>
                                                    <a href="{{route('student.notes.show',$down->id)}}">View</a>
                                                </td>
                                            </tr>
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

@endsection

