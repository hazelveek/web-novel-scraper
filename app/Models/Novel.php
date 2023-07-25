<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use App\Enums\NovelStatusEnum;
use Illuminate\Database\Eloquent\Model;

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
}
