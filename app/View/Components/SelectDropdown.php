<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectDropdown extends Component
{
    public $name;
    public $label;
    public $value;
    public $placeholder;
    public $required;
    public $disabled;
    public $readonly;
    public $options;
    
    public function __construct($name, $label, $value, $placeholder, $required, $disabled, $readonly, $options)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
        $this->options = $options;
    }
    
 
    public function render(): View|Closure|string
    {
        return view('components.select-dropdown');
    }
}