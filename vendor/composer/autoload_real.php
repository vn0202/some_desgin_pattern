<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit59b61316c9ad4a518cff62ad7cb46d0b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit59b61316c9ad4a518cff62ad7cb46d0b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit59b61316c9ad4a518cff62ad7cb46d0b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit59b61316c9ad4a518cff62ad7cb46d0b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
