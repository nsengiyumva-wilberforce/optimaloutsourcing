<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            'skill_id' => 'S00001',
            'skill_name' => 'Java',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('skills')->insert([
            'skill_id' => 'S00002',
            'skill_name' => 'JavaScript',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('skills')->insert([
            'skill_id' => 'S00003',
            'skill_name' => 'PHP',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('skills')->insert([
            'skill_id' => 'S00004',
            'skill_name' => 'Python',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
