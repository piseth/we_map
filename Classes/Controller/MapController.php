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
	 * mapRepository
	 *
	 * @var \TYPO3\WeMap\Domain\Repository\MapRepository
	 * @inject
	 */
	protected $mapRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$maps = $this->mapRepository->findAll();
		$this->view->assign('maps', $maps);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\WeMap\Domain\Model\Map $map
	 * @return void
	 */
	public function showAction(\TYPO3\WeMap\Domain\Model\Map $map) {
		$this->view->assign('map', $map);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\WeMap\Domain\Model\Map $newMap
	 * @dontvalidate $newMap
	 * @return void
	 */
	public function newAction(\TYPO3\WeMap\Domain\Model\Map $newMap = NULL) {
		$this->view->assign('newMap', $newMap);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\WeMap\Domain\Model\Map $newMap
	 * @return void
	 */
	public function createAction(\TYPO3\WeMap\Domain\Model\Map $newMap) {
		$this->mapRepository->add($newMap);
		$this->flashMessageContainer->add('Your new Map was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\WeMap\Domain\Model\Map $map
	 * @return void
	 */
	public function editAction(\TYPO3\WeMap\Domain\Model\Map $map) {
		$this->view->assign('map', $map);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\WeMap\Domain\Model\Map $map
	 * @return void
	 */
	public function updateAction(\TYPO3\WeMap\Domain\Model\Map $map) {
		$this->mapRepository->update($map);
		$this->flashMessageContainer->add('Your Map was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\WeMap\Domain\Model\Map $map
	 * @return void
	 */
	public function deleteAction(\TYPO3\WeMap\Domain\Model\Map $map) {
		$this->mapRepository->remove($map);
		$this->flashMessageContainer->add('Your Map was removed.');
		$this->redirect('list');
	}

	/**
	 * action displaySingleMap
	 *
	 * @return void
	 */
	public function displaySingleMapAction() {

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