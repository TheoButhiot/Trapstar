<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81b80061d6125f0477291290e1bac3d5
{
    public static $files = array (
        '6e96fd55dfe902e1bff1e0076a9dae57' => __DIR__ . '/../..' . '/helpers.php',
        '31f180208eea6ee84a769fa12c9eb3ee' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit81b80061d6125f0477291290e1bac3d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit81b80061d6125f0477291290e1bac3d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit81b80061d6125f0477291290e1bac3d5::$classMap;

        }, null, ClassLoader::class);
    }
}