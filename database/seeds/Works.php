<?php

use Illuminate\Database\Seeder;

class Works extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('works')->insert([
            [
                'icon' => "logo2.png",
                'title' => "DESIGN",
                'content' => "Banner"
            ]
        ]);
    }
}
