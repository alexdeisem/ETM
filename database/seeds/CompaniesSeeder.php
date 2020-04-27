<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'full_name' => 'Everyone Task Manager',
            'short_name' => 'ETM',
            'domain' => 'etm',
            'support_email' => '',
            'background' => '',
            'logo' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
