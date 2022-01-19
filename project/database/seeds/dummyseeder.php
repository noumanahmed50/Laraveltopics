<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class dummyseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('querybuilder')->insert([
            'name'=>Str::random(10),
            'address'=>Str::random(10)
        ]);
    }
}
