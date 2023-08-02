<?php

namespace Database\Seeders;

use App\Enums\NovelStatusEnum;
use App\Models\Genre;
use App\Models\NovelGenre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Novel;
use App\Models\NovelSource;

class NovelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $novels = [
            [
                'novel_source_id' => NovelSource::NOVEL_USB,
                'title' => 'ARCANE ACADEMY: THE DIVINE EXTRACTION LEGACY',
                'slug' => 'arcane-academy-the-divine-extraction-legacy-novel',
                'author' => 'xlntz',
                'novel_url' => 'https://novelusb.com/novel-book/arcane-academy-the-divine-extraction-legacy-novel',
                'completion_status' => NovelStatusEnum::ONGOING,
                'description' => '-',
                'cover_image_url' => 'https://freewebnovel.com/files/article/image/3/3046/3046s.jpg'
            ],
            [
                'novel_source_id' => NovelSource::NOVEL_USB,
                'title' => 'SUPER GENE',
                'slug' => 'super-gene-novel',
                'author' => 'Twelve Winged Dark Burning Angel',
                'novel_url' => 'https://novelusb.com/novel-book/super-gene-novel#tab-chapters-title',
                'completion_status' => NovelStatusEnum::COMPLETED,
                'description' => "The future unfolded on a magnificent scale into the Interstellar Age. Humanity finally solved the space warp technology, but when humanity transported themselves into the other end, they discovered that place neither had a past nor future, nor was there any land under the starry skies…… The mysterious sanctuary was actually a world filled with countless tyrannical unusual organisms. Humanity faced their great leap in evolution, starting the most glorious and resplendent new era under the starry skies. \"Slaughtered the God Blood organism 'Black Beetle'. Received the God Blood Black Beetle's Beast Soul. Used the God Blood Black Beetle's flesh. Randomly obtaining 0 to 10 points of God Gene(s).\"",
                'cover_image_url' => 'https://novelusb.com/media/novel/super-gene.jpg',
                'genres' => [Genre::SCI_FI, Genre::MECHA, Genre::XUANHUAN, Genre::MARTIAL_ARTS, Genre::ADVENTURE, Genre::COMEDY, Genre::ACTION],
            ]
        ];

        foreach($novels as $novel)
        {
            $genres = isset($novel['genres']) ? $novel['genres'] : null;

            if(isset($novel['genres'])){ unset($novel['genres']); }

            $novel = Novel::firstOrCreate(
                ['slug' => $novel['slug']],
                $novel
            );

            if(!empty($genres)) {
                $novelGenreInserts = array_map(function ($genreId) use ($novel) {
                    return [
                        'novel_id' => $novel->id,
                        'genre_id' => $genreId
                    ];
                }, $genres);

                NovelGenre::insertOrIgnore($novelGenreInserts);
            }
        }
    }
}
