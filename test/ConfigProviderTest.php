<?php

declare(strict_types = 1);

/**
 * All rights reserved.
 * @copyright Copyright (c) 2016-2017 Gab Amba
 * @license https://github.com/gabbydgab/LicenseAgreement MIT License
 */

namespace CodingMattersTest\ExpressiveWebHelper;

use CodingMatters\ExpressiveWebHelper\ConfigProvider;
use PHPUnit\Framework\TestCase;

final class ConfigProviderTest extends TestCase
{
    /**
     * @var ConfigProvider
     */
    private $configProvider;

    public function setUp()
    {
        $this->configProvider = new ConfigProvider();
    }

    /**
     * @test
     */
    public function applicationConfigSettings()
    {
        $config = $this->configProvider->__invoke();

        $this->assertArrayHasKey('templates', $config);
    }

    /**
     * @test
     */
    public function viewConfigKeySettings()
    {
        $config = $this->configProvider->getViewConfig();

        // checks the index keys
        $this->assertArrayHasKey('layout', $config);
        $this->assertArrayHasKey('map', $config);
        $this->assertArrayHasKey('paths', $config);

        // checks the subkeys for: error maps and error paths
        $this->assertArrayHasKey('layout/layout', $config['map']);
        $this->assertArrayHasKey('layout', $config['paths']);
    }
}
