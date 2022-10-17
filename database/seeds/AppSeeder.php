<?php

use Illuminate\Database\Seeder;
use App\RojexApp;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $app=new RojexApp;
        $app->name="Congregation Secretary's Assistant";
        $app->code="8ECC120F-A97C-4EF2-BF64-6851A7DB4C97";
        $app->save();
    }
}
