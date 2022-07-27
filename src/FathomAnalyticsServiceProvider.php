<?php

namespace Astrogoat\FathomAnalytics;

use Helix\Lego\Apps\App;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Astrogoat\FathomAnalytics\Settings\FathomAnalyticsSettings;

class FathomAnalyticsServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('fathom-analytics')
            ->settings(FathomAnalyticsSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations/settings',
            ]);
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('fathom-analytics')->hasViews();
    }
}
