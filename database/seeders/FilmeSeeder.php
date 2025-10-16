<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert(
            [
                [
                    'nome' => "Vingadores Ultimato",
                    'descricao' => "to me sentindo estranho Sr stark",
                    'diretor_id' => 3,
                    'produtora_id' => 2,
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Five Nights At Freddy",
                    'descricao' => "O foxy pac",
                    'diretor_id' => 1,
                    'produtora_id' => 1,
                    'nacionalidade' => 2
                ],
                [
                    'nome' => "Shrek",
                    'descricao' => "talvez não funcione com burros",
                    'diretor_id' => 2,
                    'produtora_id' => 5,
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Indiana Jones",
                    'descricao' => "pega no meu chicote",
                    'diretor_id' => 3,
                    'produtora_id' => 3,
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Aquaman",
                    'descricao' => "fala com peixes",
                    'diretor_id' => 1,
                    'produtora_id' => 4,
                    'nacionalidade_id' => 2
                ]
                ]
        );
    }
}
