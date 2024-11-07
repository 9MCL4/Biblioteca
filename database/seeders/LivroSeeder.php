<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Livro::create([ 
            'titulo' => 'O Senhor dos Anéis', 
            'autor' => 'J.R.R. Tolkien', 
            'ano_publicacao' => 1954, 
            'resumo' => 'Uma aventura épica pela Terra Média.', 
            ]);

            Livro::create([ 
                'titulo' => 'O Galo e galinha', 
                'autor' => 'Zé granja', 
                'ano_publicacao' => 2010, 
                'resumo' => 'galinhada.', 
                ]);


                Livro::create([ 
                    'titulo' => 'Zezinho', 
                    'autor' => 'Orouja', 
                    'ano_publicacao' => 1999, 
                    'resumo' => 'Uma hitória meria.', 
                    ]);
    }
}
