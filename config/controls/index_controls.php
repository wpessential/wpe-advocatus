<?php

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'index_banner_display_setting',// saves values in the database ,serves as ID
		'label'       => esc_html__( 'Banner Show', 'wpe-advocatus' ),
		'description' => esc_html__( 'Switch On and OFF  to show and hide the banner', 'wpe-advocatus' ),
		'section'     => 'index_section',// id of the section in whicg u want to include this control
		'default'     => 'on',
		'choices'     => [ 

			0 => esc_html__( 'hide', 'wpe-advocatus' ),
            1  => esc_html__( 'show', 'wpe-advocatus' ),
		],
        
	]
);


new \Kirki\Field\Image(
	[
		'settings'    => 'index_background_setting',// saves values in the database ,serves as ID
		'label'       => esc_html__( 'Banner Background', 'wpe-advocatus' ),
		'description' => esc_html__( 'Select the background image from Media ', 'wpe-advocatus' ),
		'section'     => 'index_section', // id of the section in whicg u want to include this control
		'choices' => [
			'save_as' => 'id',
		],
		// Serves as condition if true then proceed same as if(){ ....}
        'active_callback' => [
            [
                'setting'  => 'index_banner_display_setting', // uss contol ki id jis sa app present control (Background ki id 'background_setting ' ko relate karna chahta hain)
                'operator' => '==',
                'value'    => 1,// jis value par ap iss conrrol ko link karna chahta hain
            ]
        ],
	]
);


new \Kirki\Field\Text(
    [
        'settings' => 'index_title_setting',// saves values in the database ,serves as ID
        'label'    => esc_html__( 'Banner Title', 'wpe-advocatus' ),
        'description' => esc_html__( 'Enter your banner Title here', 'wpe-advocatus' ),
        'section'  => 'index_section',// id of the section in whicg u want to include this control
        'default'  => esc_html__( 'This is a banner Title text field', 'wpe-advocatus' ),
        'priority' => 10,
        'active_callback' => [// Serves as condition if true then proceed same as if(){ ....}
            [
                'setting'  => 'index_banner_display_setting',//  jis cntrol sa link karna chahta hain uss ki id
                'operator' => '==',
                'value'    => 1,// jis value par ap iss conrrol ko link karna chahta hain
            ]
        ],
        
    ]
    
);

new \Kirki\Field\Text(
    [
        'settings' => 'index_subtitle_setting',// saves values in the database ,serves as ID
        'label'    => esc_html__( 'Banner Subtitle', 'wpe-advocatus' ),
        'description' => esc_html__( 'Enter your banner subtitle here', 'wpe-advocatus' ),
        'section'  => 'index_section',// id of the section in whicg u want to include this control
        'default'  => esc_html__( 'This is a subtitle text field', 'wpe-advocatus' ),
        'priority' => 10,
        'active_callback' => [// Serves as condition if true then proceed same as if(){ ....}
            [
                'setting'  => 'index_banner_display_setting', //  jis cntrol sa link karna chahta hain uss ki id
                'operator' => '==',
                'value'    => 1, // jis value par ap iss conrrol ko link karna chahta hain
            ]
        ],
    ]
);


new \Kirki\Field\URL(
	[
		'settings' => 'contact_us_url_setting',
		'label'    => esc_html__( 'Contact us', 'wpe-advocatus' ),
		'section'  => 'index_section',
		'default'  => 'https://gmail.com/',
		'priority' => 10,
        'active_callback' => [// Serves as condition if true then proceed same as if(){ ....}
            [
                'setting'  => 'index_banner_display_setting', //  jis cntrol sa link karna chahta hain uss ki id
                'operator' => '==',
                'value'    => 1, // jis value par ap iss conrrol ko link karna chahta hain
            ]
        ],
	]
);