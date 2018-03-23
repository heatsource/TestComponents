<?php

use Illuminate\Database\Seeder;

class persona extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        db:create('personas',[
            'nombre'=>'brain rafael',
            'apellido1'=>'ortega',
            'apellido2'=>'yañez',
            'nacimiento'=>'1990-06-16'
        ]);
    }
}
