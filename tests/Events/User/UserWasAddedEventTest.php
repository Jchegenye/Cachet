<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Events\User;

use CachetHQ\Cachet\Events\User\UserWasAddedEvent;
use CachetHQ\Cachet\Models\User;

/**
 * This is the user was added event test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class UserWasAddedEventTest extends AbstractUserEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['user' => new User()];
        $object = new UserWasAddedEvent($params['user']);

        return compact('params', 'object');
    }
}
