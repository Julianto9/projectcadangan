<?php

namespace Database\Seeders;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new \App\Models\User;
        $user->uuid = Uuid::uuid4()->getHex();
        $user->username = "support";
        $user->name = "support";
        $user->roles = "admin";
        $user->password = Hash::make("123456");
        $user->created_by = 1;
        $user->save();
      
        $this->command->info("All User success inserted");
    }
}
