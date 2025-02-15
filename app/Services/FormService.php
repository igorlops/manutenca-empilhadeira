<?php

namespace App\Services;
use App\Mail\ContatoMail;
use App\Repository\FormRepository;
use Illuminate\Support\Facades\Mail;

class FormService {
    protected $formRepository;
    public function __construct(FormRepository $formRepository) {
        $this->formRepository = $formRepository;
    }
    public function getPayload(array $request) {
        return [
            'nome' => $request['nome'],
            'telefone' => $request['telefone'],
            'email' => $request['email'],
            'mensagem' => $request['mensagem'],
        ];
    }

    public function saveContact($data) {
        return $this->formRepository->saveFomulario($data);
    }

    public function enviaFormMail($data) {
        Mail::to('claudioigorai@gmail.com', 'Ntec Manutenção')->send(new ContatoMail($data));
    }

    public function getContacts() {
        return $this->formRepository->allContacts();
    }
}
