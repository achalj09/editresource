<?php

namespace Achalj09\Editresource;

use Laravel\Nova\Fields\Field;

class Editresource extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'editresource';

    public function details($details)
    {
        return $this->withMeta([
            'href' => is_callable($details['href']) ? call_user_func($details['href']) : $details['href'],
            'text' => is_callable($details['text']) ? call_user_func($details['text']) : $details['text'],
        ]);
    }
}
