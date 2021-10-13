<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use Illuminate\Http\Request;

class InvoiceController extends Controller{
    
    public function index(){

        $invoices = Invoices::all();

        return view('invoices.index', compact('invoices'));
    } 

    public function create(){

       return view('invoices.create');
    }
    public function store(Request $request){

       $validatedInput = $request->validate([
            'names' => 'required',
            'email' => 'required',
            'items' => 'required',
            'quantity' => 'required',
            'cost' => 'required',
            'date' => 'required',

        ]);
     

        Invoices::create([
            'name' => request('names'),
            'email' => request('email'),
            'items' => request('items'),
            'quantity' => request('quantity'),
            'cost' => request('cost'),
            'date' => request('date')
        ]);

       return view('invoices.index');   
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
