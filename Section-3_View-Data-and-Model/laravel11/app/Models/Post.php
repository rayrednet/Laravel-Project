<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'my-internship-experience-in-taiwan',
                'title' => 'My Internship Experience in Taiwan',
                'author' => 'Rayssa Ravelia',
                'body' => 'Last summer, I had the amazing opportunity to travel to Taiwan for an internship. My time there was filled with a mix of work and exploration. I stayed in Taipei and visited many iconic spots like Taipei 101 and the Shilin Night Market. The public transportation was incredibly efficient, and I enjoyed the food culture, especially the street food. One memorable experience was visiting Jiufen, a mountainous area with breathtaking views. Taiwan gave me so much, both professionally and personally, and I can’t wait to return one day.',
            ],
            [
                'id' => 2,
                'slug' => 'a-relaxing-getaway-to-bali',
                'title' => 'A Relaxing Getaway to Bali',
                'author' => 'Rayssa Ravelia',
                'body' => 'Bali is always a great escape from the busy city life. I recently took a short vacation to this beautiful island, and it was exactly what I needed. The beaches, with their golden sand and clear water, were the perfect backdrop for relaxation. I spent my days visiting temples, surfing, and indulging in local Balinese cuisine. One highlight was visiting Uluwatu Temple at sunset—absolutely magical. Bali has a charm like no other, and every time I visit, I discover something new about its culture and beauty.',
            ]
        ];
    }

    public static function find($slug): array {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] === $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] === $slug);
        if(!$post) {
            abort(404);
        }
        return $post;
    }
}
