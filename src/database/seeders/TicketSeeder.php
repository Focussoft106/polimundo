<?php

namespace Database\Seeders;
use App\Models\Tickets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ticket = new Tickets();

        $ticket->ciudadOrigen="Guayaquil";
        $ticket->ciudadDestino="Quito";
        $ticket->fechaSalida="2022-03-27";
        $ticket->fechaRetorno="2022-04-01";

        $ticket->save();
    }
}
