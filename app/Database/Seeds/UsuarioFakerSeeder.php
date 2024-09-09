<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioFakerSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new \App\Models\UsuarioModel();

     // use the factory to create a Faker\Generator instance
        $faker = \Faker\Factory::create();

       $criarQtsUsers =50; 

       $usuariosPush =[];

       

       for($i =0; $i < $criarQtsUsers; $i++){

        array_push($usuariosPush,
        [

            'nome' => $faker->unique()->name,
            'email'=> $faker->unique()->email,
            'password_hash' =>'123456',//alterar o faker seeder quando,
             //conhecermos como criptografar a sneha;
            'ativo' => true,

        ]);
       }


    //   echo '<pre>';
    //   print_r($usuariosPush);
    //   exit;
    $usuarioModel->skipValidation(true)//Bypass validacao
           ->protect(false)
           ->insertBatch($usuariosPush); //Bypass na protecao dos campos allowed fields

           echo "$criarQtsUsers criados com sucesso!";

     }


}
