<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorariosDisponiveis extends Model
{
    protected $fillable = ['user_id', 'dia_da_semana', 'horario'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
