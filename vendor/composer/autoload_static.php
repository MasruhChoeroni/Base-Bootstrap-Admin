<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75a6bc81286c3c5fd3f9eb1bbd94a9b7
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mchoe\\BaseBootstrapAdmin\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mchoe\\BaseBootstrapAdmin\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit75a6bc81286c3c5fd3f9eb1bbd94a9b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75a6bc81286c3c5fd3f9eb1bbd94a9b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75a6bc81286c3c5fd3f9eb1bbd94a9b7::$classMap;

        }, null, ClassLoader::class);
    }
}
