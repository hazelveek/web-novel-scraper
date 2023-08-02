<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 *
 * @property int $id
 * @property string $slug
 * @property string $display_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 * @mixin Eloquent
 */
class Tag extends Model
{
	protected $table = 'tags';

	protected $fillable = [
		'slug',
		'display_name'
	];
}
