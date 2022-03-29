<?php

namespace App\Http\Controllers;

use App\Models\DetalleTicket;
use App\Models\Tickets;
use Illuminate\Http\Request;

class DetTicketController extends Controller
{
    public function show(DetalleTicket $detalleTicket)
    {
        $detalleTicket = DetalleTicket::all();

    return response()->json( $detalleTicket );
    }

    public function books()
    {
        return $this->hasMany(Tickets::class);
    }
    public function showOne(int $id)
    {
        $detalleTicket = DetalleTicket::where('id', '=', $id)->first();

        return response()->json( $detalleTicket );
    }

}
