<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('fluid.grid');
		echo $this->Html->css('jquery-ui-1.8.13.custom');
		echo $this->Html->css('ui.jqgrid');
		//echo $this->Html->css('cake.generic');
        
        echo $html->script('jquery-1.6.1.min');
        echo $html->script('jquery-ui-1.8.13.custom.min');
        echo $html->script('i18n/grid.locale-en');
        echo $html->script('jquery.jqGrid.min');
        echo $html->script('Namespace');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container" class="container-24">
		<div id="header" class="grid-24">
			<h1><?php echo $this->Html->link(__('Kikkoman Bakery Management System', true), 'http://localhost/kikkoman/'); ?></h1>
		</div>
        <div class="clear"></div>
        
        <div class="grid-24" id="session-flash">
  			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>
        </div>
        <div class="clear"></div>
        
		<div id="content" class="grid-24">
			<?php echo $content_for_layout; ?>
		</div>

        <div class="clear"></div>
		<div id="footer" class="grid-24">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
    
    <div class="clear"></div>
    <div class="grid-24">
        <?php echo $this->element('sql_dump'); ?>
    </div>	
</body>
</html>
