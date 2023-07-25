<?php

namespace Database\Seeders;

use App\Models\NovelSource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NovelSourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (NovelSource::seedData() as $novelSource){
            NovelSource::firstOrCreate(['id' => $novelSource->id], $novelSource->toArray());
        }
    }
}
