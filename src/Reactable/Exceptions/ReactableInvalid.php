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

namespace I\Love\Reactable\Exceptions;

use I\Love\Exceptions\LoveThrowable;
use I\Love\Reactable\Models\Reactable as ReactableContract;
use RuntimeException;

final class ReactableInvalid extends RuntimeException implements
    LoveThrowable
{
    public static function classNotExists(string $type): self
    {
        return new self(sprintf(
            '[%s] class or morph map not found.',
            $type
        ));
    }

    public static function notImplementInterface(string $type): self
    {
        return new self(sprintf(
            '[%s] must implement `%s` contract.',
            $type, ReactableContract::class
        ));
    }
}
