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

namespace I\Love\Reactant\Models;

use I\Love\Reactable\Models\Reactable;
use I\Love\Reactant\ReactionCounter\Models\ReactionCounter;
use I\Love\Reactant\ReactionTotal\Models\ReactionTotal;
use I\Love\Reacter\Models\Reacter;
use I\Love\ReactionType\Models\ReactionType;

interface Reactant
{
    public function getId(): string;

    public function getReactable(): Reactable;

    /**
     * @return iterable|\I\Love\Reaction\Models\Reaction[]
     */
    public function getReactions(): iterable;

    /**
     * @return iterable|\I\Love\Reactant\ReactionCounter\Models\ReactionCounter[]
     */
    public function getReactionCounters(): iterable;

    public function getReactionCounterOfType(ReactionType $type): ReactionCounter;

    public function getReactionTotal(): ReactionTotal;

    public function isReactedBy(Reacter $reacter, ?ReactionType $reactionType = null, ?float $rate = null): bool;

    public function isNotReactedBy(Reacter $reacter, ?ReactionType $reactionType = null, ?float $rate = null): bool;

    public function isEqualTo(self $that): bool;

    public function isNotEqualTo(self $that): bool;

    public function isNull(): bool;

    public function isNotNull(): bool;

    public function createReactionCounterOfType(ReactionType $type): void;

    public function createReactionTotal(): void;
}
