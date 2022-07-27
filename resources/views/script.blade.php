@php
    use Astrogoat\FathomAnalytics\Settings\FathomAnalyticsSettings;
@endphp

@if (FathomAnalyticsSettings::isEnabled())
    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="{{ settings(FathomAnalyticsSettings::class, 'siteId') }}" defer></script>
    <!-- / Fathom -->
@endif
