<?php
namespace Adrian\Breban\Domain\Model;

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
*/

class Banner extends Design{
	/**
	 * @var integer
	 */
	protected $width;

	/**
	 * @var integer
	 */
	protected $height;
	
	/**
	 * @param integer $width
	 * @return void
	 */
	public function setWidth($width) {
		$this->width = $width;
	}
	/**
	 * @return integer
	 */
	public function getWidth() {
		return $this->width;
	}
	
	/**
	 * @param integer $height
	 * @return void
	 */
	public function setHeight($height) {
		$this->height = $height;
	}
	/**
	 * @return integer
	 */
	public function getHeight() {
		return $this->height;
	}
	
}

?>