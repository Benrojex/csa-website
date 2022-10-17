<?php

use Illuminate\Database\Seeder;
use App\AppVersion;

class AppVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appVersion=new AppVersion;
        $appVersion->version="2.3.3";
        $appVersion->save();
    }
}
