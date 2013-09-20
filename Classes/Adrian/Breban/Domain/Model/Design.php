<?php
namespace Adrian\Breban\Domain\Model;

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 * @ORM\InheritanceType("JOINED")
 * at ORM\DiscriminatorColumn(name="discr", type="string")
 * at ORM\DiscriminatorMap({"logo" = "Logo", "banner" = "Banner"})
*/
class Design extends Solution{

	/**
	 * orig at var \TYPO3\Media\Domain\Model\Image
	 * @var \Adrian\Breban\Tools\Image\Domain\Model\Image
	 * @ORM\OneToOne(cascade={"all"}, orphanRemoval=true)
	 */
	protected $image;
	
	/**
	 * @var string
	 */
	protected $business_type;
	
	/**
	 * @var string
	 */
	protected $bg_color;

	/**
	 * @var string
	 */
	protected $fore_color;
	
	/**
	 * @param string $business_type
	 * @return void
	 */
	public function setBusiness_type($business_type) {
		$this->business_type = $business_type;
	}
	/**
	 * @return string
	 */
	public function getBusiness_type() {
		return $this->business_type;
	}
	
	/**
	 * @param string $bg_color
	 * @return void
	 */
	public function setBg_color($bg_color) {
		$this->bg_color = $bg_color;
	}
	/**
	 * @return string
	 */
	public function getBg_color() {
		return $this->bg_color;
	}
	
	/**
	 * @param string $fore_color
	 * @return void
	 */
	public function setFore_color($fore_color) {
		$this->fore_color = $fore_color;
	}
	/**
	 * @return string
	 */
	public function getFore_color() {
		return $this->fore_color;
	}
	
	/**
	 * @param \Adrian\Breban\Tools\Image\Domain\Model\Image $image
	 */
	public function setImage(\Adrian\Breban\Tools\Image\Domain\Model\Image $image) {
		$this->image = $image;
	}

	/**
	 * @return \Adrian\Breban\Tools\Image\Domain\Model\Image
	 */
	public function getImage() {
		return $this->image;
	}
}
?>