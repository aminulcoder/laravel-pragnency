<?php

namespace Database\Seeders;

use App\Models\GalleryCategory;
use App\Models\Review\ReviewType;
use App\Models\Category;
use Illuminate\Database\Seeder;


use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = array(
            array('name' => 'Apps', 'slug' => 'apps', 'author_id' => '1'),
            array('name' => 'Dashboard', 'slug' => 'dashboard', 'author_id' => '1'),
            array('name' => 'Landing Page', 'slug' => 'landing-page', 'author_id' => '1'),
            array('name' => 'Website', 'slug' => 'website', 'author_id' => '1')
        );




        Category::insert($categories);


    }
}
