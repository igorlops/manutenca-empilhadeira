<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;

    /**
     * Create a new message instance.
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('site.ntecmanutencao@gmail.com', 'LP Ntec Manutenção')
                    ->subject('Novo Contato Recebido')
                    ->view('email.template')
                    ->with(['dados' => $this->dados]);
    }
}
