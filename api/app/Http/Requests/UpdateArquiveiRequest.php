<?php

namespace App\Http\Requests;

use App\Arquivei;
use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class UpdateArquiveiRequest extends FormRequest
{

    public function rules()
    {
        return Arquivei::rules(false);
    }
}
