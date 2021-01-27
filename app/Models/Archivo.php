<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Events\ArchivoCreated;

class Archivo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "nombre","extension","url"
    ];

    protected $dispatchesEvents = [
        "created" => ArchivoCreated::class,
    ];

}
