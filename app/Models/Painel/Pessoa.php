<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';
    
    protected $fillable = [
        'nome',
        'sobrenome',
        'tipo_pessoa',
        'cpf',
        'cnpj',
        'rg',
        'data_nasc',
        'tel_1',
        'tel_2',
        'rua',
        'bairro',
        'numero',
        'cep',
        'complemento',
        'cidade_id',
        'status'
    ];
    
    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'cidade_id');
    }

    public function search($data)
    {
        $pessoas = $this->where(function ($query) use ($data) {
            if (isset($data) && $data != null) {
                //dd($data);
                $query->where('cpf', $data);
            }
        })->toSql();
        if($pessoas){
            dd($pessoas);
            print_r('estou aqui tem gente');
            return  true;
        }else{
            print_r('não tem gente');
            return false;
        }
        
    }
}
