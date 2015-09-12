<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\InventoryRequest;
use App\Storage;
use App\Inventory;
use App\User;

class InventoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($name)
    {
        $storage = Storage::where(compact(['name', 'company_id']))->first();
        return $storage->with('inventory')->get();
        // return Inventory::where('storage_id', $storage->id)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($name)
    {
        $storage = Storage::where(compact(['name', 'company_id']))->first();
        return view('inventory.create')->with('storage', $storage);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(InventoryRequest $request, $name)
    {   
        $inventory = new Inventory;
        $inventory->name = $request->name;
        $inventory->storage_id = Storage::where('name', $name)->where('company_id', \Auth::user()->company->id)->first()->id;
        $inventory->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
