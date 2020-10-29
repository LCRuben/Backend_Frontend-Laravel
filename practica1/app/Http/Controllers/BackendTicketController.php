<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

use Illuminate\Suppor\Facades\View;

class BackendTicketController extends Controller
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
        return view('backend.index', $this->tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('backend', ['create' => 'Ticket creado con exito.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($ticket)
    {
        return view('backend.show', $this->tickets[$ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($ticket)
    {
        return view('backend.edit', $this->tickets[$ticket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ticket)
    {
        return redirect('backend', ['update' => 'Ticket modificado con exito.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($ticket)
    {
        return redirect('backend')->with('Delete', 'Ticket Eliminado con exito');
    }
}
