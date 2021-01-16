<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Gifts;

class GiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Gifts = Gifts::all();
        return $Gifts;
        // return view('giftIndex', compact('Gifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('giftsCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'category' => 'required|max:255'
        ]);
        $Gifts = Gifts::create($storeData);
        return $Gifts;

        // return redirect('/gifts')->with('completed', 'gifts has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Gifts = Gifts::findOrFail($id);
        return $Gifts;
        // return view('giftsEdit', compact('Gifts'));
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
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'category' => 'required|max:255'
        ]);
        Gifts::whereId($id)->update($updateData);
        return $updateData;
        // return redirect('/gifts')->with('completed', 'gift has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Gifts = Gifts::findOrFail($id);
        $Gifts->delete();
        return true;
        // return redirect('/gifts')->with('completed', 'gift has been deleted');
    }
}
