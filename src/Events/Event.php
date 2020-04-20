<?php

/*
 * This file is part of the overtrue/laravel-options
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Overtrue\LaravelOptions\Events;

use Illuminate\Database\Eloquent\Model;

class Event
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $option;

    /**
     * Event constructor.
     *
     * @param \Illuminate\Database\Eloquent\Model $option
     */
    public function __construct(Model $option)
    {
        $this->option = $option;
    }
}
