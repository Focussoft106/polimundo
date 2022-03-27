<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    protected $table = "tickets";

    protected $fillable = ['ciudadOrigen','ciudadDestino','fechaSalida','fechaRetorno'];

    protected $hidden = ['id'];


}
