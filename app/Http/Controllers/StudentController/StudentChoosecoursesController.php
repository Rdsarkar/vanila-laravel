<?php

namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Course;
use App\Model\ChooseCourse;

use Validator;

class StudentChoosecoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        // $validation = Validator::make($request->all(),[
        //      'id'=>'required | ',
        //     'paid'=>'required | max:$p',
            
        // ]);

        //     if($validation->fails()){
        //         return back()
        //                 ->with('errors', $validation->errors())
        //                 ->withInput();
        //     }

        //     $find = Course::where('uemail', $request->uemail)
        //         ->where('upassword', $request->upassword)
        //         ->first();

        // if($find != null){

            $id = $request->id;
            $data = Course::find( $id);

            $choose = new ChooseCourse();
            $choose->fees = $data->fees;
            $choose->paid = $request->paid;
            $choose->cid = $id;
            $choose->uid = $request->session()->get('regid');

            $choose->save();
            // $p = $choose->fees;
            return redirect()->back();
    // }
    //   else{
    //         $request->session()->flash('msg', 'invalid username/password');
    //         return redirect()->route('login');
    //     }

        
    


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
