<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jobs')->insert([
            [
                'queue' => 'default',
                'payload' => json_encode(['test' => 'Test']),
                'attempts' => 1,
                'available_at' => now()->timestamp,
                'created_at' => now()->timestamp,
            ],
            [
                'queue' => 'default',
                'payload' => json_encode(['test' => 'Test2']),
                'attempts' => 2,
                'available_at' => now()->timestamp,
                'created_at' => now()->timestamp,
            ],
        ]);
    }
}