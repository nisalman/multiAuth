<?php

use Illuminate\Database\Seeder;
Use App\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
          [
              'name'=>'User',
              'email'=>'user@gmail.com',
              'is_admin'=>'0',
              'password'=>bcrypt(12345678),
          ],
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'is_admin'=>'1',
                'password'=>bcrypt("12345678")
            ],
            [
                'name'=>'Operator',
                'email'=>'operator@gmail.com',
                'is_admin'=>'2',
                'password'=>bcrypt("12345678")
            ],
            [
                'name'=>'Visitor',
                'email'=>'visitor@gmail.com',
                'is_admin'=>'3',
                'password'=>bcrypt("12345678")
            ],
        ];
        foreach ($users as $key=>$value)
        {
            User::create($value);
        }
    }
}
