<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MatakuliahController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('MataKuliah.index', [
            'matakuliah' => MataKuliah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('MataKuliah.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        MataKuliah::create($data);

        return redirect()->action([MatakuliahController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Matakuliah::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('MataKuliah.edit' , [
            'MataKuliah' => MataKuliah::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $data = $request->except('_token');

        Matakuliah::find($id)->update($data);

        return redirect()->action([MataKuliahController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Matakuliah::findOrFail($id)->delete();
        return redirect()->action([MataKuliahController::class, 'index']);
    }
}