<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd552e2cff99c4c6cbc5465081a255e05
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

        spl_autoload_register(array('ComposerAutoloaderInitd552e2cff99c4c6cbc5465081a255e05', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd552e2cff99c4c6cbc5465081a255e05', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd552e2cff99c4c6cbc5465081a255e05::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}