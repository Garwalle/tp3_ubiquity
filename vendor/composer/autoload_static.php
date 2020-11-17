<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17619e9a8497323997fcdff539892f70
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mindplay\\annotations\\' => 21,
        ),
        'U' => 
        array (
            'Ubiquity\\tests\\unit\\' => 20,
            'Ubiquity\\' => 9,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'C' => 
        array (
            'Codeception\\Module\\' => 19,
            'Codeception\\Lib\\Connector\\' => 26,
        ),
        'A' => 
        array (
            'Ajax\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mindplay\\annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/mindplay/annotations/src/annotations',
        ),
        'Ubiquity\\tests\\unit\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/ubiquity-codeception/src/unit',
        ),
        'Ubiquity\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/ubiquity/src/Ubiquity',
            1 => __DIR__ . '/..' . '/phpmv/ubiquity-commands/src/Ubiquity',
            2 => __DIR__ . '/..' . '/phpmv/ubiquity-devtools/src',
            3 => __DIR__ . '/..' . '/phpmv/ubiquity-dev/src/Ubiquity',
            4 => __DIR__ . '/..' . '/phpmv/ubiquity-webtools/src/Ubiquity',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Codeception\\Module\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/ubiquity-codeception/src/functional',
        ),
        'Codeception\\Lib\\Connector\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/ubiquity-codeception/src/functional',
        ),
        'Ajax\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/php-mv-ui/Ajax',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17619e9a8497323997fcdff539892f70::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17619e9a8497323997fcdff539892f70::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit17619e9a8497323997fcdff539892f70::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit17619e9a8497323997fcdff539892f70::$classMap;

        }, null, ClassLoader::class);
    }
}
