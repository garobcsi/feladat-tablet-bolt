<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tablets")->insert([
            [
                "id" => 1,
                "manufacturer_id" => 1,
                "name" => "NOKIA T20 10,4\" 64GB WiFi+LTE Kék Tablet",
                "screen_size" => 10.4,
                "ram" => 4,
                "storage" => 64,
                "mobile_network" => "4g",
                "price" => 89999,
                "profit" => 25000,
            ],
            [
                "id" => 2,
                "manufacturer_id" => 1,
                "name" => "NOKIA T20 10,1\" 32GB WiFi Kék Tablet",
                "screen_size" => 10.1,
                "ram" => 3,
                "storage" => 32,
                "mobile_network" => null,
                "price" => 74999,
                "profit" => 16000,
            ],
            [
                "id" => 3,
                "manufacturer_id" => 2,
                "name" => "iPad Air 5 (2022) 10.9 Wifi 64gb",
                "screen_size" => 10.9,
                "ram" => 8,
                "storage" => 64,
                "mobile_network" => null,
                "price" => 344900,
                "profit" => 110000,
            ],
            [
                "id" => 4,
                "manufacturer_id" => 2,
                "name" => "iPad Air 5 (2022) 10.9 Wi-Fi + Cellular 64gb",
                "screen_size" => 10.9,
                "ram" => 8,
                "storage" => 64,
                "mobile_network" => "5g",
                "price" => 394629,
                "profit" => 150000,
            ],
            [
                "id" => 5,
                "manufacturer_id" => 3,
                "name" => "SAMSUNG Galaxy Tab A8 10,5\" 32GB WiFi Szürke Galaxy Tablet (SM-X200)",
                "screen_size" => 10.5,
                "ram" => 3,
                "storage" => 32,
                "mobile_network" => null,
                "price" => 85899,
                "profit" => 21000,
            ],
            [
                "id" => 6,
                "manufacturer_id" => 3,
                "name" => "SAMSUNG Galaxy Tab S8 Ultra 14,6\" 128GB WiFi Grafit Tablet (SM-X900)",
                "screen_size" => 14.6,
                "ram" => 8,
                "storage" => 128,
                "mobile_network" => null,
                "price" => 469409,
                "profit" => 190000,
            ],
            [
                "id" => 7,
                "manufacturer_id" => 4,
                "name" => "LENOVO Tab M10 Plus (3rd gen) 10,6\" 128GB WiFi/LTE Szürke Tablet (ZAAN0182GR)",
                "screen_size" => 10.6,
                "ram" => 4,
                "storage" => 64,
                "mobile_network" => "4g",
                "price" => 121988,
                "profit" => 39000,
            ],
            
        ]);
    }
}
