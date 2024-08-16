<?php

namespace Untek\Core\Env\Enums;

use Untek\Core\Code\Helpers\DeprecateHelper;

DeprecateHelper::hardThrow();

/**
 * Режимы деплоя
 */
class EnvEnum
{

    /**
     * Боевой режим
     */
    const PRODUCTION = 'prod';

    /**
     * Режим разработки
     */
    const DEVELOP = 'dev';

    /**
     * Тестовый режим
     */
    const TEST = 'test';
}
