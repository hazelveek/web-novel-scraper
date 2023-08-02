<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property int $id
 * @property string $slug
 * @property string $display_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 * @mixin \Eloquent
 */
class Genre extends Model
{
	protected $table = 'genres';

	protected $fillable = [
		'slug',
		'display_name'
	];
    const ACTION = 1;
    const ADULT = 2;
    const ADVENTURE = 3;
    const ANIME = 4;
    const ARTS = 5;
    const COMEDY = 6;
    const DRAMA = 7;
    const EASTERN = 8;
    const ECCHI = 9;
    const FAN_FICTION = 10;
    const FANTASY = 11;
    const GAME = 12;
    const GENDER_BENDER = 13;
    const HAREM = 14;
    const HISTORICAL = 15;
    const HORROR = 16;
    const ISEKAI = 17;
    const JOSEI = 18;
    const LGBTQ = 19;
    const MAGIC = 20;
    const MAGICAL_REALISM = 21;
    const MANHUA = 22;
    const MARTIAL_ARTS = 23;
    const MATURE = 24;
    const MECHA = 25;
    const MILITARY = 26;
    const MODERN_LIFE = 27;
    const MOVIES = 28;
    const MYSTERY = 29;
    const PSYCHOLOGICAL = 30;
    const REALISTIC_FICTION = 31;
    const REINCARNATION = 32;
    const ROMANCE = 33;
    const SCHOOL_LIFE = 34;
    const SCI_FI = 35;
    const SEINEN = 36;
    const SHOUJO = 37;
    const SHOUJO_AI = 38;
    const SHOUNEN = 39;
    const SHOUNEN_AI = 40;
    const SLICE_OF_LIFE = 41;
    const SMUT = 42;
    const SPORTS = 43;
    const SUPERNATURAL = 44;
    const SYSTEM = 45;
    const TRAGEDY = 46;
    const URBAN_LIFE = 47;
    const VIDEO_GAMES = 48;
    const WAR = 49;
    const WUXIA = 50;
    const XIANXIA = 51;
    const XUANHUAN = 52;
    const YAOI = 53;
    const YURI = 54;

    public static function seedData()
    {
        return [
            ['id' => self::ACTION, 'display_name' => 'Action', 'slug' => 'action'],
            ['id' => self::ADULT, 'display_name' => 'Adult', 'slug' => 'adult'],
            ['id' => self::ADVENTURE, 'display_name' => 'Adventure', 'slug' => 'adventure'],
            ['id' => self::ANIME, 'display_name' => 'Anime', 'slug' => 'anime'],
            ['id' => self::ARTS, 'display_name' => 'Arts', 'slug' => 'arts'],
            ['id' => self::COMEDY, 'display_name' => 'Comedy', 'slug' => 'comedy'],
            ['id' => self::DRAMA, 'display_name' => 'Drama', 'slug' => 'drama'],
            ['id' => self::EASTERN, 'display_name' => 'Eastern', 'slug' => 'eastern'],
            ['id' => self::ECCHI, 'display_name' => 'Ecchi', 'slug' => 'ecchi'],
            ['id' => self::FAN_FICTION, 'display_name' => 'Fan-fiction', 'slug' => 'fan-fiction'],
            ['id' => self::FANTASY, 'display_name' => 'Fantasy', 'slug' => 'fantasy'],
            ['id' => self::GAME, 'display_name' => 'Game', 'slug' => 'game'],
            ['id' => self::GENDER_BENDER, 'display_name' => 'Gender bender', 'slug' => 'gender-bender'],
            ['id' => self::HAREM, 'display_name' => 'Harem', 'slug' => 'harem'],
            ['id' => self::HISTORICAL, 'display_name' => 'Historical', 'slug' => 'historical'],
            ['id' => self::HORROR, 'display_name' => 'Horror', 'slug' => 'horror'],
            ['id' => self::ISEKAI, 'display_name' => 'Isekai', 'slug' => 'isekai'],
            ['id' => self::JOSEI, 'display_name' => 'Josei', 'slug' => 'josei'],
            ['id' => self::LGBTQ, 'display_name' => 'Lgbtq', 'slug' => 'lgbtq'],
            ['id' => self::MAGIC, 'display_name' => 'Magic', 'slug' => 'magic'],
            ['id' => self::MAGICAL_REALISM, 'display_name' => 'Magical realism', 'slug' => 'magical-realism'],
            ['id' => self::MANHUA, 'display_name' => 'Manhua', 'slug' => 'manhua'],
            ['id' => self::MARTIAL_ARTS, 'display_name' => 'Martial arts', 'slug' => 'martial-arts'],
            ['id' => self::MATURE, 'display_name' => 'Mature', 'slug' => 'mature'],
            ['id' => self::MECHA, 'display_name' => 'Mecha', 'slug' => 'mecha'],
            ['id' => self::MILITARY, 'display_name' => 'Military', 'slug' => 'military'],
            ['id' => self::MODERN_LIFE, 'display_name' => 'Modern life', 'slug' => 'modern-life'],
            ['id' => self::MOVIES, 'display_name' => 'Movies', 'slug' => 'movies'],
            ['id' => self::MYSTERY, 'display_name' => 'Mystery', 'slug' => 'mystery'],
            ['id' => self::PSYCHOLOGICAL, 'display_name' => 'Psychological', 'slug' => 'psychological'],
            ['id' => self::REALISTIC_FICTION, 'display_name' => 'Realistic fiction', 'slug' => 'realistic-fiction'],
            ['id' => self::REINCARNATION, 'display_name' => 'Reincarnation', 'slug' => 'reincarnation'],
            ['id' => self::ROMANCE, 'display_name' => 'Romance', 'slug' => 'romance'],
            ['id' => self::SCHOOL_LIFE, 'display_name' => 'School life', 'slug' => 'school-life'],
            ['id' => self::SCI_FI, 'display_name' => 'Sci-fi', 'slug' => 'sci-fi'],
            ['id' => self::SEINEN, 'display_name' => 'Seinen', 'slug' => 'seinen'],
            ['id' => self::SHOUJO, 'display_name' => 'Shoujo', 'slug' => 'shoujo'],
            ['id' => self::SHOUJO_AI, 'display_name' => 'Shoujo ai', 'slug' => 'shoujo-ai'],
            ['id' => self::SHOUNEN, 'display_name' => 'Shounen', 'slug' => 'shounen'],
            ['id' => self::SHOUNEN_AI, 'display_name' => 'Shounen ai', 'slug' => 'shounen-ai'],
            ['id' => self::SLICE_OF_LIFE, 'display_name' => 'Slice of life', 'slug' => 'slice-of-life'],
            ['id' => self::SMUT, 'display_name' => 'Smut', 'slug' => 'smut'],
            ['id' => self::SPORTS, 'display_name' => 'Sports', 'slug' => 'sports'],
            ['id' => self::SUPERNATURAL, 'display_name' => 'Supernatural', 'slug' => 'supernatural'],
            ['id' => self::SYSTEM, 'display_name' => 'System', 'slug' => 'system'],
            ['id' => self::TRAGEDY, 'display_name' => 'Tragedy', 'slug' => 'tragedy'],
            ['id' => self::URBAN_LIFE, 'display_name' => 'Urban life', 'slug' => 'urban-life'],
            ['id' => self::VIDEO_GAMES, 'display_name' => 'Video games', 'slug' => 'video-games'],
            ['id' => self::WAR, 'display_name' => 'War', 'slug' => 'war'],
            ['id' => self::WUXIA, 'display_name' => 'Wuxia', 'slug' => 'wuxia'],
            ['id' => self::XIANXIA, 'display_name' => 'Xianxia', 'slug' => 'xianxia'],
            ['id' => self::XUANHUAN, 'display_name' => 'Xuanhuan', 'slug' => 'xuanhuan'],
            ['id' => self::YAOI, 'display_name' => 'Yaoi', 'slug' => 'yaoi'],
            ['id' => self::YURI, 'display_name' => 'Yuri', 'slug' => 'yuri']
        ];
    }

}
//0082769067 Juwon's account number
