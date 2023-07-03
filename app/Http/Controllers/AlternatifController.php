<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\AlternatifScore;
use App\Models\KriteriaBobot;
use App\Models\KriteriaRatings;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alternatifscore=AlternatifScore::with('kriteriabobot','kriteriarating','alternatif')->get();
        $alternatif=Alternatif::get();
        $kriteriabobot=KriteriaBobot::get();
        return view('alternatifscore.index',compact('alternatifscore','alternatif','kriteriabobot'));
        
    }
    public function keputusan()
    {
        $alternatifscore=AlternatifScore::with('kriteriabobot','kriteriarating','alternatif')->get();
        $alternatif=Alternatif::get();
        $kriteriabobot=KriteriaBobot::get();
        return view('keputusan',compact('alternatifscore','alternatif','kriteriabobot'));
       
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alternatifscore=AlternatifScore::with('kriteriabobot','kriteriarating','alternatif')->get();
        $alternatif=Alternatif::get();
        $kriteriabobot=KriteriaBobot::get();
        $kriteriaratings=KriteriaRatings::with('kriteriabobot')->get();
        return view('alternatifscore.create',compact('alternatifscore','alternatif','kriteriabobot','kriteriaratings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        // Save the alternative
        $alt = new Alternatif;
        $alt->nama = $request->name;
        $alt->save();

        // Save the score
        $kriteriabobot = KriteriaBobot::get();
        foreach ($kriteriabobot as $cw) {
            $score = new AlternatifScore();
            $score->alternatif_id = $alt->id;
            $score->kriteriabobot_id = $cw->id;
            $score->kriteriarating_id = $request->input('kriteriabobot_id')[$cw->id];
            $score->save();
        }

        return redirect()->route('alternatif.index')
            ->with('success', 'Alternative created successfully.');
    
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
    public function edit(Alternatif $alternatif)
    {
        $alternatifscore=AlternatifScore::with('kriteriabobot','kriteriarating','alternatif')->get();
        $alternatif=Alternatif::get();
        $kriteriabobot=KriteriaBobot::get();
        $alternatifscores = AlternatifScore::where('alternatif_id', $alternatif->id)->get();
        return view('alternatifscore.edit', compact('alternatif', 'alternatifscores', 'kriteriabobot', 'kriteriarating'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alternatif $alternatif)
    {
        // $alternatif = AlternatifScore::where('alternatif_id', $alternatif->id)->delete();
        // $alternatif->delete();
        $alternatif = $alternatif::find($alternatif->id);
        $alternatif->delete();
        return redirect()->route('alternatif.index')
            ->with('success', 'Alternative deleted successfully');
    }
}
