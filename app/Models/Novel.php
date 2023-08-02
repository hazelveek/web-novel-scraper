<?php /** @noinspection ALL */

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use App\Enums\NovelStatusEnum;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Collection;

/**
 * Class Novel
 *
 * @property int $id
 * @property int $novel_source_id
 * @property string $title
 * @property string $slug
 * @property string $author
 * @property string $novel_url
 * @property string $completion_status
 * @property string $description
 * @property string $cover_image_url
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 * @mixin Eloquent
 */
class Novel extends Model
{
	protected $table = 'novels';

	protected $casts = [
		'novel_source_id' => 'int',
        'completion_status' => NovelStatusEnum::class
	];

	protected $fillable = [
		'novel_source_id',
		'title',
		'slug',
		'author',
		'novel_url',
		'completion_status',
		'description',
		'cover_image_url'
	];

	/**
	* Get the route key for the model.
	*/
   public function getRouteKeyName(): string
   {
	   return 'slug';
   }

    /**
     * @return Tag[]|Collection
     */
    public function tags()
    {
		return Tag::join(NovelTag::class, function(JoinClause $joinClause){
			return $joinClause->on('novel_tags.tag_id', '=', 'tags.id')
				->where('novel_tags.novel_id', $this->id);
		})->select(['tags.*'])->get();

	}

    /**
     * @return Tag[]|Collection
     */
    public function categories()
    {
		return Genre::join(NovelGenre::class, function(JoinClause $joinClause){
			return $joinClause->on('novel_categories.category_id', '=', 'categories.id')
				->where('novel_categories.novel_id', $this->id);
		})->select(['categories.*'])->get();

	}

	public function chapters()
	{
		return $this->hasMany(NovelChapter::class);

	}

	public function novel_source()
	{
		return $this->belongsTo(NovelSource::class);
	}
}
