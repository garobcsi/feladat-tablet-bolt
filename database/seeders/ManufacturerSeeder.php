<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("manufacturers")->insert([
            [
                "id" => 1,
                "name" => "Nokia",
                "webpage" => "https://www.nokia.com",
            ],
            [
                "id" => 2,
                "name" => "Apple",
                "webpage" => "https://www.apple.com",
            ],
            [
                "id" => 3,
                "name" => "Samsung",
                "webpage" => "https://www.samsung.com",
            ],
            [
                "id" => 4,
                "name" => "Lenovo",
                "webpage" => "https://www.lenovo.com",
            ],
        ]);
    }
}
