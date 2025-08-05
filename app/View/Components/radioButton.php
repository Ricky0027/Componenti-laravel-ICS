<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RadioButton extends Component
{
    public string $name;
    public ?string $label;
    public ?array $options;
    public ?string $layout;
    public ?string $selected;
    public ?string $disabled;

    public function __construct(
        string $name,
        string $label = null,
        array $options = [],
        string $layout = 'vertical',
        string $selected = null,
        string $disabled = null
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->layout = $layout;
        $this->selected = $selected;
        $this->disabled = $disabled;
    }

    public function render(): View|Closure|string
    {
        return view('components.radio-button');
    }
}
