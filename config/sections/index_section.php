<?php
new \Kirki\Section (
    'index_section',
    [
        'priority'=>100,
        'title'=>esc_html__('Index Banner Section','wpe-advocatus'),
        'description'=>esc_html__('This section is for Archive page setting','wpe-advocatus'),
        'panel'=>'settings',
    ]
    );