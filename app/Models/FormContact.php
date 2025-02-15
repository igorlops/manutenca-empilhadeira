<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormContact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['nome','telefone','email','mensagem'];

}
