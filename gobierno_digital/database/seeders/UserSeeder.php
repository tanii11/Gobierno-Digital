<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name' => 'Tania',
            'email' => 'tania@gmail.com',
            'password'=> bcrypt('tania1234')
        ])->assignRole('Administrador');

        $arrays = range(0,14);
        foreach ($arrays as $valor) {
            User::create([
                'name' => Str::random(10),
                'email' => Str::random(10),
                'password'=> bcrypt(Str::random(10))
            ]);
        }

    }
}
