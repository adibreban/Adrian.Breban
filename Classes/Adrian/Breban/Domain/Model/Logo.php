<?php
namespace Adrian\Breban\Domain\Model;

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 * @ORM\InheritanceType("JOINED")
*/

class Logo extends Design{
	/**
	 * @var string
	 */
	protected $shape;
	
	/**
	 * @param string $shape
	 * @return void
	 */
	public function setShape($shape) {
		$this->shape = $shape;
	}
	/**
	 * @return string
	 */
	public function getShape() {
		return $this->shape;
	}
}

?>