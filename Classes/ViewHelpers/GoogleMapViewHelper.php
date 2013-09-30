<?php
/**
 * This class is a demo view helper for the Fluid templating engine.
 *
 * @package TYPO3
 * @subpackage Fluid
 * @version
 */
class Tx_WeMap_ViewHelpers_GoogleMapViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
	/**
	 * Initialize
	 * @return void
	 */
	public function initializeArguments() {
		$this->registerArgument('name', 'string', 'Optional column name', FALSE, 'Column');
		$this->registerArgument('colPos', 'integer', 'Optional column position. If you do not specify this it will be automatically assigned - so specify it if your template is dynamic and the output relies on this, as page rendering does for example!', FALSE, -1);
		$this->registerArgument('colspan', 'integer', 'Column span');
		$this->registerArgument('rowspan', 'integer', 'Row span');
		$this->registerArgument('repeat', 'integer', 'number of times to repeat this colum while appending $iteration to name', FALSE, 1);
		$this->registerArgument('width', 'string', 'DEPRECATED');
		$this->registerArgument('style', 'string', 'Inline style to add when rendering the column');
	}

	/**
	 * Renders some classic dummy content: Lorem Ipsum...
	 *
	 * @param int $length The number of characters of the dummy content
	 * @validate $length IntegerValidator
	 * @return string dummy content, cropped after the given number of characters
	 * @author Lorem Ipsum <lorem@example.com>
	 */
	public function render($length) {
		$dummyContent = 'Lorem ipsum dolor sit amet Google Map.';
		return substr($dummyContent, 0, $length);
	}
}

?>