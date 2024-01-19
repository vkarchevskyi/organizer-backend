<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TodoTask
 *
 * @property int $id
 * @property string $content
 * @property bool $is_done
 * @property int $order_number
 * @property int $list_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask query()
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereIsDone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereListId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoTask whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TodoTask extends Model
{
    use HasFactory;
}
