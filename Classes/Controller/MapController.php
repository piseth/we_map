<?php
namespace TYPO3\WeMap\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Piseth Sok <piseth@web-essentials.asia>, Web Essentials
 *  
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
 *
 *
 * @package we_map
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class MapController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {
	/**
	 * action displaySingleMap
	 *
	 * @return void
	 */
	public function displaySingleMapAction() {
		$GLOBALS['TSFE']->additionalHeaderData['we_map'] =
			'<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.11&key=AIzaSyC9KsfOS_MiHeJiNeD2ZOPouQTQEiIySrM&sensor=true"></script>' .
			'<script type="text/javascript" src="/typo3conf/ext/we_map/Resources/Public/JS/infobox.js"></script>';
		
	}

	/**
	 * action displayYoutube
	 *
	 * @return void
	 */
	public function displayYoutubeAction() {

	}

}
?>