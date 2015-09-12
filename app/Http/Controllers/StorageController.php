<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StorageRequest;
use App\Http\Controllers\Controller;
use App\Storage;
use App\Inventory;

class StorageController extends Controller
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
    public function index()
    {
        return Storage::where('company_id', \Auth::user()->company_id)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('storage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(StorageRequest $request)
    {
        $storage = new Storage;
        $storage->name = $request->name;
        $storage->company_id = $request->user()->id;
        $storage->save();

        return redirect()->to('/storage/'.$request->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $name
     * @return Response
     */
    public function show($name)
    {
        $name = strtolower(str_replace('-', ' ', $name));
        $storage = Storage::where(compact('name', 'id'))->first();
        return view('storage.show', compact('storage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($name)
    {
        $storage = Storage::where(compact('name', 'id'))->first();
        return view('storage.edit', compact('storage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $input = $request->input('inventory');
        foreach ($input as $id => $value) {
            // TODO Validate inventory belongs to users company
            $inventory = Inventory::findOrFail($id);
            $inventory->name = $value['name'];
            $inventory->units = $value['units'];
            $inventory->salesPrice = $value['salesPrice'];
            $inventory->retailPrice = $value['retailPrice'];
            $inventory->save();
        }
        return redirect()->to('/storage/'.$request->storage);
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
