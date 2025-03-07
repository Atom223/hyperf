<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Signal;

interface SignalHandlerInterface
{
    const WORKER = 1;

    const PROCESS = 2;

    /**
     * @return array [[ WOKKER, SIGNAL ]]
     */
    public function listen(): array;

    public function handle(int $signal): void;
}
