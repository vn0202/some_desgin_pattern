<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59b61316c9ad4a518cff62ad7cb46d0b
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vannghia\\SomeDesginPattern\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vannghia\\SomeDesginPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit59b61316c9ad4a518cff62ad7cb46d0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59b61316c9ad4a518cff62ad7cb46d0b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit59b61316c9ad4a518cff62ad7cb46d0b::$classMap;

        }, null, ClassLoader::class);
    }
}
