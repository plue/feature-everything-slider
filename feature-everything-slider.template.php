
<div
  class="<?= everything_slider_block_class($block) ?>"
  <?php if (!empty($block['anchor'])): ?>id="<?php echo $block['anchor']; ?>"<?php endif; ?>
>
  <div
    class="feature-everything-slider__slides"
    data-slick='{ <?php do_action('everything_slider_settings'); ?> }'
  >
    <InnerBlocks />
  </div>

  <?php if (get_field('everything_slider_is_arrows')): ?>
    <?php do_action('everything_slider_arrows'); ?>
  <?php endif; ?>
</div>
