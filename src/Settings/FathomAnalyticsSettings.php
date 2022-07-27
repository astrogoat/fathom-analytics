<?php

namespace Astrogoat\FathomAnalytics\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;
use Astrogoat\FathomAnalytics\Actions\FathomAnalyticsAction;

class FathomAnalyticsSettings extends AppSettings
{
    public string $siteId;

    public function rules(): array
    {
        return [
            'siteId' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function description(): string
    {
        return 'Interact with Fathom Analytics.';
    }

    public static function group(): string
    {
        return 'fathom-analytics';
    }
}
