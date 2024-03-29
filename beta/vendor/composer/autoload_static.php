<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d26082bfe56cf33a18b57a43226d4cb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d26082bfe56cf33a18b57a43226d4cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d26082bfe56cf33a18b57a43226d4cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0d26082bfe56cf33a18b57a43226d4cb::$classMap;

        }, null, ClassLoader::class);
    }
}
