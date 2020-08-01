<?php

declare(strict_types=1);

namespace Tests\Forms;

use Tests\ComponentTestCase;

class InputGroupTest extends ComponentTestCase
{
    /** @test */
    public function the_component_can_be_rendered()
    {
        $this->withViewErrors(['first_name' => 'Incorrect name.']);

        $expected = <<<HTML
<div>
    <label for="first_name">
    First name
</label>
    <input name="first_name" type="text" id="first_name" />
    <div>
    Incorrect name.
</div>
</div>
HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-input-group name="first_name" />'
        );
    }

    /** @test */
    public function specific_types_of_inputs_can_be_handled()
    {
        $this->withViewErrors(['email' => 'Incorrect email.']);

        $expected = <<<HTML
<div>
    <label for="email">
    Email
</label>
    <input name="email" type="email" id="email" />
    <div>
    Incorrect email.
</div>
</div>
HTML;

        $this->assertComponentRenders(
            $expected,
            '<x-input-group name="email" type="email" />'
        );
    }
}
