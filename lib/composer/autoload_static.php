<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita403efe8b14c66d10580cd7252036f7d
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'ourcodeworld\\PNGQuant\\' => 22,
        ),
        'A' => 
        array (
            'Abel\\CompressPics\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ourcodeworld\\PNGQuant\\' => 
        array (
            0 => __DIR__ . '/..' . '/ourcodeworld/php-pngquant/src',
        ),
        'Abel\\CompressPics\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita403efe8b14c66d10580cd7252036f7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita403efe8b14c66d10580cd7252036f7d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita403efe8b14c66d10580cd7252036f7d::$classMap;

        }, null, ClassLoader::class);
    }
}
