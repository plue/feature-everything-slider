<?php defined("ABSPATH") or die;

function everything_slider_block_class($block) {
  echo 'feature-everything-slider';
  echo isset($block['align']) ? ' align' . esc_attr($block['align']) : '';
  echo isset($block['className']) ? ' ' . esc_attr($block['className']) : '';
}

add_action('acf/init', function(){
  acf_register_block_type(array(
    'name' => 'everything-slider',
    'title' => 'Everything Slider',
    'description' => '',
    'render_template' => dirname(__FILE__) . '/feature-everything-slider.template.php',
    'category' => 'custom',
    'icon' => 'format-gallery',
    'keywords' => array('slider', 'carousel', 'gallery', 'slick'),
    'mode' => 'preview',
    'supports' => array(
      'jsx' => true,
      'anchor' => true
    )
  ));
});

add_action('everything_slider_settings', function() {
  echo '"dots": ' . (get_field('everything_slider_is_dots') ? "true" : "false") . ", ";
  echo '"arrows": ' . (get_field('everything_slider_is_arrows') ? "true" : "false") . ", ";
  echo '"autoplay": ' . (get_field('everything_slider_is_autoplay') ? "true" : "false") . ", ";
  echo '"infinite": ' . (get_field('everything_slider_is_infinite') ? "true" : "false");
});

function everything_slider_arrows() {
  foreach (array("prev", "next") as $arrow) {
    ?>
      <a class="feature-everything-slider__arrow is-<?= $arrow; ?>" href="#">
        <svg width="30px" height="30px" x="0px" y="0px" viewBox="0 0 185.343 185.343" style="enable-background:new 0 0 185.343 185.343;" xml:space="preserve">
          <path d="M51.707,185.343c-2.741,0-5.493-1.044-7.593-3.149c-4.194-4.194-4.194-10.981,0-15.175 l74.352-74.347L44.114,18.32c-4.194-4.194-4.194-10.987,0-15.175c4.194-4.194,10.987-4.194,15.18,0l81.934,81.934 c4.194,4.194,4.194,10.987,0,15.175l-81.934,81.939C57.201,184.293,54.454,185.343,51.707,185.343z" />
        </svg>
      </a>
    <?php
  }
}
add_action('everything_slider_arrows', 'everything_slider_arrows');

add_action('acf/init', function(){
  acf_add_local_field_group(array(
    'key' => 'group_5f7c5fdad6edb',
    'title' => 'Slider',
    'fields' => array(
      array(
          'key' => 'field_5f7c657dafba8',
          'name' => 'everything_slider_is_arrows',
          'type' => 'true_false',
          'default_value' => 1,
          'ui' => 1,
          'ui_on_text' => __('Pfeile'),
          'ui_off_text' => __('Pfeile'),
      ),
      array(
          'key' => 'field_5f7c65cac9833',
          'name' => 'everything_slider_is_dots',
          'type' => 'true_false',
          'default_value' => 1,
          'ui' => 1,
          'ui_on_text' => __('Punkte'),
          'ui_off_text' => __('Punkte'),
      ),
      array(
        'key' => 'field_5f7c65e0c9834',
        'name' => 'everything_slider_is_infinite',
        'type' => 'true_false',
        'default_value' => 1,
        'ui' => 1,
        'ui_on_text' => __('Endlos'),
        'ui_off_text' => __('Endlos'),
      ),
      array(
        'key' => 'field_5f7c65f6c9835',
        'name' => 'everything_slider_is_autoplay',
        'type' => 'true_false',
        'default_value' => 1,
        'ui' => 1,
        'ui_on_text' => __('Autostart'),
        'ui_off_text' => __('Autostart'),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/everything-slider',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'active' => true,
    'description' => '',
  ));
});
