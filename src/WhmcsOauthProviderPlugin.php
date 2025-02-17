<?php

namespace RMartinOscar\WhmcsOauthProvider;

use Filament\Contracts\Plugin;
use Filament\Panel;

class WhmcsOauthProviderPlugin implements Plugin
{
    public function getId(): string
    {
        return 'whmcsoauthprovider';
    }

    public function register(Panel $panel): void
    {
        // Allows you to use any configuration option that is available to the panel.
        // This includes registering resources, custom pages, themes, render hooks and more.
    }

    public function boot(Panel $panel): void
    {
        // Is run only when the panel that the plugin is being registered to is actually in-use. It is executed by a middleware class.
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public static function getProviders(): array
    {
        return [
            \RMartinOscar\WhmcsOauthProvider\Providers\WhmcsOauthProviderPluginProvider::class,
        ];
    }
}
