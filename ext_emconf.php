<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Tailwind CSS package',
    'description' => 'Tailwind CSS site package and templates for common TYPO3 extensions',
    'category' => 'templates',
    'author' => 'Jan Kiesewetter',
    'author_email' => 'jan@t3easy.de',
    'author_company' => 't3easy',
    'state' => 'experimental',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'fluid_styled_content' => '9.5.0-10.4.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
