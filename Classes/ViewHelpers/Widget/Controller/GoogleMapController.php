<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2013 Piseth Sok <sokpiseth777@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Google Map controller to create the pagination.
 * Extended version from fluid core
 *
 * @package TYPO3
 * @subpackage tx_news
 */
class Tx_WeMap_ViewHelpers_Widget_Controller_GoogleMapController extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetController {

	/**
	 * Main action which does all the fun
	 *
	 * @return void
	 */
	public function indexAction() {
		$GLOBALS['TSFE']->additionalHeaderData['we_map'] =
			'<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.11&key=AIzaSyC9KsfOS_MiHeJiNeD2ZOPouQTQEiIySrM&sensor=true"></script>' .
			'<script type="text/javascript" src="/typo3conf/ext/we_map/Resources/Public/JS/infobox.js"></script>';
		$this->view->assignMultiple(array (
			'latitude' => $this->widgetConfiguration['latitude'],
			'longitude' => $this->widgetConfiguration['longitude'],
			'content' => $this->widgetConfiguration['content'],
			'width' => $this->widgetConfiguration['width'],
			'height' => $this->widgetConfiguration['height'],
		));
	}
}

?>