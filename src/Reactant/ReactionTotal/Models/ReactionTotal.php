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
use I\Love\Support\Object\Countable;
use I\Love\Support\Object\Weightable;

interface ReactionTotal extends
    Countable,
    Weightable
{
    public function getReactant(): Reactant;
}
