<?php

use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $binaryFile = '../../public/img/logo.png';
        DB::table('works')->insert([
            [
                'icon' => $binaryFile,
                'title' => "DESIGN",
                'content' => "Banner"
            ]
        ]);
    }
}
