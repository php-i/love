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

namespace I\Love\Reactant\ReactionCounter\Models;

use I\Love\Reactant\Models\Reactant;
use I\Love\ReactionType\Models\ReactionType;
use I\Love\Support\Object\Countable;
use I\Love\Support\Object\Weightable;

interface ReactionCounter extends
    Countable,
    Weightable
{
    public function getReactant(): Reactant;

    public function getReactionType(): ReactionType;

    public function isReactionOfType(ReactionType $type): bool;

    public function isNotReactionOfType(ReactionType $type): bool;
}
