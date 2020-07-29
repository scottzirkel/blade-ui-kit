<?php

declare(strict_types=1);

namespace BladeUIKit\Buttons;

use BladeUIKit\Forms\Form;
use Illuminate\Contracts\View\View;

class FormButton extends Form
{
    public function __construct(string $action, string $method = 'POST')
    {
        parent::__construct($action, $method);
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.buttons.form-button');
    }

    /**
     * @internal This method should not be overridden outside the package.
     */
    public static function internalAlias(): string
    {
        return 'form-button';
    }
}
