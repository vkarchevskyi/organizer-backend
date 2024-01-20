<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\TodoTask
 *
 * @property int $id
 * @property string $content
 * @property bool $is_done
 * @property int $list_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask query()
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereIsDone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereListId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask withoutTrashed()
 * @mixin \Eloquent
 */
class TodoTask extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
