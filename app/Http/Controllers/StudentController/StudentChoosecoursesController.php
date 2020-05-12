<?php

namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Validator;
use App\Model\Course;
use App\Model\ChooseCourse;
use App\Model\Login;

class StudentChoosecoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //

       
                           
        

        // $id = $req->session()->get('regid');
       
        // $data= ChooseCourse::where('cid',  $req->$cid )
        //                    ->where('uid', $id )
        //                    ->get();

        // $all= Course::where('id',  $req->$cid )
        //             ->get();
        
        // $std= Login::where('utype',student)->get();            

        // return view('student.studentChoosecourses',compact('data','all','std'));

        $all= Course::all();
        return view('student.studentChoosecourses',['all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $id = $request->id;
            $data = Course::find( $id);
            $courseFees =  $data->fees;
            $val =1000;
            $validation = Validator::make($request->all(),[
              'id'=>'required ',
              'paid'=>"required | gte: 1000, | lte: $courseFees"
            
            ]);

            if($validation->fails()){
                return back()
                        ->with('errors', $validation->errors())
                        ->withInput();
            }

            $choose = new ChooseCourse();
            $choose->fees = $data->fees;
            $choose->paid = $request->paid;
            $choose->cid = $id;
            $choose->uid = $request->session()->get('regid');

            $choose->save();
          
            return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
