<?php

declare(strict_types=1);

namespace BladeUIKit\Buttons;

use Illuminate\Contracts\View\View;

class Logout extends FormButton
{
    public function __construct(string $action = null)
    {
        parent::__construct($action ?? route('logout'));
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.buttons.logout');
    }

    final public static function internalAlias(): string
    {
        return 'logout';
    }
}
