<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit114c108f2cc725ba173f9fb4073a044a
{
    public static $files = array (
        'edcb0db03fe48256dd64091f14bca6ab' => __DIR__ . '/../..' . '/core/Helpers.php',
    );

    public static $classMap = array (
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/App/Controllers/UserController.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/App/Models/User.php',
        'Core\\BaseController' => __DIR__ . '/../..' . '/Core/BaseController.php',
        'Core\\BaseModel' => __DIR__ . '/../..' . '/Core/BaseModel.php',
        'Core\\Database' => __DIR__ . '/../..' . '/Core/Database.php',
        'Core\\Request' => __DIR__ . '/../..' . '/Core/Request.php',
        'Core\\Router' => __DIR__ . '/../..' . '/Core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit114c108f2cc725ba173f9fb4073a044a::$classMap;

        }, null, ClassLoader::class);
    }
}
