<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $data = Student::all();
        return view('show', ['students' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('create');
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

          $obj = new Student();
       $obj->name = $request->name;
       $obj->email = $request->email;
       $obj->birth_date = $request->birth_date;
       $obj->salary = $request->salary;
      
       if($obj->save())
          return redirect()->to('students');
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
         $data = Student::find($id);
//        dd($data);
        return view('update', ['data' => $data]);
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

         $obj = new Student();
        $obj=$obj->find($request->id);
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->birth_date = $request->birth_date;
        $obj->salary = $request->salary;
        $obj->status = $request->status;
        if($obj->save())
            return redirect()->to('students');
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

         $obj = new Student();
        $obj=$obj->find($id);
        if($obj->delete())
            return redirect()->to('students');
    }
}
