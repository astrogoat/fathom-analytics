<?php

namespace Astrogoat\FathomAnalytics\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;
use Astrogoat\FathomAnalytics\Actions\FathomAnalyticsAction;

class FathomAnalyticsSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        return [
            // 'url' => Rule::requiredIf($this->enabled === true),
        ];
    }

    // protected static array $actions = [
    //     FathomAnalyticsAction::class,
    // ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with FathomAnalytics.';
    }

    public static function group(): string
    {
        return 'fathom-analytics';
    }
}
