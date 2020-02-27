<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['name' => 'book'],
			['name' => 'pen'],
			['name' => 'ruler']
		];

        DB::table('categories')->insert($data);
    }
}
