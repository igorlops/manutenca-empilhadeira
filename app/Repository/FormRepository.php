<?php

namespace App\Repository;

use App\Models\FormContact;

class FormRepository {
    protected $formCon;
    public function __construct(FormContact $formCon = null) {
        $this->formCon = $formCon;
    }
    public function saveFomulario($data) {
        $formConSaved = $this->formCon->create($data);
        return $formConSaved;
    }

    public function allContacts() {
        return $this->formCon->paginate(10);
    }
}
