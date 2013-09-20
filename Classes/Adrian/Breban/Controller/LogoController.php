<?php
namespace Adrian\Breban\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Adrian.Breban".         *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use Adrian\Breban\Domain\Model\Logo;

class LogoController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Adrian\Breban\Domain\Repository\LogoRepository
	 */
	protected $logoRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('logos', $this->logoRepository->findAll());
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Logo $logo
	 * @return void
	 */
	public function showAction(Logo $logo) {
		$this->view->assign('logo', $logo);
	}

	/**
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Logo $newLogo
	 * @return void
	 */
	public function createAction(Logo $newLogo) {
		$this->logoRepository->add($newLogo);
		$this->addFlashMessage('Created a new logo.');
		$this->redirect('index');
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Logo $logo
	 * @return void
	 */
	public function editAction(Logo $logo) {
		$this->view->assign('logo', $logo);
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Logo $logo
	 * @return void
	 */
	public function updateAction(Logo $logo) {
		$this->logoRepository->update($logo);
		$this->addFlashMessage('Updated the logo.');
		$this->redirect('index');
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Logo $logo
	 * @return void
	 */
	public function deleteAction(Logo $logo) {
		$this->logoRepository->remove($logo);
		$this->addFlashMessage('Deleted a logo.');
		$this->redirect('index');
	}

}

?>