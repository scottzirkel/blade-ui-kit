<?php

declare(strict_types=1);

namespace BladeUIKit\Editors;

use BladeUIKit\Forms\Inputs\Textarea;
use Illuminate\Contracts\View\View;

class EasyMDE extends Textarea
{
    public function __construct(string $name, string $id = null)
    {
        parent::__construct($name, $id);
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.editors.easy-mde');
    }

    final public static function componentAlias(): string
    {
        return 'easy-mde';
    }

    public static function styles(): array
    {
        return [
            'https://unpkg.com/easymde/dist/easymde.min.css',
        ];
    }

    public static function scripts(): array
    {
        return [
            'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js',
            'https://unpkg.com/easymde/dist/easymde.min.js',
        ];
    }
}
