<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NovelCategory
 *
 * @property int $novel_id
 * @property int $category_id
 *
 * @package App\Models
 * @mixin \Eloquent
 */
class NovelGenre extends Model
{
	protected $table = 'novel_genres';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'novel_id' => 'int',
		'category_id' => 'int'
	];
}
