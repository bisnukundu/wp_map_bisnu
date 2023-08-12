<?php
if (class_exists('CSF')) {
//    dd('its have');


    $prefix = 'wp_map_bisnu_prefix';
    CSF::createOptions($prefix, [
        'menu_title' => 'WP Map Bisnu',
        'menu_slug' => 'wp-map-bisnu'
    ]);
    CSF::createSection($prefix, [
        'title' => 'Maps',
        'id' => 'maps',
        'fields' => [

            [
                'title' => 'Add Maps Info',
                'id' => 'map_info',
                'type' => 'group',
                'fields' => [
                    [
                        'title' => 'Title',
                        'id' => 'title_id',
                        'type' => 'text'
                    ],
                    [
                        'title' => 'Place Name',
                        'id' => 'place_name',
                        'type' => 'text'
                    ],
                    [
                        'title' => 'Longitude',
                        'id' => 'long_id',
                        'type' => 'text'
                    ],
                    [
                        'title' => 'Latitude',
                        'id' => 'lat_id',
                        'type' => 'text'
                    ],
                    [
                        'title' => 'Pointer Icon',
                        'id' => 'icon_id',
                        'type' => 'icon'
                    ]
                ]
            ]
        ]
    ]);
}