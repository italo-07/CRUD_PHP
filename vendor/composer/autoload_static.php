<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97327f5a5b77fd1aea9cfc9f78d9fba1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97327f5a5b77fd1aea9cfc9f78d9fba1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97327f5a5b77fd1aea9cfc9f78d9fba1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
