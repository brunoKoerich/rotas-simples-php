<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit663b663d8415c74025cd31460573307c
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vendor\\' => 7,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vendor\\' => 
        array (
            0 => 'C:\\wamp64\\www\\meu-framework-v1-oficial\\vendor',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit663b663d8415c74025cd31460573307c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit663b663d8415c74025cd31460573307c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}