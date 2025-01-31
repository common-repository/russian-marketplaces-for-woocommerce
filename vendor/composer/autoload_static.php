<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc15374e12940bf397469e9f065867cd1
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPlovers\\WooRussianMarketplaces\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPlovers\\WooRussianMarketplaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc15374e12940bf397469e9f065867cd1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc15374e12940bf397469e9f065867cd1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc15374e12940bf397469e9f065867cd1::$classMap;

        }, null, ClassLoader::class);
    }
}
