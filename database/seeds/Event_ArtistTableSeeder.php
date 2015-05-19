<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\User;

class Event_artistTableSeeder extends Seeder
{
    public function run()
    {

        Eloquent::unguard();

        DB::table('event_artists')->delete();


    }
}