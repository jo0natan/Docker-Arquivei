<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arquivei extends Model
{
    protected $table = 'nfe';

    protected $fillable = [
        'chave',
        'valor'

    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public static function rules($isNew = true)
    {
        return [
            'chave' => 'required|min:5|max:100'

        ];
    }
}
