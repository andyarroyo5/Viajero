<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Place;
use View;
use Session;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $places = Place::orderBy('id','DESC')->paginate(5);
       return view('places.index',compact('places'))
           ->with('i', ($request->input('page', 1) - 1) * 5);

        // $places=Place::all();
        //
        // return View::make('places.index')
        //     ->with('places', $places);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('places.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'name' => 'required',
           'country' => 'required',
           'continent' => 'required',
       ]);

       Place::create($request->all());

    //    Session::flash('message', 'Successfully created nerd!');
    //             return Redirect::to('places');

        Session::flash('message', 'Successfully created place!');
        return redirect()->route('places.index');
                        //->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $place= Place::find($id);
       return view('places.show',compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place= Place::find($id);
        return view('places.edit',compact('place'));
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
        $this->validate($request, [
            'name' => 'required',
            'country' => 'required',
            'continent' => 'required',
        ]);
        Place::find($id)->update($request->all());
        return redirect()->route('places.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Place::find($id)->delete();
        Session::flash('success', 'Successfully created nerd!');
        return redirect()->route('places.index');
                     //  ->with('success','Product deleted successfully');

    }
}
