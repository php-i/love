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

namespace I\Love\Reactant\ReactionTotal\Exceptions;

use I\Love\Exceptions\LoveThrowable;
use I\Love\Reactant\Models\Reactant;
use RuntimeException;

final class ReactionTotalDuplicate extends RuntimeException implements
    LoveThrowable
{
    public static function forReactant(
        Reactant $reactant
    ): self {
        return new self(sprintf(
            'ReactionTotal for Reactant `%s` already exists.',
            $reactant->getId()
        ));
    }
}
