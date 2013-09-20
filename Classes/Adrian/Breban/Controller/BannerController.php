<?php
namespace Adrian\Breban\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Adrian.Breban".         *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use Adrian\Breban\Domain\Model\Banner;

class BannerController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Adrian\Breban\Domain\Repository\BannerRepository
	 */
	protected $bannerRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('banners', $this->bannerRepository->findAll());
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Banner $banner
	 * @return void
	 */
	public function showAction(Banner $banner) {
		$this->view->assign('banner', $banner);
	}

	/**
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Banner $newBanner
	 * @return void
	 */
	public function createAction(Banner $newBanner) {
		$this->bannerRepository->add($newBanner);
		$this->addFlashMessage('Created a new banner.');
		$this->redirect('index');
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Banner $banner
	 * @return void
	 */
	public function editAction(Banner $banner) {
		$this->view->assign('banner', $banner);
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Banner $banner
	 * @return void
	 */
	public function updateAction(Banner $banner) {
		$this->bannerRepository->update($banner);
		$this->addFlashMessage('Updated the banner.');
		$this->redirect('index');
	}

	/**
	 * @param \Adrian\Breban\Domain\Model\Banner $banner
	 * @return void
	 */
	public function deleteAction(Banner $banner) {
		$this->bannerRepository->remove($banner);
		$this->addFlashMessage('Deleted a banner.');
		$this->redirect('index');
	}

}

?>