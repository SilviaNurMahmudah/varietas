<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $admin = new \App\User;
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = \Hash::make("admin123");
        $admin->roles = "Admin";
        $admin->save();
        $this->command->info("Admin berhasil ditambah");
    }

}
