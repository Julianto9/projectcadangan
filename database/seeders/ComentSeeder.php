<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cm = new \App\Models\Coment();
        $cm->name = "test";
        $cm->komentar = "halo";
        $cm->save();
    }
}
