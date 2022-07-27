<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateFathomAnalyticsSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('fathom-analytics.enabled', false);
        $this->migrator->add('fathom-analytics.siteId', '');
    }

    public function down()
    {
        $this->migrator->delete('fathom-analytics.enabled');
        $this->migrator->delete('fathom-analytics.siteId');
    }
}
