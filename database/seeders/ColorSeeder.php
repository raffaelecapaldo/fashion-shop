<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = config('dataseeder.colors');

        foreach ($colors as $color) {
            $newColor = new Color();
            $newColor->name = $color['colour_name'];
            $newColor->hex_value = $color['hex_value'];
            $newColor->save();
        }
    }
}
