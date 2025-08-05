<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Checkbox extends Component
{
    public string $id;
    public string $name;
    public ?string $label;
    public ?string $value;
    public ?bool $checked;
    public ?bool $disabled;

    public function __construct(
        $id,
        $name,
        $label = null,
        $value = null,
        $checked = false,
        $disabled = false
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->checked = $checked;
        $this->disabled = $disabled;
    }

    public function render(): View|Closure|string
    {
        return view('components.checkbox');
    }
}
