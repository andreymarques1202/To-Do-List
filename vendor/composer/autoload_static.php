<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit763da8a705db918ae17cd3f2b0070518
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Todolist\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Todolist\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit763da8a705db918ae17cd3f2b0070518::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit763da8a705db918ae17cd3f2b0070518::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit763da8a705db918ae17cd3f2b0070518::$classMap;

        }, null, ClassLoader::class);
    }
}