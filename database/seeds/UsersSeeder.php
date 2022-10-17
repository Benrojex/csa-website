<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User;
        $user->name="Benjamin";
        $user->surname="Ezugwu";
        $user->email="benjamin.obinna@yahoo.com";
        $user->password=bcrypt("secret");
        $user->api_token = Str::random(60);
        $user->save();

        $user=new User;
        $user->name="Awele";
        $user->surname="Ezugwu";
        $user->email="nellygreener@yahoo.com";
        $user->password=bcrypt("secret");
        $user->api_token = Str::random(60);
        $user->save();
    }
}
