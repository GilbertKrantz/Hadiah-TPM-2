<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Major;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();

        return view('welcome', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $majors = Major::all();

        return view('createMahasiswa', compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->Name . '_' . $request->NIM . '.' . $extension;
        $request->file('image')->storeAs('/public/Flazz/', $filename);

        Mahasiswa::create([
            'Name' => $request->Name,
            'NIM' => $request->NIM,
            'GPA' => $request->GPA,
            'image' => $filename,
            'major_id' => $request->Major
        ]);

        return redirect('/welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);

        return view('showMahasiswa', compact('mahasiswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('editMahasiswa', compact('mahasiswa'));
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

        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->Name . '_' . $request->NIM . '.' . $extension;
        $request->file('image')->storeAs('/public/Flazz/', $filename);

        Mahasiswa::findOrFail($id)->update([
            'Name' => $request->Name,
            'NIM' => $request->NIM,
            'GPA' => $request->GPA,
            'image' => $filename,
            'major_id' => $request->Major
        ]);

        return redirect('/welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Mahasiswa::destroy($id);

        return redirect('/welcome');
    }
}
