<?php
namespace Adrian\Breban\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Adrian.Breban".         *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use Adrian\Breban\Domain\Model\Solution;

class SolutionController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Adrian\Breban\Domain\Repository\SolutionRepository
	 */
	protected $solutionRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('solutions', $this->solutionRepository->findAll());
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Solution $solution
	 * @return void
	 */
	public function showAction(Solution $solution) {
		$this->view->assign('solution', $solution);
	}

	/**
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Solution $newSolution
	 * @return void
	 */
	public function createAction(Solution $newSolution) {
		$this->solutionRepository->add($newSolution);
		$this->addFlashMessage('Created a new solution.');
		$this->redirect('index');
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Solution $solution
	 * @return void
	 */
	public function editAction(Solution $solution) {
		$this->view->assign('solution', $solution);
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Solution $solution
	 * @return void
	 */
	public function updateAction(Solution $solution) {
		$this->solutionRepository->update($solution);
		$this->addFlashMessage('Updated the solution.');
		$this->redirect('index');
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Solution $solution
	 * @return void
	 */
	public function deleteAction(Solution $solution) {
		$this->solutionRepository->remove($solution);
		$this->addFlashMessage('Deleted a solution.');
		$this->redirect('index');
	}

}

?>