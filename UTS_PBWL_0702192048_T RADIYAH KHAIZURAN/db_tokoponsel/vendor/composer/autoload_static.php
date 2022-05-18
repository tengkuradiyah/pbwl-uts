<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita22cfea5dd68b7f636692a46707d9376
{
    public static $files = array (
        '6e60481d8c04e99474e2ba7b3658ab5a' => __DIR__ . '/..' . '/php-activerecord/php-activerecord/ActiveRecord.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Elitebook\\DbTokoponsel\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Elitebook\\DbTokoponsel\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita22cfea5dd68b7f636692a46707d9376::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita22cfea5dd68b7f636692a46707d9376::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita22cfea5dd68b7f636692a46707d9376::$classMap;

        }, null, ClassLoader::class);
    }
}