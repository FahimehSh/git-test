<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'پست اول',
                'short_content' => 'خلاصه پست اول',
                'content' => 'محتوای پست اول',
                'category_id' => '1',
                'user_id' => '2'
            ],
            [
                'title' => 'پست دوم',
                'short_content' => 'خلاصه پست دوم',
                'content' => 'محتوای پست دوم',
                'category_id' => '2',
                'user_id' => '3'
            ],
            [
                'title' => 'پست سوم',
                'short_content' => 'خلاصه پست سوم',
                'content' => 'محتوای پست سوم',
                'category_id' => '5',
                'user_id' => '3'
            ],
            [
                'title' => 'پست چهارم',
                'short_content' => 'خلاصه پست چهارم',
                'content' => 'محتوای پست چهارم',
                'category_id' => '4',
                'user_id' => '1'
            ],
            [
                'title' => 'پست پنجم',
                'short_content' => 'خلاصه پست پنجم',
                'content' => 'محتوای پست پنجم',
                'category_id' => '2',
                'user_id' => '1'
            ]
        ]);
    }
}
