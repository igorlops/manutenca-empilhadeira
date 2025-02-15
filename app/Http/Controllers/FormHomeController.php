<?php

namespace App\Http\Controllers;

use App\Services\FormService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormHomeController extends Controller
{
    protected $formService;
    public function __construct(FormService $formService) {
        $this->formService = $formService;
    }
    public function getForm() {
        return view('form.contact');
    }
    public function formStore(Request $request) {
        $data = $this->formService->getPayload($request->all());
        $validator = Validator::make($data, [
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'mensagem' => 'nullable|string|max:1000',
        ],
        [
            'nome.required' => 'O campo Nome é obrigatório.',
            'nome.string' => 'O Nome deve conter apenas texto.',
            'nome.max' => 'O Nome deve ter no máximo 255 caracteres.',

            'telefone.required' => 'O campo Telefone é obrigatório.',
            'telefone.string' => 'O Telefone deve ser um texto válido.',
            'telefone.max' => 'O Telefone deve ter no máximo 20 caracteres.',

            'email.required' => 'O campo E-mail é obrigatório.',
            'email.email' => 'Informe um E-mail válido.',
            'email.max' => 'O E-mail deve ter no máximo 255 caracteres.',

            'mensagem.max' => 'A Mensagem deve ter no máximo 1000 caracteres.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $this->formService->enviaFormMail($data);
        $formSaved = $this->formService->saveContact($data);
        if(!$formSaved) {
            return redirect()->back()->with([
                'error_form' => true,
                'message' => 'Falha no envio do formulário!'
            ]);
        }

        // Se passou na validação, continua o processo
        return redirect()->back()->with([
            'error_form' => false,
            'message' => 'Mensagem enviada com sucesso!'
        ]);
    }
    public function getContactsSaved() {
        $contactsSaved = $this->formService->getContacts();
        // dd($contactsSaved);
        return view('form.panel',compact('contactsSaved'));
    }
}
