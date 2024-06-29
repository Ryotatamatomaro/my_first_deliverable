<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Academic_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academic_categories')->insert([
            'academic' => '人文学',
            ]);
        DB::table('academic_categories')->insert([
            'academic' => '自然科学',
            ]);
        DB::table('academic_categories')->insert([
            'academic' => '社会科学'
            ]);
    }
}
