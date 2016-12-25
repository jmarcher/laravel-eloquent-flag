<?php

/*
 * This file is part of Laravel Eloquent Flag.
 *
 * (c) CyberCog <support@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cog\Flag\Tests\Stubs\Models;

use Cog\Flag\Traits\HasPublishedAt;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EntityWithPublishedAt.
 *
 * @package Cog\Flag\Tests\Stubs\Models
 */
class EntityWithPublishedAt extends Model
{
    use HasPublishedAt;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'entity_with_published_at';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'published_at' => 'datetime',
    ];
}
