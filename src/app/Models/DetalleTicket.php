<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTicket extends Model
{
    use HasFactory;

    protected $table = "detalle_tickets";

    protected $fillable = ['precio','aerolinea','numEscala','duracionVuelo','ticket_id'];

    protected $hidden = ['id'];


}
