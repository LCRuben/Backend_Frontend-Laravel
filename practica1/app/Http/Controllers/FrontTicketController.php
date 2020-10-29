<?php

namespace App\Http\Controllers;
use App\Models\Ticket;

use Illuminate\Http\Request;

class FrontTicketController extends Controller
{
    private $tickets = 
    [
        1 => ['id' => 1, 'nombre' => 'In the Morning', 'precio' => 25, 'fecha' => '2020/11/15', 'hora' => '10:00'],
        2 => ['id' => 2, 'nombre' => 'In the Afternoon', 'precio' => 25, 'fecha' => '2020/11/15', 'hora' => '16:00'],
        3 => ['id' => 3, 'nombre' => 'At Night', 'precio' => 25, 'fecha' => '2020/11/15', 'hora' => '20:00'],
        4 => ['id' => 4, 'nombre' => 'All day', 'precio' => 60, 'fecha' => '2020/11/15', 'hora' => '10:00 - 23:00'],
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.ticket.index');
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
    public function show($id)
    {
        return view('frontend.ticket.show', $this->tickets[$id]);
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
