<?php

use Illuminate\Database\Seeder;

class PartidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('partidos')->insert([
        [
          "nombre" => "Azul",
        ],

        [
          "nombre" => "Rojo",
        ],

        [
          "nombre" => "Verde",
        ],
      ]);
    }
}
