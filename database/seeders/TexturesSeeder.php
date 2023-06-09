<?php

namespace Database\Seeders;

use App\Models\Texture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TexturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $textures = config('dataseeder.textures');
        foreach ($textures as $key => $texture) {
            $newTexture = new Texture();
            $newTexture->name = $texture[$key];
            $newTexture->slug = str_replace(' ', '-', $texture[$key]);
            $newTexture->save();
        }
    }
}
