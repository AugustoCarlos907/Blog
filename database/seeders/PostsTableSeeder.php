<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts =[ 
        [
           'user_id'=> 1,
           'title'=>'Primeiro Post do Administrador',
           'content'=> 'Este é o primeiro post do administrador do sistema.', 
           'created_at' => Carbon::now(),
         ],
         [
            'user_id'=> 1,
            'title'=>'Uma nota importante',
            'content'=> 'Todos os usuários devem manter o respeito mútuo no sistema.', 
            'created_at' => Carbon::now(),
         ],
         [
            'user_id'=> 2,
            'title'=>'Olá a todos  ',
            'content'=> 'O meu nome é joão, acabei de me registar no sistema.', 
            'created_at' => Carbon::now(),
         ],
         [
            'user_id'=> 1,
            'title'=>'Bem vindo ao blog',
            'content'=> 'Muito obrigado por se juntar à nós , sinta-se em casa!', 
            'created_at' => Carbon::now(),
        ],
        [
            'user_id'=> 2,
            'title'=>'Agradecimentos',
            'content'=> 'Obrigado, Administrador , estou feliz por fazer parte desta comunidade.', 
            'created_at' => Carbon::now(),
        ]];

        DB::table('posts')->insert($posts);
    }
}
