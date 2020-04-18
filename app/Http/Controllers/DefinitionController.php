<?php

namespace App\Http\Controllers;

use App\Definition;
use Illuminate\Http\Request;

class DefinitionController extends Controller
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
        $definition = Definition::all();

        return view('definitions.index', compact('definition'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('definitions.create');
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
     * @param  \App\Definition  $definition
     * @return \Illuminate\Http\Response
     */
    public function show(Definition $definition)
    {
        $definition = Definition::findOrFail($definition);

        return view('definitions.show', compact('definition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Definition  $definition
     * @return \Illuminate\Http\Response
     */
    public function edit(Definition $definition)
    {
        return view('definitions.edit', compact('definition'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Definition  $definition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Definition $definition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Definition  $definition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Definition $definition)
    {
        //
    }
}
