<?php

namespace App\Http\Controllers;

use App\Detail;

use Illuminate\Http\Request;

use App\Http\Requests\DetailRequest;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$details = Detail::all();
        return view('details.index', compact('details'));
    }

    public function test()
    {
    	$details = Detail::all();
        return view('details.test', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('details.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DetailRequest $request)
    {
        Detail::create($request->all());
        return redirect()->route('detail.index')->with('message','Data created successfully');

         /*$detail = new Detail(array(
      		'name' => $request->get('name'),
      		'email'  => $request->get('email'),
      		'ic'  => $request->get('ic'),
      		'phonenumber'  => $request->get('phonenumber'),
      		'officenumber'  => $request->get('officenumber'),
      		'occupation'  => $request->get('occupation'),
      		'race'  => $request->get('race'),
      		'religion'  => $request->get('religion'),
      		'address1'  => $request->get('address1'),
      		'address2'  => $request->get('address2'),
      		'poscode'  => $request->get('poscode'),
      		'city'  => $request->get('city'),
      		'province'  => $request->get('[province]'),
      		'note'  => $request->get('note')
    	));

	    $detail->save();

	    $imageName = $detail->id . '.' . 
	        $request->file('image')->getClientOriginalExtension();

	    $request->file('image')->move(
	        base_path() . '/public/images/catalog/', $imageName
	    );

	    return \Redirect::route('detail.index', 
	        array($detail->id))->with('message', 'Detail added!'); 
	    //Detail::create($request->all()); 
	    //return redirect()->route('detail.index')->with('message','Data created successfully');*/
         
                        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        return view('details.show', compact('detail'));
    }

    public function testshow(Detail $detail)
    {
        return view('details.testshow', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        return view('details.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DetailRequest $request, Detail $detail)
    {
        $detail->update($request->all());
        return redirect()->route('detail.index')->with('message','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        $detail->delete();
        return redirect()->route('detail.index')->with('message','Data deleted successfully');
    }

    
}
