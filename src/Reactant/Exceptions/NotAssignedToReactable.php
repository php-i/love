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

namespace I\Love\Reactant\Exceptions;

use I\Love\Exceptions\LoveThrowable;
use RuntimeException;

final class NotAssignedToReactable extends RuntimeException implements
    LoveThrowable
{
}
