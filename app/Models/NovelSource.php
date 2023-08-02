<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class NovelSource
 *
 * @property int $id
 * @property string $title
 * @property string $base_url
 * @property string|null $novel_listing_url
 * @property string $slug
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class NovelSource extends Model
{
	protected $table = 'novel_sources';

	protected $fillable = [
		'title',
		'base_url',
		'novel_listing_url',
		'slug'
	];

	const WUXIA_WORLD = 1;
	const NOVEL_USB = 2;
	const KITCHEN_NOVEL = 3;

    /**
     * @return array
     */
    public static function seedData() : Collection
    {
        return collect([
            [
                'id' => self::WUXIA_WORLD,
                'title' => 'Wuxia World',
                'base_url' => 'https://readnovel.eu',
                'novel_listing_url' => 'https://wuxiaworld.eu/api/novel-filter/?itemsPerPage=12&page=1&novelStatus=CD
                        &exclude_tags=beautiful-female-lead,female-protagonist,tomboyish-female-lead,rpe
                        &exclude_category=yaoi,romance,gender-bender,smut,adult,shounen-ai,shoujo-ai&order=-rating',
                'slug' => 'wuxia-world'
            ],
            [
                'id' => self::NOVEL_USB,
                'title' => 'Novel USB',
                'base_url' => 'https://novelusb.com',
                'novel_listing_url' => 'https://novelusb.com/sort/completed',
                'slug' => 'novel-usb'
            ],
            [
                'id' => self::KITCHEN_NOVEL,
                'title' => 'Kitchen Novel',
                'base_url' => 'https://www.kitchennovel.com/',
                'novel_listing_url' => null,
                'slug' => 'kitchen-novel'
            ]

        ])->map(function($item){
            $instance = new self($item);
            $instance->id = $item['id'];
            return $instance;
        });

        /**
         * WUXIA WORLD
         * - Get Tags: https://wuxiaworld.eu/api/tags/all_tags
         * - Get Tags: https://wuxiaworld.eu/api/categories/all_categories
         * - Get Novel: https://readnovel.eu/novel/{NOVEL_SLUG}
         * - Get Novel Chapters: https://wuxiaworld.eu/api/chapters/{NOVEL_SLUG}
         * - Get Chapter: https://readnovel.eu/chapter/{CHAPTER_SLUG}
         */
	}
}
