<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendPruebaTask;

class PruebaTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prueba-task:work';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando de prueba para ejecutar en la tarea programada';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::to("info@joseascurradev.xyz")->send(new SendPruebaTask());
        Log::info("Se esta ejecutando la tarea programada dentro del comando personalizado");
    }
}
