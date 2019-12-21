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

interface Weightable
{
    public function getWeight(): float;

    public function incrementWeight(float $amount): void;

    public function decrementWeight(float $amount): void;
}
