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
                        
                        @foreach($errors->all() as $err)
                        <span style="background-color: #0043ff5e; padding:6px; font-size: 18px;  font-weight: 700; display:block;"
                        >{{$err}} </span>
                        @endforeach

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
                                
                                <div class="form-group mb-3 mt-3">
                                    <label for="SelectBatch" class="font-weight-bold">Pay Here</label>
                                    <input type="number" name="paid">
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



<script>
     
     for (let index = 0; index <103; index++) {
         
         for (let index2 = 0; index2 < 2; index2++) {
            
             
         }
     }
</script>