<?php

declare(strict_types=1);

namespace SPC\builder\extension;

use SPC\builder\Extension;
use SPC\exception\RuntimeException;
use SPC\util\CustomExt;

#[CustomExt('xdebug')]
class xdebug extends Extension
{
    /**
     * @throws RuntimeException
     */
    public function getUnixConfigureArg(): string
    {
        return '--enable-xdebug';
    }
}
