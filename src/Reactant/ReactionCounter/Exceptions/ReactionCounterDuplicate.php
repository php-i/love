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

namespace I\Love\Reactant\ReactionCounter\Exceptions;

use I\Love\Exceptions\LoveThrowable;
use I\Love\Reactant\Models\Reactant;
use I\Love\ReactionType\Models\ReactionType;
use RuntimeException;

final class ReactionCounterDuplicate extends RuntimeException implements
    LoveThrowable
{
    public static function ofTypeForReactant(
        ReactionType $reactionType,
        Reactant $reactant
    ): self {
        return new self(sprintf(
            'ReactionCounter for Reactant `%s` with ReactionType `%s` already exists.',
            $reactant->getId(),
            $reactionType->getId()
        ));
    }
}
