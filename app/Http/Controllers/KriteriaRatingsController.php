<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\KriteriaBobot;
use App\Models\KriteriaRatings;
class KriteriaRatingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteriar=KriteriaRatings::with('kriteriabobot')->get();
        // $paginate=KriteriaRatings::orderBy('id', 'asc')->paginate(5);
        return view('kriteriaratings.index',compact('kriteriar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kriteriab=KriteriaRatings::with('kriteriabobot')->get();
        $kriteriabo=KriteriaBobot::get();
        return view('kriteriaratings.create', compact('kriteriab','kriteriabo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kriteriabobot_id' => 'required',
            'rating' => 'required',
            'description' => 'required',
        ]);

        KriteriaRatings::create($request->all());

        return redirect()->route('kriteriaratings.index')
                        ->with('success','Criteria created successfully.');
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
    public function edit(KriteriaRatings $kriteriarating)
    {
        $kriteriab=KriteriaRatings::with('kriteriabobot')->get();
        return view('kriteriaratings.edit',compact('kriteriarating','kriteriab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KriteriaRatings $kriteriarating)
    {
        $request->validate([
            'rating' => 'required',
            'description' => 'required',
        ]);

        $kriteriarating->update($request->all());

        return redirect()->route('kriteriaratings.index')
                        ->with('success','Criteria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KriteriaRatings $kriteriarating)
    {
        $kriteriarating->delete();

        return redirect()->route('kriteriaratings.index')
                        ->with('success','Criteria deleted successfully');
    }
}
