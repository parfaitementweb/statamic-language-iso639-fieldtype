<?php

namespace Parfaitementweb\StatamicLanguageIso639Fieldtype;

use Parfaitementweb\StatamicLanguageIso639Fieldtype\FieldTypes\LanguageSelector;
use Statamic\Providers\AddonServiceProvider;
use Statamic\Statamic;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__ . '/../public/js/addon.js'
    ];

    protected $fieldtypes = [
        LanguageSelector::class,
    ];
}
