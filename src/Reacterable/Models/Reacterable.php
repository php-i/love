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

namespace I\Love\Reacterable\Models;

use I\Love\Reacter\Facades\Reacter as ReacterFacade;
use I\Love\Reacter\Models\Reacter;

interface Reacterable
{
    public function getLoveReacter(): Reacter;

    public function viaLoveReacter(): ReacterFacade;

    public function isRegisteredAsLoveReacter(): bool;

    public function isNotRegisteredAsLoveReacter(): bool;

    /**
     * @throws \I\Love\Reacterable\Exceptions\AlreadyRegisteredAsLoveReacter
     */
    public function registerAsLoveReacter(): void;
}
