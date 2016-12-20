<?php

use Illuminate\Database\Seeder;

class DomainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('domains')->insert([
            'domain_name' => 'test',
            'user_id' => 1,
        ]);
    }
}
