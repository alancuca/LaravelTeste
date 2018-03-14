<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contato.index');
    }

    public function detalhe()
    {
        return view('contato.detalhe');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $products = array(
            array('name' => 'Keyboard',    'catId' => 'hw', 'quantity' =>  10, 'id' => 1),
            array('name' => 'Mouse',       'catId' => 'hw', 'quantity' =>  20, 'id' => 2),
            array('name' => 'Monitor',     'catId' => 'hw', 'quantity' =>   0, 'id' => 3),
            array('name' => 'Joystick',    'catId' => 'hw', 'quantity' =>  15, 'id' => 4),
            array('name' => 'CPU',         'catId' => 'hw', 'quantity' =>  15, 'id' => 5),
            array('name' => 'Motherboard', 'catId' => 'hw', 'quantity' =>  11, 'id' => 6),
            array('name' => 'Windows',     'catId' => 'os', 'quantity' => 666, 'id' => 7),
            array('name' => 'Linux',       'catId' => 'os', 'quantity' => 666, 'id' => 8),
            array('name' => 'Mac',         'catId' => 'os', 'quantity' => 666, 'id' => 9),
        );

        $result = array_where($products, function($key, $value)
        {
            return $value->id == $id ? $value : null;
        });
        

        return view('contato.detalhe', ['model' => $result[0]]);
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
