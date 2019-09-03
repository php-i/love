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

namespace I\Love\Reactable\Models;

use I\Love\Reactant\Facades\Reactant as ReactantFacade;
use I\Love\Reactant\Models\Reactant as ReactantModel;

interface Reactable
{
    public function getLoveReactant(): ReactantModel;

    public function viaLoveReactant(): ReactantFacade;

    public function isRegisteredAsLoveReactant(): bool;

    public function isNotRegisteredAsLoveReactant(): bool;

    /**
     * @throws \I\Love\Reactable\Exceptions\AlreadyRegisteredAsLoveReactant
     */
    public function registerAsLoveReactant(): void;
}
