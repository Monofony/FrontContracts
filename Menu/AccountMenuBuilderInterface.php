<?php

/*
 * This file is part of the Monofony package.
 *
 * (c) Monofony
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Monofony\Contracts\Front\Menu;

use Knp\Menu\ItemInterface;

interface AccountMenuBuilderInterface
{
    public function createMenu(array $options): ItemInterface;
}
