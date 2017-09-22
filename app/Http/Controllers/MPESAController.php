<?php

namespace App\Http\Controllers;

use App\Mpesa;
use Illuminate\Http\Request;

class MPESAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cruds = Mpesa::all()->toArray();
        return view('mpesa.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('mpesa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //conversation_id  transaction_id mpesa_transaction_id amount status created_date
        $crud = new Mpesa([
            'conversation_id' => $request->get('conversation_id'),
            'transaction_id' => $request->get('transaction_id'),
            'mpesa_transaction_id' => $request->get('mpesa_transaction_id'),
            'amount' => $request->get('amount'),
            'status' => $request->get('status'),
            'created_date' => $request->get('created_date')
        ]);

        $crud->save();
        return redirect('/mpesa');
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
