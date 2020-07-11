<?php

declare(strict_types=1);

namespace Tests;

class ComponentPrefixTest extends ComponentTestCase
{
    protected function getEnvironmentSetUp($app): void
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('blade-ui-kit.prefix', 'ui');
    }
}

uses(ComponentPrefixTest::class);

it('can set a config prefix', function () {
    $expected = <<<HTML
<span title="Every Sunday at 12:00am">
    @weekly
</span>
HTML;

    $this->assertComponentRenders($expected, '<x-ui-cron schedule="@weekly"/>');
});
