<?php

declare(strict_types=1);

namespace BladeUIKit\Forms;

use BladeUIKit\Forms\Inputs\Input;
use Illuminate\Contracts\View\View;

class InputGroup extends Input
{
    public function render(): View
    {
        return view('blade-ui-kit::components.forms.input-group');
    }

    public static function internalAlias(): string
    {
        return 'input-group';
    }
}
