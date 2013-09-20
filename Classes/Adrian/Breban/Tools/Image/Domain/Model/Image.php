<?php
namespace Adrian\Breban\Tools\Image\Domain\Model;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * An image
 *
 * TODO: Remove duplicate code in Image and ImageVariant, by introducing a common base class or through Mixins/Traits (once they are available)
 * @Flow\Entity
 */
class Image extends \TYPO3\Media\Domain\Model\Image implements \Adrian\Breban\Tools\Image\Domain\Model\ImageInterface {

	/**
	 * Returns a thumbnail of this image.
	 *
	 * If maximum width/height is not specified or exceed the original images size,
	 * width/height of the original image is used
	 *
	 * Note: The image variant that will be created is intentionally not added to the imageVariants collection of this image
	 * If you want to create a persisted image variant, use createImageVariant() instead
	 *
	 * @param integer $maximumWidth
	 * @param integer $maximumHeight
	 * @param string $ratioMode Whether the resulting image should be cropped if both edge's sizes are supplied that would hurt the aspect ratio.
	 * @return \TYPO3\Media\Domain\Model\ImageVariant
	 * @see \TYPO3\Media\Domain\Service\ImageService::transformImage()
	 */
	public function getWatermark($text = false, $maximumWidth = NULL, $maximumHeight = NULL, $ratioMode = ImageInterface::RATIOMODE_INSET) {

		$processingInstructions = array(
			array(
				'command' => 'thumbnail',
				'options' => array(
					'size' => array(
						'width' => intval($maximumWidth ?: $this->width),
						'height' => intval($maximumHeight ?: $this->height)
					),
					'mode' => $ratioMode
				),
			),
		);
		return new ImageVariant($this, $processingInstructions);

	}

}
?>