<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ahmed ragab',
            'email' => 'ahmedragabyasin2020@gmail.com',
            'password' => Hash::make('258258258'),
        ]);

        // User::create([
        //     'name' => 'wolf',
        //     'email' => 'ahmedragabyasin2020@gmail.com',
        //     'password' => bcrypt('258258258'),

        //     ]);
    }
}
