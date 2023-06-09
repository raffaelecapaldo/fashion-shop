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
            $new->title = $brand['title'];
            $new->slug = Str::slug($brand['title'], '-');
            $new->image = $brand['image'];
            $new->body = $brand['body'];
            $new->save();
        }
    }
}
