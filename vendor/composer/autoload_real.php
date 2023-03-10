<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb05addceded14ffabda1a6f0f2cb4ede
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

        spl_autoload_register(array('ComposerAutoloaderInitb05addceded14ffabda1a6f0f2cb4ede', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb05addceded14ffabda1a6f0f2cb4ede', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb05addceded14ffabda1a6f0f2cb4ede::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
