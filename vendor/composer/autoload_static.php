<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18fd07ab6c6530da139f65375f7ad8dc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18fd07ab6c6530da139f65375f7ad8dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18fd07ab6c6530da139f65375f7ad8dc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
