<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Archivo;

class SendArchivo extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $archivo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Archivo $archivo)
    {
        $this->archivo = $archivo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->markdown('mails.sendarchivo');
        $mail->attachFromStorageDisk("public",$this->archivo->url);
        return $mail;
    }
}
