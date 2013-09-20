<?php
namespace Adrian\Breban\Tools\Image\Domain\Model;

interface ImageInterface extends \TYPO3\Media\Domain\Model\ImageInterface {

	/**
	 * @param string $text watermark text
	 * @param integer $maximumWidth maximum width of the thumbnail
	 * @param integer $maximumHeight maximum height of the thumbnail
	 * @return \TYPO3\Media\Domain\Model\ImageVariant
	 */
	 
	public function getWatermark($text = false, $maximumWidth = NULL, $maximumHeight = NULL);
}
?>