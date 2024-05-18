<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class laraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $curso->name = "laravel";
        $curso->descripcion = "El mejor framework del mundo";
        $curso->categoria = "Desarrollo WEB";
        $curso->save();

        $curso1 = new Curso();
        $curso1->name = "JAVA";
        $curso1->descripcion = "El mejor lenguaje de escritorio";
        $curso1->categoria = "Desarrollo escritorio y WEB";
        $curso1->save();

        $curso2 = new Curso();
        $curso2->name = "kotlin";
        $curso2->descripcion = "El mejor lenguaje movil";
        $curso2->categoria = "Desarrollo android";
        $curso2->save();
    }
}
