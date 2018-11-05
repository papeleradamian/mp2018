<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6c9ed910c253b144edbac55e5ccbe7a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MercadoPago\\' => 12,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
            'Doctrine\\Common\\Cache\\' => 22,
            'Doctrine\\Common\\Annotations\\' => 28,
            'Doctrine\\Common\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MercadoPago\\' => 
        array (
            0 => __DIR__ . '/..' . '/mercadopago/dx-php/src/MercadoPago',
            1 => __DIR__ . '/..' . '/mercadopago/dx-php/tests',
            2 => __DIR__ . '/..' . '/mercadopago/dx-php/src/MercadoPago/Entities',
            3 => __DIR__ . '/..' . '/mercadopago/dx-php/src/MercadoPago/Entities/Shared',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
        'Doctrine\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/common/lib/Doctrine/Common',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6c9ed910c253b144edbac55e5ccbe7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6c9ed910c253b144edbac55e5ccbe7a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb6c9ed910c253b144edbac55e5ccbe7a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
