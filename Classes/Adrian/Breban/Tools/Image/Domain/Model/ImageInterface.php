<?php
namespace Adrian\Breban\Tools\Image\Domain\Model;

interface ImageInterface extends \TYPO3\Media\Domain\Model\ImageInterface {
//interface ImageInterface extends\TYPO3\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper{
	public function getWatermark($text = false, $maximumWidth = NULL, $maximumHeight = NULL);
}
?>