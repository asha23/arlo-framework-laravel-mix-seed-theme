<?php

namespace arlo_seed\acf;
use WordPlate\Acf\Fields\Wysiwyg;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Location;

final class register_page_fields
{

    public function init()
    {
        $this->global_pages();
    }

    public function global_pages()
    {
        register_extended_field_group([
            'title' => 'Content',
            'fields' => [
                Wysiwyg::make('', 'content')
                    ->mediaUpload(true)
                    ->tabs('all')
                    ->toolbar('full')
                    ->wrapper([
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    ]),
                
            ],
            'location' => [
                Location::if('post_type', 'page')
            ],
            'style' => 'default',
            'position' => 'acf_after_title',
            'hide_on_screen' => [
                0 => 'the_content',
                1 => 'excerpt',
                2 => 'discussion',
                3 => 'comments',
                4 => 'revisions',
                5 => 'format',
                6 => 'page_attributes',
                7 => 'tags',
                8 => 'send-trackbacks'
            ]
        ]);
    }
}
