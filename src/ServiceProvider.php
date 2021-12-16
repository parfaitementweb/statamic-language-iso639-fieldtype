<?php

namespace Parfaitementweb\StatamicLanguageIso639Fieldtype;

use Parfaitementweb\StatamicLanguageIso639Fieldtype\Fieldtypes\LanguageSelector;
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
