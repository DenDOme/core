<?php

namespace core;

class Bootstrap
{
    public function getConfigs($path): array
    {
        $settings = [];

        foreach (scandir($path) as $file) {
            $name = explode('.', $file)[0];
            if (!empty($name)) {
                $settings[$name] = include $path . '/' . $file;
            }
        }

        return $settings;
    }

    public function run($rootDir): Src\Application
    {
        require_once $rootDir  . '/../routes/web.php';
        $configDir = $rootDir . '/../config';
        $app = new Src\Application(new Src\Settings($this->getConfigs($configDir)));

        function app() {
            global $app;
            return $app;
        }

        return $app;
    }
}