<?php

namespace Astrogoat\FathomAnalytics\Actions;

use Helix\Lego\Apps\Actions\Action;

class FathomAnalyticsAction extends Action
{
    public static function actionName(): string
    {
        return 'FathomAnalytics action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
