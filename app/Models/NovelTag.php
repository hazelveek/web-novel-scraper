<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NovelTag
 *
 * @property int $novel_id
 * @property int $tag_id
 *
 * @package App\Models
 */
class NovelTag extends Model
{
	protected $table = 'novel_tags';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'novel_id' => 'int',
		'tag_id' => 'int'
	];
}
