<?php
/**
 * Cake Software Foundation Navigation Bar
 *
 * @package csfnavbar
 * @author Graham Weldon
 */
class CsfnavbarAppController extends AppController {

/**
 * Before Filter Callback
 *
 * @return void
 * @access public
 */
	public function beforeFilter() {
		$this->layout = 'csfnav';
	}
}
?>