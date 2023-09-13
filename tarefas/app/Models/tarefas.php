<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class tarefas extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'titulo', 'descricao', 'data_vencimento', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
}