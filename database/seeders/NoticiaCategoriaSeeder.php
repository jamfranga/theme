<?php

namespace Database\Seeders;

use App\Models\NoticiaCategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiaCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        NoticiaCategoria::factory(10)->create();

    }
}
