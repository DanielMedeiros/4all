<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('eventos')->insert([
            'imagem_evento' => asset('fourall/public/img/evento_1.jpg'), 
            'nome_evento' => 'BALONISMO',
            'local_evento' => 'PRAIA DO LARANJAL',
            'cidade_evento' => 'PELOTAS - RS',
            'resumo_evento' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'valor' => '50',

        ]);

          DB::table('eventos')->insert([
            'imagem_evento' => asset('fourall/public/img/evento_2.jpg'), 
            'nome_evento' => 'FENADOCE',
            'local_evento' => 'CENTRO DE EVENTOS',
            'cidade_evento' => 'PELOTAS - RS',
            'resumo_evento' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'valor' => '25',

        ]);

          DB::table('eventos')->insert([
            'imagem_evento' => asset('fourall/public/img/evento_3.jpg'), 
            'nome_evento' => 'FESTIVAL DA MUSICA',
            'local_evento' => 'TEATRO GUARANI',
            'cidade_evento' => 'PELOTAS - RS',
            'resumo_evento' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'valor' => '15',

        ]);
    }
}
