<?php

namespace Database\Seeders;

use App\Models\Texture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
        foreach ($textures as $texture) {
            $newTexture = new Texture();
            $newTexture->name = $texture;
            $newTexture->slug = Str::slug($newTexture->name, '-');
            $newTexture->save();
        }
    }
}
