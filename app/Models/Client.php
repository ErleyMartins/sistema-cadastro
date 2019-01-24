<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Client extends Model
{
    protected $fillable = ['logradouro', 'genero'];

    public function logradouro($logradouro = null){
        $logradouros = [
            'Rua',
            'Avenida',
            'Estrada',
             'Via',
             'Viaduto',
             'Viela'
        ]; 

        if (!$logradouro)
            return $logradouros;

        return $logradouros[$logradouro];

        
    }

    public function genero($genero = null){
        $generos = [
            'M' => 'Masculino',
            'F' => 'Feminino'
        ];
        
        if (!$genero)
            return $generos;

        return $generos[$genero];
    }

    public function search(array $data){
        return $this->where(function ($query) use ($data){
            if (isset($data['id']))
                $query->where('id', $data['id']);
            if (isset($data['nome']))
                $query->where('nome', $data['nome']);
            if (isset($data['nasc']))
                $query->where('nasc', $data['nasc']);
            if (isset($data['rg']))
                $query->where('cpf', $data['cpf']);
            if (isset($data['genero']))
                $query->where('genero', $data['genero']);
        });

    }
}
