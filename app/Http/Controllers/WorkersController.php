<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Worker;

class WorkersController extends Controller
{
   
    public function index()
    {
        $worker = Worker::all();
        return view('worker.index',compact('worker'));
    }

    
    public function create()
    {
        return view('worker.create');
    }

    
    public function store(Worker $worker)
    {
        $worker = Worker::create($this->validateRequest());
        return redirect('/pegawai')->withSuccessMessage('Berhasil Menambahkan Data !');
    }

    
    public function show(Worker $worker)
    {
        return view('worker.show',compact('worker'));
    }

    
    public function edit(Worker $worker)
    {
        return view('worker.edit',compact('worker'));
    }

    
    public function update(Request $request, Worker $worker)
    {
        $worker->update($this->validateRequest());

        return redirect('/pegawai')->withSuccessMessage('Berhasil Mengedit Data !');
    }

    
    public function destroy(Worker $worker)
    {
        $worker->delete();
        return redirect('/pegawai')->withDangerMessage('Berhasil Menambahkan Data !');
    }

    public function validateRequest()
    {
        return request()->validate([
            'nip' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'jk' => 'required',
        ]);
         
    }
}
