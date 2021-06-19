<?php

namespace App\Http\Requests;

use App\Arquivei;
use Illuminate\Foundation\Http\FormRequest;

class CreateArquiveiRequest extends FormRequest
{

    public function rules()
    {
        return Arquivei::rules();
    }
}
