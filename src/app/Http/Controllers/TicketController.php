<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function show(Tickets $tickets)
    {
        $ticket = Tickets::all();

    return response()->json($ticket);
    }


    public function showOne(int $id)
    {
        $ticket = Tickets::where('id', '=', $id)->first();

        return response()->json( $ticket );
    }

}
