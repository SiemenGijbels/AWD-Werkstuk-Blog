<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute moet geaccepteerd worden.',
    'active_url'           => ':attribute is geen geldige URL.',
    'after'                => ':attribute moet een datum zijn die na :date komt.',
    'after_or_equal'       => ':attribute moet een datum zijn die hetzelfde is als :date of erna komt.',
    'alpha'                => ':attribute mag alleen letters bevatten.',
    'alpha_dash'           => ':attribute mag alleen letters, nummers en streepjes bevatten.',
    'alpha_num'            => ':attribute mag alleen letters en nummers bevatten.',
    'array'                => ':attribute moet een array zijn.',
    'before'               => ':attribute moet een datum zijn die voor :date komt.',
    'before_or_equal'      => ':attribute moet een datum zijn die hetzelfde is als :date of ervoor komt.',
    'between'              => [
        'numeric' => ':attribute moet tussen :min en :max zijn.',
        'file'    => ':attribute moet tussen :min en :max kilobytes zijn.',
        'string'  => ':attribute moet tussen :min en :max karakters zijn.',
        'array'   => ':attribute moet tussen :min en :max items zijn.',
    ],
    'boolean'              => ':attribute veld moet true of false zijn.',
    'confirmed'            => ':attribute bevestiging komt niet overeen.',
    'date'                 => ':attribute is geen geldige datum.',
    'date_format'          => ':attribute komt niet overeen met het formaat :format.',
    'different'            => ':attribute en :other moeten verschillen.',
    'digits'               => ':attribute moet :digits digits zijn.',
    'digits_between'       => ':attribute moet tussen :min en :max digits zijn.',
    'dimensions'           => ':attribute heeft ongeldige afbeeldingsdimensies.',
    'distinct'             => ':attribute veld heeft een duplicaat waarde.',
    'email'                => ':attribute moet een geldig emailadres zijn.',
    'exists'               => 'Geselecteerde :attribute is ongeldig.',
    'file'                 => ':attribute moet een bestand zijn.',
    'filled'               => ':attribute veld moet een waarde hebben.',
    'image'                => ':attribute moet een afbeelding zijn.',
    'in'                   => 'Geselecteerde :attribute is ongeldig.',
    'in_array'             => ':attribute veld bestaat niet in :other.',
    'integer'              => ':attribute moet een integer zijn.',
    'ip'                   => ':attribute moet een geldig IP-adres zijn.',
    'ipv4'                 => ':attribute moet een geldig IPV4-adres zijn.',
    'ipv6'                 => ':attribute moet een geldig IPV6-adres zijn.',
    'json'                 => ':attribute moet een geldige JSON string zijn.',
    'max'                  => [
        'numeric' => ':attribute mag niet groter zijn dan :max.',
        'file'    => ':attribute mag niet groter zijn dan :max kilobytes.',
        'string'  => ':attribute mag niet groter zijn dan :max karakters.',
        'array'   => ':attribute mag niet meer dan :max items hebben.',
    ],
    'mimes'                => ':attribute moet een bestand zijn van het type: :values.',
    'mimetypes'            => ':attribute moet een bestand zijn van het type: :values.',
    'min'                  => [
        'numeric' => ':attribute moet ten minste :min zijn.',
        'file'    => ':attribute moet ten minste :min kilobytes zijn.',
        'string'  => ':attribute moet ten minste :min karakters zijn.',
        'array'   => ':attribute moet ten minste :min items hebben.',
    ],
    'not_in'               => 'Geselecteerde :attribute is ongeldig.',
    'numeric'              => ':attribute moet een nummer zijn.',
    'present'              => ':attribute veld moet aanwezig zijn.',
    'regex'                => ':attribute formaat is ongeldig.',
    'required'             => ':attribute veld is vereist.',
    'required_if'          => ':attribute veld is vereist wanneer :other is :value.',
    'required_unless'      => ':attribute veld is vereist tenzij :other in :values is.',
    'required_with'        => ':attribute veld is vereist wanneer :values aanwezig is.',
    'required_with_all'    => ':attribute veld is vereist wanneer :values aanwezig is.',
    'required_without'     => ':attribute veld is vereist wanneer :values niet aanwezig is.',
    'required_without_all' => ':attribute veld is veresit wanneer geen enkele van :values aanwezig zijn.',
    'same'                 => ':attribute en :other moeten hetzelfde zijn.',
    'size'                 => [
        'numeric' => ':attribute moet :size zijn.',
        'file'    => ':attribute moet :size kilobytes zijn.',
        'string'  => ':attribute moet :size karakters zijn.',
        'array'   => ':attribute moet :size items bevatten.',
    ],
    'string'               => ':attribute moet een string zijn.',
    'timezone'             => ':attribute moet een geldige zone zijn.',
    'unique'               => ':attribute bestaat alreeds.',
    'uploaded'             => ':attribute kon niet geüploaded worden.',
    'url'                  => ':attribute formaat is ongeldig.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
