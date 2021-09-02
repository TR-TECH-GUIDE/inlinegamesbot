<?php
/**
 * Inline Games - Telegram Bot (@inlinegameslbot)
 *
 * (c) 2016-2020 Tharuk Renuja <tharukrenujatechguide@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bot\Command\User;

use Longman\TelegramBot\Commands\UserCommand;
use Longman\TelegramBot\Exception\TelegramException;

/**
 * Start command...
 *
 * @noinspection PhpUndefinedClassInspection
 */
class StartCommand extends UserCommand
{
    /**
     * @return mixed
     *
     * @throws TelegramException
     */
    public function execute()
    {
        return $this->getTelegram()->executeCommand("help");
    }
}
