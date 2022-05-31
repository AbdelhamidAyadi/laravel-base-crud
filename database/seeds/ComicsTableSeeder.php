<?php

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach ($comics as $key => $comic) {
            $new_comic = New Comic();

            $new_comic -> fill( $comic );

            $new_comic -> save();

        }
    }
}
