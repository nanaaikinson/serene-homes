<?php

use App\Models\PropertyType;
use Illuminate\Database\Seeder;

class PropertyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        PropertyType::insert([
            ["name" => "Apartment", "mask" => generate_mask(), "created_at" => $now, "updated_at" => $now],
            ["name" => "House", "mask" => generate_mask(), "created_at" => $now, "updated_at" => $now],
            ["name" => "Guest house", "mask" => generate_mask(), "created_at" => $now, "updated_at" => $now],
            ["name" => "Commercial Space", "mask" => generate_mask(), "created_at" => $now, "updated_at" => $now],
            ["name" => "Office", "mask" => generate_mask(), "created_at" => $now, "updated_at" => $now],
            ["name" => "Retail", "mask" => generate_mask(), "created_at" => $now, "updated_at" => $now],
            ["name" => "Shop", "mask" => generate_mask(), "created_at" => $now, "updated_at" => $now],
            ["name" => "Townhouse", "mask" => generate_mask(), "created_at" => $now, "updated_at" => $now],
            ["name" => "Warehouse", "mask" => generate_mask(), "created_at" => $now, "updated_at" => $now],
        ]);
    }
}
