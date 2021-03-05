import LanguageSelector from '../js/components/fieldtypes/LanguageSelector';

Statamic.booting(() => {
    Statamic.$components.register('language_selector-fieldtype', LanguageSelector);
});
