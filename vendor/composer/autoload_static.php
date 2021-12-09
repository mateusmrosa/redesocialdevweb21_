<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5843ebc082867f0009a2a803dbd8b8c0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ProjetoModelo\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ProjetoModelo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/ProjetoModelo',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5843ebc082867f0009a2a803dbd8b8c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5843ebc082867f0009a2a803dbd8b8c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5843ebc082867f0009a2a803dbd8b8c0::$classMap;

        }, null, ClassLoader::class);
    }
}
