<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60c8049e6f9dd301332a1359315eca85
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit60c8049e6f9dd301332a1359315eca85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60c8049e6f9dd301332a1359315eca85::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60c8049e6f9dd301332a1359315eca85::$classMap;

        }, null, ClassLoader::class);
    }
}
