<?php

declare(strict_types = 1);

/**
 * All rights reserved.
 * @copyright Copyright (c) 2016-2017 Gab Amba
 * @license https://github.com/gabbydgab/LicenseAgreement MIT License
 */

namespace CodingMatters\ExpressiveWebHelper;

final class ConfigProvider
{
    public function __invoke() : array
    {
        return [
            'templates' => $this->getViewConfig()
        ];
    }

    public function getViewConfig() : array
    {
        $path = __DIR__ . '/../templates';

        return [
            'layout'    => 'layout/layout',
            'map'       => [
                'layout/layout'                     => $path . '/layout/default.phtml',
                'layout/blank'                      => $path . '/layout/blank.phtml',
            ],
            'paths'     => [
                'layout'    => [$path . '/layout']
            ]
        ];
    }
}
