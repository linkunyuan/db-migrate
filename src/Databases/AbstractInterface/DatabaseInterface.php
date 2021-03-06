<?php

namespace Linkunyuan\EsMigrate\Databases\AbstractInterface;

use EasySwoole\Spl\SplArray;

/**
 * Interface DatabaseInterface
 * @package Linkunyuan\EsMigrate\Databases\AbstractInterface
 * @author heelie.hj@gmail.com
 * @date 2020/8/22 21:26:25
 */
interface DatabaseInterface
{
    public function connect(SplArray $config);

    public function query(string $query);

    public function close();
}
