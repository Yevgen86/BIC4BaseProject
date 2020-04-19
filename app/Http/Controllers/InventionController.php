<?php

namespace App\Http\Controllers;

use App\Invention;
use Illuminate\Http\Request;

class InventionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invention = Invention::all();

        return view('inventions.index', compact('invention'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventions.create');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invention  $invention
     * @return \Illuminate\Http\Response
     */
    public function show(Invention $invention)
    {
        return view('inventions.show', compact('invention'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invention  $invention
     * @return \Illuminate\Http\Response
     */
    public function edit(Invention $invention)
    {
        return view('inventions.edit', compact($invention));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invention  $invention
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invention $invention)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invention  $invention
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invention $invention)
    {
        //
    }
}
