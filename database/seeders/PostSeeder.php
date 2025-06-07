<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quotes = [
            [
                'title' => 'Elon Musk',
                'body'  => 'When something is important enough, you do it even if the odds are not in your favor.',
            ],
            [
                'title' => 'Steve Jobs',
                'body'  => 'Innovation distinguishes between a leader and a follower.',
            ],
            [
                'title' => 'Linus Torvalds',
                'body'  => 'Talk is cheap. Show me the code.',
            ],
        ];

        foreach ($quotes as $quote) {
            Post::create([
                'title' => $quote['title'],
                'body'  => $quote['body'],
            ]);
        }
    }
}
