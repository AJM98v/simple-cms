<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Info
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phone
 * @property int $age
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\InfoFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Info newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Info newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Info query()
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Info whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Info extends Model
{
    use HasFactory;

    protected $table = 'infos';
    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'email',
        'phone', 'address'
    ];
}
