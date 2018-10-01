<?php

namespace Naif\TextWithIcon;

use Laravel\Nova\Fields\Field;

class TextWithIcon extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'text-with-icon';

    public function icon($icon = 'align-left') {
        return $this->withMeta([
            'icon' => $icon
        ]);
    }

    public function color($color) {
        return $this->withMeta([
            'color' => $color
        ]);
    }

    public function position($position = "in") {
        return $this->withMeta([
            'position' => $position
        ]);
    }
}
