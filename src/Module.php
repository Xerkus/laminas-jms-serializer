<?php

declare(strict_types=1);

namespace Configuretech\LaminasJmsSerializer;

class Module
{
    /**
     * Return default configuration for laminas-mvc applications.
     */
    public function getConfig()
    {
        $provider = new ConfigProvider();

        return [
            'service_manager' => $provider->getDependencyConfig(),
        ];
    }
}
