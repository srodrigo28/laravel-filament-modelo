<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProdutoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome'       => "PLAYSTATION 5",
            'descricao'  => "CONSOLE dos anos 2022",
            'imagem'     => "url imagem site",
            'quantidade' => 40,
            'valor'      => 4500.00
        ];
        // return [
        //     'nome'       => fake('pt_BR')->name(),
        //     'descricao'  => fake('pt_BR')->unique()->word,
        //     'imagem'     => fake()->unique()->text,
        //     'quantidade' => faker()->randomNumber(2),
        //     'valor'      => faker()->randomNumber(4),
        // ];
    }
}
