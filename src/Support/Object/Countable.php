<?php

/*
 * This file is part of PHP I: Love.
 *
 * (c) Anton Komarev <anton@komarev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace I\Love\Support\Object;

interface Countable
{
    public function getCount(): int;

    public function incrementCount(int $amount): void;

    public function decrementCount(int $amount): void;
}
