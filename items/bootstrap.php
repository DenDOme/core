<?php

namespace core;

class bootstrap
{
    // private string $configDir;
    // private string $rootDir;

    // public function __construct(string $configDir)
    // {
    //     $this->configDir = $configDir;
    //     $this->rootDir = $rootDir;
    // }

    // public function getConfigs(string $path = $configDir) : array {
    //     $settings = [];
    //     foreach(scandir(__DIR__ . $path) as $file){
    //         $name = explode('.', $file)[0];
    //         if(!empty($name)){
    //             $settings[$name] = include __DIR__ . "$path/$file";
    //         }
    //     }
    //     return $settings;
    // }

    // // $app = new Src\Application(new Src\Settings(getConfigs()));

    // function app(){
    //     global $app;
    //     return $app;
    // }
    
    // return $app;
    
    public function log(){
        echo('<pre>');
        print_r('hello');
        echo('</pre>');
    }
}