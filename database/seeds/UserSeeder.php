<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'name'=>'admin',
          'email'=>'matheusnascgomes@gmail.com',
          'password'=>bcrypt("12345"),
        ];

        if (User::where('email','=',$data['email'])->count()) {
          $user = User::where('email','=',$data['email'])->first();
          $user->update($data);
          echo "Usuário Alterado!";
        } else {
          User::create($data);
          echo "Usuário Criado!";
        }
    }
}
