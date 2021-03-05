<?php

namespace Parfaitementweb\StatamicLanguageIso639Fieldtype\Fieldtypes;

use Statamic\Fields\Fieldtype;
use Statamic\Fieldtypes\Select;
use Statamic\Support\Arr;

class LanguageSelector extends Select
{
    protected $icon = 'earth';

    protected $categories = ['text'];

    public static function title()
    {
        return 'Language ISO 639 select';
    }

    protected function configFieldItems(): array
    {
        return [
            'placeholder' => [
                'display' => __('Placeholder'),
                'instructions' => __('statamic::fieldtypes.select.config.placeholder'),
                'type' => 'text',
                'default' => '',
                'width' => 50,
            ],
            'multiple' => [
                'display' => __('Multiple'),
                'instructions' => __('statamic::fieldtypes.select.config.multiple'),
                'type' => 'toggle',
                'default' => false,
                'width' => 50,
            ],
            'max_items' => [
                'display' => __('Max Items'),
                'instructions' => __('statamic::messages.max_items_instructions'),
                'type' => 'integer',
                'width' => 50,
            ],
            'searchable' => [
                'display' => __('Searchable'),
                'instructions' => __('statamic::fieldtypes.select.config.searchable'),
                'type' => 'toggle',
                'default' => true,
                'width' => 50,
            ]
        ];
    }
}
