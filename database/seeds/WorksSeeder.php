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
        // $binaryFile = 'http://localhost/rhafi-personal-web/public/images/website-penggajian.png';
        // $binaryFile = 'http://localhost/rhafi-personal-web/public/images/web-psi.png';
        // $binaryFile = 'http://localhost/rhafi-personal-web/public/images/t-shirt.png';
        $binaryFile = 'http://localhost/rhafi-personal-web/public/images/reachtoforgive.png';
        DB::table('works')->insert([
            [
                'icon' => $binaryFile,
                'title' => "E-COMMERCE",
                'content' => "Flower Store"
            ]
        ]);
    }
}
