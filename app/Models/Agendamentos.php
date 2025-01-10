<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamentos extends Model
{
    protected $table = 'horarios_disponiveis';
    protected $fillable = ['user_id', 'servico_id', 'dia_da_semana', 'horario'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

  
    public function servico()
    {
        return $this->belongsTo(Servico::class);
    }

}
