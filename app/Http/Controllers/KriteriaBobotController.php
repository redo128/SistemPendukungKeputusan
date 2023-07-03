<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\KriteriaBobot;
class KriteriaBobotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteriab=KriteriaBobot::get();
        return view('kriteriabobot.index',compact('kriteriab'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteriabobot.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'weight' => 'required',
            'description' => 'required',
        ]);

        KriteriaBobot::create($request->all());

        return redirect()->route('kriteriabobot.index')
                        ->with('success','Kriteria berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KriteriaBobot $kriteriabobot)
    {
        return view('kriteriabobot.edit',compact('kriteriabobot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KriteriaBobot $Kriteriabobot)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'weight' => 'required',
            'description' => 'required',
        ]);
        $Kriteriabobot->update($request->all());
        return redirect()->route('kriteriabobot.index')
                        ->with('success','Kriteria update berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KriteriaBobot $kriteriabobot)
    {
        $kriteriabobot->delete();

        return redirect()->route('kriteriabobot.index')
                        ->with('success','kriteria berhasil dihapus');
    }
}
