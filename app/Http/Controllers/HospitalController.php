<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients=Hospital::get();
        return view('hospital.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|alpha_num',
            'mobile'=>'required|alpha_num',
            'disease'=>'required|alpha_num',
            'medicines'=>'required|alpha_num'

        ]);
        $patients=Hospital::create($request->all());
        // $patients=new Hospital();
        // $patients->name=$request->name;
        // $patients->mobile=$request->mobile;
        // $patients->disease=$request->disease;
        // $patients->medicines=$request->medicines;
        $patients->save();
        return redirect()->Route('hospital.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hospital $hospital)
    {
        return view ('hospital.show',compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patients=Hospital::find($id);
        return view('hospital.edit',compact('patients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $patients=Hospital::update($request->find($id));
        $patients=Hospital::find($id);
        $patients->name=$request->name;
        $patients->mobile=$request->mobile;
        $patients->disease=$request->disease;
        $patients->medicines=$request->medicines;
        $patients->save();
        return redirect()->Route('hospital.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->route('hospital.index');
    }
}
