@extends('layouts.student')

@section('studentProfileEdit')

<section>
    <div id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <i class="fas fa-users"></i> <a class="ad-active" href="student_dashboard.html"> Std Profile</a>
                </li>
                <li>
                    <i class="fas fa-users"></i> <a href="s_enroll_course.html">Enroll Course</a>
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

        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h1 class="mt-5">Student Info</h1>

                        @foreach($errors->all() as $err)
                        <span style="background-color: #0043ff5e; padding:6px; font-size: 18px;  font-weight: 700; display:block;"
                        >{{$err}} </span>
                        @endforeach
                        <span style="font-size: 18px;  font-weight: 700; display:block;"
                        >{{session('msg')}} </span>
                 
                        <form action="{{route('student.profileUpdate',['id'=>$data->id])}}" class="mt-5">
                            {{csrf_field()}}
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" value="{{$data->name}}">
                            </div>
                            <div class="form-group">
                              <label for="email1">Email address</label>
                              <input type="text" class="form-control" id="email1" value="{{$data->email}}" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone No</label>
                                <input type="text" class="form-control" id="phone" value="{{$data->phone}}" name="phone">
                              </div>
                            <div class="form-group">
                              <label for="pass">Password</label>
                              <input type="password" class="form-control" id="pass" value="{{$data->password}}" name="password">
                              <i class="fas fa-eye btn btn-dark mt-1 eye" onclick=" myFunction()"></i>

                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

</script>
@endsection
