<?php

namespace Untek\Core\Env\Interfaces;

DeprecateHelper::hardThrow();

interface EnvDetectorInterface
{

    public function isMatch(): bool;

    public function isTest(): bool;
}
