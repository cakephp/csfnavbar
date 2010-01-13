<?php
/**
 * Cake Software Foundation Navigation Bar Helper
 *
 * @package csfnavbar
 * @subpackage csfnavbar.views.helpers
 * @author Graham Weldon
 */
class CsfnavbarHelper extends CsfnavbarAppHelper {

/**
 * Internally used helpers
 *
 * @var array
 * @access public
 */
	public $helpers = array('Html', 'Javascript');

/**
 * Show the navigation bar
 *
 * @return void
 * @access public
 */
	public function show() {
		$view =& ClassRegistry::getObject('view');

		$head  = '';
		$head .= $this->Html->css('/csfnavbar/css/style');
		$head .= $this->Javascript->link('/csfnavbar/js/ie6hover');
		if (preg_match('#</head>#', $view->output)) {
			$view->output = preg_replace('#</head>#', $head . "\n</head>", $view->output, 1);
		}
		$toolbar = $view->element('debug_toolbar', array('plugin' => 'debug_kit', 'disableTimer' => true));
		if (preg_match('#</body>#', $view->output)) {
			$view->output = preg_replace('#</body>#', $toolbar . "\n</body>", $view->output, 1);
		}
	}
}
?>