<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa022cdd92cb47098ffd012bf9502ff4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Arteaga\\Tes\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Arteaga\\Tes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa022cdd92cb47098ffd012bf9502ff4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa022cdd92cb47098ffd012bf9502ff4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa022cdd92cb47098ffd012bf9502ff4::$classMap;

        }, null, ClassLoader::class);
    }
}
