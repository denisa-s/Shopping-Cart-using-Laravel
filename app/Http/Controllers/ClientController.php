<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients = Client::orderBy('nume','ASC')->paginate(5);
        $value=($request->input('page',1)-1)*5;
        return view('clients.list',compact('clients'))->with('i',$value);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, ['username' => 'required','password' =>'required','email' => 'required','strada' =>'required','oras' => 'required','tara' =>'required','codpostal' => 'required','nrcard' =>'required','tipcard' => 'required','dataexpcard' =>'required','acceptareemail' => 'required','nrinregRC' =>'required','nume' => 'required','codfiscal' =>'required']);
        // create new task
        Client::create($request->all());
        return redirect()->route('clients.index')->with('success', 'Your client added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
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
        $this->validate($request, ['username' => 'required','password' =>'required','email' => 'required','strada' =>'required','oras' => 'required','tara' =>'required','codpostal' => 'required','nrcard' =>'required','tipcard' => 'required','dataexpcard' =>'required','acceptareemail' => 'required','nrinregRC' =>'required','nume' => 'required','codfiscal' =>'required']);
        Client::find($id)->update($request->all());
        return redirect()->route('clients.index')->with('success','Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::find($id)->delete();
        return redirect()->route('clients.index')->with('success','Client removed successfully');
    }
}
