<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5368af0f792caf5193aaf5ca1d82123b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5368af0f792caf5193aaf5ca1d82123b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5368af0f792caf5193aaf5ca1d82123b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
