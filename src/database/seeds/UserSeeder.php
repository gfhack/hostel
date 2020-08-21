<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserSeeder extends Seeder
{
    private const PASSWORD = 'testing';
    private const ADMIN_EMAIL = 'admin@hostel.com';
    private const HOSPEDE_EMAIL = 'hospede@hostel.com';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::where('email', self::HOSPEDE_EMAIL)->doesntExist()) {
            factory(User::class)->create([
                'email' => self::HOSPEDE_EMAIL,
                'password' => Hash::make(self::PASSWORD),
            ]);
        }

        if (User::where('email', self::ADMIN_EMAIL)->doesntExist()) {
            factory(User::class)->states('admin')->create([
                'email' => self::ADMIN_EMAIL,
                'password' => Hash::make(self::PASSWORD),
            ]);
        }
    }
}
