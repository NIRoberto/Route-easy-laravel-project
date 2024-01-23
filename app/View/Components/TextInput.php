<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInput extends Component
{
  
    public $name;
    public $label;
    public $type;
    public $value;
    public $placeholder;
    public $required;
    public $disabled;
    public $readonly;

    public function __construct($name, $label, $type, $value, $placeholder, $required, $disabled, $readonly)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
    }

    
    public function render(): View|Closure|string
    {
        return view('components.text-input');
    }
}