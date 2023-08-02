<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NovelChapter
 *
 * @property int $id
 * @property int $novel_id
 * @property string $chapter_title
 * @property string $slug
 * @property string $chapter_order_number
 * @property string|null $translator
 * @property string|null $editor
 * @property string|null $source_url
 * @property string $download_status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class NovelChapter extends Model
{
	protected $table = 'novel_chapters';

	protected $casts = [
		'novel_id' => 'int'
	];

	protected $fillable = [
		'novel_id',
		'chapter_title',
		'slug',
		'chapter_order_number',
		'translator',
		'editor',
		'source_url',
		'download_status'
	];

	public function novel()
	{
		return $this->belongsTo(Novel::class);
	}
}
