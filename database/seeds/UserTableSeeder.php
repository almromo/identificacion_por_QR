<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('administradores')->insert([
          'nombre_usuario' => 'root',
          'password' => Hash::make('root'),
      ]);
    }
}
