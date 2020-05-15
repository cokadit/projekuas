<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Teacher;

class TeachersController extends Controller
{
    
    public function index()
    {
        $teacher = Teacher::all();
        return view('teacher.index',compact('teacher'));
    }

    
    public function create()
    {
        return view('teacher.create');
    }

    
    public function store(Teacher $teacher)
    {
        $teacher = Teacher::create($this->validateRequest());
        return redirect('/guru')->withSuccessMessage('Berhasil Menambahkan Data !');
    }

    
    public function show( Teacher $teacher)
    {
        return view('teacher.show',compact('teacher'));
    }

    
    public function edit(Teacher $teacher)
    {
        return view('teacher.edit',compact('teacher'));
    }

    
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($this->validateRequest());

        return redirect('/guru')->withSuccessMessage('Berhasil Mengedit Data !');
    }

    
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect('/guru')->withDangerMessage('Data Berhasil Dihapus !');
    }

    public function validateRequest()
    {
        return request()->validate([
            'nama' => 'required',
            'umur' => 'required',
            'telp' => 'required',
            'matapelajaran' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'jk' => 'required',
        ]);
         
    }
}
