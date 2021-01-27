<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\ArchivoCreated;
use Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendArchivo;

class ArchivoCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ArchivoCreated $event)
    {
        Log::info("Se ha subido el archivo: {$event->archivo->nombre}");
        Mail::to("info@joseascurradev.xyz")->send(new SendArchivo($event->archivo));
    }
}