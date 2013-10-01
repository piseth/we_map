<?php
/**
 * This class is a demo view helper for the Fluid templating engine.
 *
 * @package TYPO3
 * @subpackage Fluid
 * @version
 */
class Tx_WeMap_ViewHelpers_MapViewHelper extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetViewHelper {

	/**
	 * @var Tx_WeMap_ViewHelpers_Widget_Controller_GoogleMapController
	 */
	protected $controller;

	/**
	 * Inject controller
	 *
	 * @param Tx_WeMap_ViewHelpers_Widget_Controller_GoogleMapController $controller
	 * @return void
	 */
	public function injectController(Tx_WeMap_ViewHelpers_Widget_Controller_GoogleMapController $controller) {
		$this->controller = $controller;
	}

	/**
	 * Render everything
	 * @param double $latitude
	 * @param double $longitude
	 * @param string $content Description
	 * @param int $width
	 * @param int $height
	 * @return string
	 */
	public function render($latitude, $longitude, $content, $width, $height) {
		return $this->initiateSubRequest();
	}
}

?>