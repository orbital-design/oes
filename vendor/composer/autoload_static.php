<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2729b1ccb17b637437551504dec0f927
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Orbitools\\Modules\\' => 18,
            'Orbitools\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Orbitools\\Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/modules',
        ),
        'Orbitools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2729b1ccb17b637437551504dec0f927::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2729b1ccb17b637437551504dec0f927::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2729b1ccb17b637437551504dec0f927::$classMap;

        }, null, ClassLoader::class);
    }
}
