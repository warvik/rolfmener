<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<div id="page" class="container-12 clearfix">

	<div class="grid-12 user">
		asdflkasjdf
	</div>
	
	<div class="grid-12">
		<?php if ($linked_site_name) : ?>
		<div class="branding">
			<h1><?php print $linked_site_name; ?></h1>
			<?php if ($site_slogan) : ?>
			<h3><?php print $site_slogan; ?></h3>
			<?php endif; ?>
		</div>
		<?php endif; // end linked_site_name ?>
	</div>	
</div>

	<?php if ($messages) : ?>
	<div class="container-12">
	<div class="grid-12 messages-wrap">
		<?php print $messages; ?>
	</div>
	</div>
	<?php endif; ?>

	<?php if( $page['row_1_col_1'] || $page['row_1_col_2'] || $page['row_1_col_3'] ) : ?>
<div class="container-12 row-1">
	<div class="grid-4 r1c1"><?php print ($page['row_1_col_1'] ? render($page['row_1_col_1']) : '&nbsp;'); ?></div>
	<div class="grid-4 r1c2"><?php print ($page['row_1_col_2'] ? render($page['row_1_col_2']) : '&nbsp;'); ?></div>
	<div class="grid-4 r1c3"><?php print ($page['row_1_col_3'] ? render($page['row_1_col_3']) : '&nbsp;'); ?></div>
	<div class="clearfix"></div>
</div>
	<?php endif; // end row 1 ?>
	
	<?php if( $page['row_2_col_1'] || $page['row_2_col_2'] || $page['row_2_col_3'] ) : ?>
<div class="container-12 row-2">
	<div class="grid-4 r2c1"><?php print ($page['row_2_col_1'] ? render($page['row_2_col_1']) : '&nbsp;'); ?></div>
	<div class="grid-4 r2c2"><?php print ($page['row_2_col_2'] ? render($page['row_2_col_2']) : '&nbsp;'); ?></div>
	<div class="grid-4 r2c3"><?php print ($page['row_2_col_3'] ? render($page['row_2_col_3']) : '&nbsp;'); ?></div>
	<div class="clearfix"></div>
</div>
	<?php endif; // end row 1 ?>
<div class="container-12"	
	<div id="main" class="column <?php print ns('grid-12', $page['sidebar_first'], 3, $page['sidebar_second'], 3) . ' ' . ns('push-3', !$page['sidebar_first'], 3); ?>">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
    </div>

    <?php print $feed_icons; ?>
  </div>
	
	<?php if ($page['sidebar_first']): ?>
  <div id="sidebar-left" class="column sidebar region grid-3 <?php print ns('pull-9', $page['sidebar_second'], 3); ?>">
    <?php print render($page['sidebar_first']); ?>
  </div>
	<?php endif; ?>

	<?php if ($page['sidebar_second']): ?>
  <div id="sidebar-right" class="column sidebar region grid-3">
    <?php print render($page['sidebar_second']); ?>
  </div>
	<?php endif; ?>
		
</div>
