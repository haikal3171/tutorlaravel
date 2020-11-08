<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valdiation
        $request->validate([
            'nama' => 'required|unique:students|max:255',
            'noic' => 'required|max:12',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        // //Cara Pertama
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->noic = $request->noic;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        // //Cara Kedua
        // Student::create([
        //     'nama' => $request->nama,
        //     'noic' => $request->noic,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);
        
        // //Cara Ketiga
        Student::create($request->all());

        return redirect('/students')->with('status', 'Student berjaya ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // Valdiation
        $request->validate([
            'nama' => 'required|unique:students|max:255',
            'noic' => 'required|max:12',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'noic' => $request->noic,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan,
                ]);
        return redirect('/students')->with('status', 'Data '.$student->nama.' berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Student berjaya dipadam!');
    }
}
