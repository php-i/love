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

namespace I\Love\Reactant\ReactionTotal\Models;

use I\Love\Reactant\Models\Reactant;

interface ReactionTotal
{
    public function getReactant(): Reactant;

    public function getCount(): int;

    public function getWeight(): float;

    public function incrementCount(int $amount): void;

    public function decrementCount(int $amount): void;

    public function incrementWeight(float $amount): void;

    public function decrementWeight(float $amount): void;
}
