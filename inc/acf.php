<?php
/**
 *
 * @package wp-sanspapier
 */


if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_55b00186436cf',
  'title' => 'Modular content',
  'fields' => array (
    array (
      'key' => 'field_55b0018c7ded4',
      'label' => 'Flexible content',
      'name' => 'flexible_content',
      'type' => 'flexible_content',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'button_label' => 'Add Row',
      'min' => '',
      'max' => '',
      'layouts' => array (
        array (
          'key' => '55b00198640c8',
          'name' => 'text_volle_breite',
          'label' => 'Text volle breite',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_55b001a67ded5',
              'label' => 'Titel',
              'name' => 'titel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55b001b67ded7',
              'label' => 'Text',
              'name' => 'text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0, 
            ),
            array (
              'key' => 'field_55e330b36c018',
              'label' => 'Link: Mehr Informationen',
              'name' => 'link:_mehr',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Mehr Informationen',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55ea9fd7eeef0',
              'label' => 'Link: Weiterlesen',
              'name' => 'link:_weiterlesen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Weiterlesen',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '55eab3ac43f49',
          'name' => 'text_volle_breite_dunkler_hintergrund',
          'label' => 'Text volle Breite dunkler Hintergrund',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_55eab3ac43f4b',
              'label' => 'Titel',
              'name' => 'titel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55eab3ac43f4c',
              'label' => 'Text',
              'name' => 'text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
            ),
            array (
              'key' => 'field_55eab3ac43f4d',
              'label' => 'Link: Mehr Informationen',
              'name' => 'link:_mehr_informationen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Mehr Informationen',
            ),
            array (
              'key' => 'field_55eab3ac43f4e',
              'label' => 'Link: Weiterlesen',
              'name' => 'link:_weiterlesen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Weiterlesen',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '55eb2b6b7cfc6',
          'name' => 'text_volle_breite_pinker_hintergrund',
          'label' => 'Text volle Breite pinker Hintergrund',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_55eb2b6b7cfc7',
              'label' => 'Titel',
              'name' => 'titel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55eb2b6b7cfc8',
              'label' => 'Text',
              'name' => 'text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
            ),
            array (
              'key' => 'field_55eb2b6b7cfc9',
              'label' => 'Link: Mehr Informationen',
              'name' => 'link:_mehr_informationen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Mehr Informationen',
            ),
            array (
              'key' => 'field_55eb2b6b7cfca',
              'label' => 'Link: Weiterlesen',
              'name' => 'link:_weiterlesen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Weiterlesen',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '55dad136d8fa5',
          'name' => 'bild_volle_breite',
          'label' => 'Bild volle Breite',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_55dad147d8fa6',
              'label' => 'Bild volle Breite',
              'name' => 'bild_volle_breite',
              'type' => 'image',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'object',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => 200,
              'mime_types' => '',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '55dad0ae1dc85',
          'name' => 'text_halbe_breite',
          'label' => 'Text halbe breite',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_55dad0d1d8fa2',
              'label' => 'Titel',
              'name' => 'titel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
               'key' => 'field_55dc1929bb649',
               'label' => 'Icon',
               'name' => 'icon',
               'type' => 'image',
               'instructions' => '',
               'required' => 0,
               'conditional_logic' => 0,
               'wrapper' => array (
                 'width' => '',
                 'class' => '',
                 'id' => '',
               ),
               'return_format' => 'object',
               'preview_size' => 'thumbnail',
               'library' => 'all',
               'min_width' => '',
               'min_height' => '',
               'min_size' => '',
               'max_width' => '',
               'max_height' => '',
               'max_size' => 50,
               'mime_types' => '',
            ),
            array (
              'key' => 'field_55dad0dcd8fa3',
              'label' => 'Text',
              'name' => 'text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
            ),
            array (
              'key' => 'field_55e331546c01e',
              'label' => 'Link: Weiterlesen',
              'name' => 'link_weiterlesen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Weiterlesen',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55eaa004eef08',
              'label' => 'Link: Mehr Informationen',
              'name' => 'link:_mehr',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Mehr Informationen',
            ),
           ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '55eb2b8f7cfcb',
          'name' => 'text_12_breite_pinker_hintergrund',
          'label' => 'Text 1/2 Breite pinker Hintergrund',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_55eb2b8f7cfcc',
              'label' => 'Titel',
              'name' => 'titel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55eb2b8f7cfcd',
              'label' => 'Text',
              'name' => 'text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
            ),
            array (
              'key' => 'field_55eb2b8f7cfce',
              'label' => 'Link: Mehr Informationen',
              'name' => 'link:_mehr_informationen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Mehr Informationen',
            ),
            array (
              'key' => 'field_55eb2b8f7cfcf',
              'label' => 'Link: Weiterlesen',
              'name' => 'link:_weiterlesen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Weiterlesen',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '55eb2b9d7cfd0',
          'name' => 'text_12_breite_dunkler_hintergrund',
          'label' => 'Text 1/2 Breite dunkler Hintergrund',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_55eb2b9d7cfd1',
              'label' => 'Titel',
              'name' => 'titel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55eb2b9d7cfd2',
              'label' => 'Text',
              'name' => 'text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
            ),
            array (
              'key' => 'field_55eb2b9d7cfd3',
              'label' => 'Link: Mehr Informationen',
              'name' => 'link:_mehr_informationen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Mehr Informationen',
            ),
            array (
              'key' => 'field_55eb2b9d7cfd4',
              'label' => 'Link: Weiterlesen',
              'name' => 'link:_weiterlesen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Weiterlesen',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '55dad1d2d8fa8',
          'name' => 'bild_halbe_breite',
          'label' => 'Bild halbe Breite',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_55dad1d2d8fa9',
              'label' => 'Bild halbe Breite',
              'name' => 'bild_halbe_breite',
              'type' => 'image',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'object',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => 200,
              'mime_types' => '',
            ),
          ),
          'min' => '',
          'max' => '',
        ), 
        array (
          'key' => '55e334a7969bc',
          'name' => 'text_3/4_breite',
          'label' => 'Text 3/4 Breite',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_55e334a7969bd',
              'label' => 'Titel',
              'name' => 'titel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55e334a7969be',
              'label' => 'Text',
              'name' => 'text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
            ),
            array (
              'key' => 'field_55e334a7969bf',
              'label' => 'Link: Mehr Informationen',
              'name' => 'link:_mehr',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Mehr Informationen',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55eaa004eef09',
              'label' => 'Link: Weiterlesen',
              'name' => 'link:_weiterlesen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Weiterlesen',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '55eaaf6fa1c02',
          'name' => 'text_2/3_breite_links_bild_1/3_breite_rechts',
          'label' => 'Text 2/3 Breite links Bild 1/3 Breite rechts',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_55eaaf6fa1c03',
              'label' => 'Box links Titel',
              'name' => 'box_links_titel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55eaaf6fa1c04',
              'label' => 'Box links Text',
              'name' => 'box_links_text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
            ),
            array (
              'key' => 'field_55eaaf6fa1c05',
              'label' => 'Box links Link: Mehr Informationen',
              'name' => 'box_links_link:_mehr_informationen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Mehr Informationen',
            ),
            array (
              'key' => 'field_55eaaf6fa1c06',
              'label' => 'Box links Link: Weiterlesen',
              'name' => 'box_links_link:_weiterlesen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Weiterlesen',
            ),
            array (
              'key' => 'field_55eaaf6fa1c07',
              'label' => 'Bild rechts',
              'name' => 'bild_rechts',
              'type' => 'image',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => 150,
              'mime_types' => '',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '55eaa4c5cdc37',
          'name' => 'text_1/3_breite_links_bild_2/3_breite_rechts',
          'label' => 'Text 1/3 Breite links Bild 2/3 Breite rechts',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_55eaa4c5cdc38',
              'label' => 'Box links Titel',
              'name' => 'box_links_titel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55eaa4c5cdc39',
              'label' => 'Box links Text',
              'name' => 'box_links_text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
            ),
            array (
              'key' => 'field_55eaa4c5cdc3a',
              'label' => 'Box links Link: Mehr Informationen',
              'name' => 'box_links_link:_mehr_informationen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Mehr Informationen',
            ),
            array (
              'key' => 'field_55eaa4c5cdc3b',
              'label' => 'Box links Link: Weiterlesen',
              'name' => 'box_links_link:_weiterlesen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Weiterlesen',
            ),
            array (
              'key' => 'field_55eaa4c5cdc3c',
              'label' => 'Bild rechts',
              'name' => 'bild_rechts',
              'type' => 'image',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => 150,
              'mime_types' => '',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '55eaa4f2cdc3d',
          'name' => 'bild_1/3_breite_links_box_2/3_breite_rechts',
          'label' => 'Bild 1/3 Breite links Box 2/3 Breite rechts',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_55eaa4f2cdc42',
              'label' => 'Bild links',
              'name' => 'bild_links',
              'type' => 'image',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => 150,
              'mime_types' => '',
            ),
            array (
              'key' => 'field_55eaa4f2cdc3e',
              'label' => 'Box rechts Titel',
              'name' => 'box_rechts_titel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55eaa4f2cdc3f',
              'label' => 'Box rechts Text',
              'name' => 'box_rechts_text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
            ),
            array (
              'key' => 'field_55eaa4f2cdc40',
              'label' => 'Box rechts Link: Mehr Informationen',
              'name' => 'box_rechts_link:_mehr_informationen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Mehr Informationen',
            ),
            array (
              'key' => 'field_55eaa4f2cdc41',
              'label' => 'Box rechts Link: Weiterlesen',
              'name' => 'box_rechts_link:_weiterlesen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Weiterlesen',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '55eaa584cdc43',
          'name' => 'bild_2/3_breite_links_box_1/3_breite_rechts',
          'label' => 'Bild 2/3 Breite links Box 1/3 Breite rechts',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_55eaa584cdc44',
              'label' => 'Bild links',
              'name' => 'bild_links',
              'type' => 'image',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => 150,
              'mime_types' => '',
            ),
            array (
              'key' => 'field_55eaa584cdc45',
              'label' => 'Box rechts Titel',
              'name' => 'box_rechts_titel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_55eaa584cdc46',
              'label' => 'Box rechts Text',
              'name' => 'box_rechts_text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
            ),
            array (
              'key' => 'field_55eaa584cdc47',
              'label' => 'Box rechts Link: Mehr Informationen',
              'name' => 'box_rechts_link:_mehr_informationen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Mehr Informationen',
            ),
            array (
              'key' => 'field_55eaa584cdc48',
              'label' => 'Box rechts Link: Weiterlesen',
              'name' => 'box_rechts_link:_weiterlesen',
              'type' => 'url',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'Weiterlesen',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'post',
      ),
    ),
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'page',
      ),
    ),
    array (
      array (
        'param' => 'page_template',
        'operator' => '!=',
        'value' => 'front-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
));


acf_add_local_field_group(array (
  'key' => 'group_55eb074c480f3',
  'title' => 'Beratungen',
  'fields' => array (
    array (
      'key' => 'field_55eb075fdea2c',
      'label' => 'Beratung',
      'name' => 'beratung',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => '',
      'max' => '',
      'layout' => 'row',
      'button_label' => 'Add Row',
      'sub_fields' => array (
        array (
          'key' => 'field_55eb07d2dea2e',
          'label' => 'Beratungsort',
          'name' => 'beratungsort',
          'type' => 'text',
          'instructions' => '',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        array (
          'key' => 'field_55eb07eddea2f',
          'label' => 'Beratungszeiten',
          'name' => 'beratungszeiten',
          'type' => 'wysiwyg',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'tabs' => 'all',
          'toolbar' => 'basic',
          'media_upload' => 0,
        ),
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'front-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

endif;