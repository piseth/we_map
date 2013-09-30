<?php

/*                                                                        *
 * This script is backported from the TYPO3 Flow package "TYPO3.Fluid".   *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 *  of the License, or (at your option) any later version.                *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */
/**
 * View helper which creates a <embed width="420" height="345" src="http://www.youtube.com/v/yourid" type="application/x-shockwave-flash"></embed> tag. The Base URI
 * is taken from the current request.
 * In TYPO3 Flow, you should always include this ViewHelper to make the links work.
 *
 * = Examples =
 *
 * <code title="Example">
 *<we:youtubeVideo width="420" height="345" src="http://www.youtube.com/v/yourid" />
 * </code>
 * <output>
 * <embed width="420" height="345" src="http://www.youtube.com/v/yourid" type="application/x-shockwave-flash"></embed>
 * (depending on your youtube id)
 * </output>
 *
 * @api
 */
class Tx_WeMap_ViewHelpers_YoutubeVideoViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
	/**
	 * Initialize
	 * @return void
	 */
	public function initializeArguments() {
		$this->registerArgument('src', 'string', 'source of video');
		$this->registerArgument('width', 'string', 'width of video');
		$this->registerArgument('height', 'string', 'height of video');
	}
	/**
	 * Render the youtube html
	 *
	 *
	 * @return html video embeded html.
	 * @api
	 */
	public function render() {
		$src = empty($this->arguments['src']) ? "http://www.youtube.com/v/CLIPLiQDIk0" : $this->arguments['src'];
		$width = empty($this->arguments['width']) ? 420 : $this->arguments['width'];
		$height = empty($this->arguments['height']) ? 345 : $this->arguments['height'];
		return '<embed width="' . $width . '" height="' . $height . '" src="' . $src . '" type="application/x-shockwave-flash"></embed>';
	}
}

?>