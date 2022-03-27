<?php

namespace Database\Seeders;
use App\Models\DetalleTicket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $det_ticket = new DetalleTicket();

        $det_ticket->precio="50";
        $det_ticket->aerolinea="Latam";
        $det_ticket->numEscala="0";
        $det_ticket->duracionVuelo="45";
        $det_ticket->ticket_id="1";

        $det_ticket->save();
    }
}
