<?php

namespace App\Http\Controllers;

use App\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{

  public function __construct(){
    $this->middleware('auth:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return all visits
        return view('visit.index', ['visits' => Visit::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return form for new visit
        return view('visit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate input first
        $request->validate([
          'firstname'=>'required|string',
          'lastname'=> 'required|string',
          'purpose' => 'required|string',
          'host' => 'required|string',
          'timein'  => 'required',
          'timeout' => 'required'
        ]);


        //store individual visits
        $visit = new Visit();
        $visit->firstname = $request->firstname;
        $visit->lastname = $request->lastname;
        $visit->purpose = $request->purpose;
        $visit->host = $request->host;
        $visit->timein = $request->timein;
        $visit->timeout = $request->timeout;
        $visit->save();

        return redirect()->route('visits.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show single visit
        return view('visit.visit', ['visit' => Visit::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit single visit form
        return view('visit.edit', ['visit' => Visit::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //validate input first
        $request->validate([
          'firstname'=>'required|string',
          'lastname'=> 'required|string',
          'purpose' => 'required|string',
          'host' => 'required|string',
          'timein'  => 'required',
          'timeout' => 'required'
        ]);


        //update single visit instance
        $visit = Visit::findOrFail($id);
        $visit->firstname = $request->firstname;
        $visit->lastname = $request->lastname;
        $visit->purpose = $request->purpose;
        $visit->host = $request->host;
        $visit->timein = $request->timein;
        $visit->timeout = $request->timeout;
        $visit->save();

        return redirect()->route('visits.index')->with('success', 'Visit has been updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete instance of a visit
        $visit = Visit::findOrFail($id);
        $visit->delete();
        return redirect()->route('visits.index')->with('success', 'Visit has been deleted Successfully');
    }
}
