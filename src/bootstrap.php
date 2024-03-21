<?php

namespace core;

class Bootstrap
{
    public function getConfigs(string $path = '/../config'): array
    {
        $settings = [];
        $configPath = __DIR__ . $path;

        foreach (scandir($configPath) as $file) {
            $name = explode('.', $file)[0];
            if (!empty($name)) {
                $settings[$name] = include $configPath . '/' . $file;
            }
        }

        return $settings;
    }

    public function run(): Src\Application
    {
        require_once __DIR__ . '/../routes/web.php';

        $app = new Src\Application(new Src\Settings($this->getConfigs()));

        function app() {
            global $app;
            return $app;
        }

        return $app;
    }
}