<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = config('dataSeeder.brands');
        foreach ($brands as $brand) {
            $new = new Brand();
            $new->name = $brand['name'];
            $new->slug = Str::slug($brand['name'], '-');
            $new->logo = $brand['logo'];
            $new->save();
        }
    }
}
