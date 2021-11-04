<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'idNumber'=>'required'
        ]);
        $client = new Client();
        $client->name = $request->name;
        $client->address = $request->address;
        $client->phone = $request->phone;
        $client->idNumber = $request->idNumber;
        $client->save();
        return response()->json();
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return response()->json($client);
    }

    public function update(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'idNumber'=>'required'
        ]);
        $client =Client::find($request->id);
        $client->name = $request->name;
        $client->address = $request->address;
        $client->phone = $request->phone;
        $client->idNumber = $request->idNumber;
        $client->save();
        return response()->json();
    }

    public function destroy(Request $request,$id)
    {
        $dealer = Client::find($request->id);
        $dealer->delete();
        return redirect()->route('allData');
    }

    public function getId($selected)
    {
        $client = Client::where('id',$selected)->get()->first();
        return response()->json($client);
    }
}
