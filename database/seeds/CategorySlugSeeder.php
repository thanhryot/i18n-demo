<?php

use Illuminate\Database\Seeder;

class CategorySlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['slug' => 'book', 'category_id' => '1', 'locale' => 'en'],
			['slug' => 'pen', 'category_id' => '2', 'locale' => 'en'],
			['slug' => 'ruler', 'category_id' => '3', 'locale' => 'en'],
			['slug' => 'sach', 'category_id' => '1', 'locale' => 'vi'],
			['slug' => 'but', 'category_id' => '2', 'locale' => 'vi'],
			['slug' => 'thuoc', 'category_id' => '3', 'locale' => 'vi'],
			['slug' => 'libro', 'category_id' => '1', 'locale' => 'es'],
			['slug' => 'pero', 'category_id' => '2', 'locale' => 'es'],
			['slug' => 'regla', 'category_id' => '3', 'locale' => 'es'],
		];

        DB::table('categories_slug')->insert($data);
    }
}
