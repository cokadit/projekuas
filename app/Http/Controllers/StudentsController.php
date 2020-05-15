<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    
    public function index()
    {
        $student = Student::all();
        return view('student.index',compact('student'));
    }


    public function create()
    {
        return view('student.create');
    }


    public function store(Student $student)
    {
        $student = Student::create($this->validateRequest());
        return redirect('/siswa')->withSuccessMessage('Berhasil Menambahkan Data !');
    }

    
    public function show(Student $student)
    {
        return view('student.show',compact('student'));
    }

    
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

    
    public function update(Request $request,Student $student)
    {
        $student->update($this->validateRequest());

        return redirect('/siswa')->withSuccessMessage('Data berhasil diedit !');
    }

    
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/siswa')->withDangerMessage('Data berhasil dihapus !');
    }

    public function validateRequest()
    {
        return request()->validate([
            'nama' => 'required',
            'umur' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'jk' => 'required',
        ]);
         
    }
}
