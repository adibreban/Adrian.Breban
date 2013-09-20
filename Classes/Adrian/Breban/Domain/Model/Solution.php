<?php
namespace Adrian\Breban\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Adrian.Breban".         *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 * @ORM\InheritanceType("JOINED")
 * at ORM\DiscriminatorColumn(name="discr", type="string")
 * at ORM\DiscriminatorMap({"design" = "Design", "adrian_breban_logo"="Logo"})
*/
class Solution {

 
	/**
	 * @var string
	 */
	protected $title;


	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

}
?>