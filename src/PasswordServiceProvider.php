<?php declare(strict_types=1);

namespace Timgreenwood\PasswordGenerator;

use Illuminate\Support\ServiceProvider;

final class PasswordServiceProvider extends ServiceProvider
{
    public $singletons = [
        PasswordGenerator::class => PasswordGenerator::class,
    ];
}
