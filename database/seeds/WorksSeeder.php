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
        $binaryFile = 'http://localhost/rhafi-personal-web/public/img/e-commerce.png';
        DB::table('works')->insert([
            [
                'icon' => $binaryFile,
                'title' => "E-COMMERCE",
                'content' => "Flower Store"
            ]
        ]);
    }
}
