<?php
namespace Adrian\Breban\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Adrian.Breban".         *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use Adrian\Breban\Domain\Model\Design;

class DesignController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Adrian\Breban\Domain\Repository\DesignRepository
	 */
	protected $designRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('designs', $this->designRepository->findAll());
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Design $design
	 * @return void
	 */
	public function showAction(Design $design) {
		$this->view->assign('design', $design);
	}

	/**
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Design $newDesign
	 * @return void
	 */
	public function createAction(Design $newDesign) {
		$this->designRepository->add($newDesign);
		$this->addFlashMessage('Created a new design.');
		$this->redirect('index');
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Design $design
	 * @return void
	 */
	public function editAction(Design $design) {
		$this->view->assign('design', $design);
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Design $design
	 * @return void
	 */
	public function updateAction(Design $design) {
		$this->designRepository->update($design);
		$this->addFlashMessage('Updated the design.');
		$this->redirect('index');
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Design $design
	 * @return void
	 */
	public function deleteAction(Design $design) {
		$this->designRepository->remove($design);
		$this->addFlashMessage('Deleted a design.');
		$this->redirect('index');
	}

}

?>