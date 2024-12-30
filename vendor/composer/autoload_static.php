<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ef376298ffc1d6b3ce6f3a6a82840cd
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ef376298ffc1d6b3ce6f3a6a82840cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ef376298ffc1d6b3ce6f3a6a82840cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6ef376298ffc1d6b3ce6f3a6a82840cd::$classMap;

        }, null, ClassLoader::class);
    }
}
