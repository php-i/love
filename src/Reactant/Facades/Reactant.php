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

namespace I\Love\Reactant\Facades;

use I\Love\Reactant\ReactionCounter\Models\ReactionCounter;
use I\Love\Reactant\ReactionTotal\Models\ReactionTotal;
use I\Love\Reacterable\Models\Reacterable;

interface Reactant
{
    public function getReactions(): iterable;

    public function getReactionCounters(): iterable;

    public function getReactionCounterOfType(
        string $reactionTypeName
    ): ReactionCounter;

    public function getReactionTotal(): ReactionTotal;

    public function isReactedBy(
        ?Reacterable $reacterable = null,
        ?string $reactionTypeName = null,
        ?float $rate = null
    ): bool;

    public function isNotReactedBy(
        ?Reacterable $reacterable = null,
        ?string $reactionTypeName = null,
        ?float $rate = null
    ): bool;
}
