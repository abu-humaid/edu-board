<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite04075d810d8dee14ca2b7f5c55ef827
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Edu\\Board\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Edu\\Board\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite04075d810d8dee14ca2b7f5c55ef827::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite04075d810d8dee14ca2b7f5c55ef827::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
