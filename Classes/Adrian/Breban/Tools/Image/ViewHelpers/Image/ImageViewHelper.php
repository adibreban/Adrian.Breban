<?php
namespace Adrian\Breban\Tools\Image\ViewHelpers\Image;

use TYPO3\Flow\Annotations as Flow;
//use TYPO3\Media\Domain\Model\ImageInterface;
use Adrian\Breban\Tools\Image\Domain\Model\ImageInterface;

//class ImageViewHelper extends \TYPO3\Media\ViewHelpers\ImageViewHelper{
class ImageViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {

	public function render(\Adrian\Breban\Tools\Image\Domain\Model\ImageInterface $image = NULL, $maximumWidth = NULL, $maximumHeight = NULL, $allowCropping = FALSE, $allowUpScaling = FALSE, $alt=false){
		$watermark = 'adi';
		if($watermark)return $watermark;
		else return 'adi';
		
	}
}


?>