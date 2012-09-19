<?php

/**
 * @file
 * Default template for admin navbar.
 *
 * Available variables:
 * - $attributes: An instance of Attributes class that can be manipulated as an
 *    array and printed as a string.
 *    It includes the 'class' information, which includes:
 *   - navbar: The current template type, i.e., "theming hook".
 * - $navbar['navbar_user']: User account / logout links.
 * - $navbar['navbar_menu']: Top level management menu links.
 * - $navbar['navbar_drawer']: A place for extended navbar content.
 *
 * @see template_preprocess()
 * @see template_preprocess_navbar()
 *
 * @ingroup themeable
 */
?>
<nav id="navbar" role="navigation" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?>>
  <div class="navbar-bar clearfix">
    <div class="section first">
      <?php print render($navbar['navbar_navigation']); ?>
    </div>
    <div class="section second">
      <?php if (!empty($navbar['action_links'])): ?>
        <h2 class="element-invisible"><?php print t('navbar page actions'); ?></h2>
          <?php print render($navbar['action_links']); ?>
      <?php endif; ?>
    </div>
    <div class="section third">
      <?php if (!empty($navbar['navbar_user'])) : ?>
        <?php print render($navbar['navbar_user']); ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="navbar-tray" name="navbar-tray">
    <div class="lining slider">
      <?php print render($navbar['navbar_filter']); ?>
      <?php if (!empty($navbar['navbar_shortcuts'])) : ?>
        <?php print render($navbar['navbar_shortcuts']); ?>
      <?php endif; ?>
      <?php if (!empty($navbar['navbar_menu'])) : ?>
        <nav class="navbar-menu">
          <h2 class="element-invisible"><?php print t('Administration menu'); ?></h2>
          <?php print render($navbar['navbar_menu']); ?>
        </nav>
      <?php endif; ?>
    </div>
  </div>
</div>
