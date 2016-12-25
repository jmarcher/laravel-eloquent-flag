<?php

/*
 * This file is part of Laravel Eloquent Flag.
 *
 * (c) CyberCog <support@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cog\Flag\Traits;

use Cog\Flag\Scopes\PublishedAtScope;

/**
 * Class HasPublishedAt.
 *
 * @package Cog\Flag\Traits
 */
trait HasPublishedAt
{
    /**
     * Boot the HasPublishedAt trait for a model.
     *
     * @return void
     */
    public static function bootHasPublishedAt()
    {
        static::addGlobalScope(new PublishedAtScope);
    }
}
