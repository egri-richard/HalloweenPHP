<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit402099bfc476cf6356745ed3ff4f80ba
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Petrik14s\\Egridanielr\\Halloween\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Petrik14s\\Egridanielr\\Halloween\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit402099bfc476cf6356745ed3ff4f80ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit402099bfc476cf6356745ed3ff4f80ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit402099bfc476cf6356745ed3ff4f80ba::$classMap;

        }, null, ClassLoader::class);
    }
}
