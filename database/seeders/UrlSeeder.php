<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('url_shorteners')->insert([
            [
                'original_url' => 'https://www.google.com',
                'title' => 'Google',
                'shortened_url' => 'a',
            ],
            [
                'original_url' => 'https://www.stackoverflow.com',
                'title' => 'Stack Overflow',
                'shortened_url' => 'b',
            ],
            [
                'original_url' => 'https://www.gmail.com',
                'title' => 'Gmail',
                'shortened_url' => 'c',
            ],
            [
                'original_url' => 'https://www.laracasts.com',
                'title' => 'Laracasts',
                'shortened_url' => 'd',
            ],
            [
                'original_url' => 'https://www.github.com',
                'title' => 'Github',
                'shortened_url' => 'e',
            ],
            [
                'original_url' => 'https://morera.me/cv/jorge',
                'title' => 'Jorge My Online CV',
                'shortened_url' => 'f',
            ],
        ]);
    }
}
