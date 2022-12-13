<?php
/**
 * @package	API
 * @version 1.5
 * @author 	Alexey Zhdanov
 * @link 	
 * @copyright Copyright (C) 2011 Edge Web Works, LLC. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/

/**
 * Category API resource class
 *
 * @package  API
 * @since    1.6.0
 */
class LeadsApiResourceLead extends ApiResource
{
	/**
	 * Get categories
	 *
	 * @return  object  Category details wrapped inside standard api response wrapper
	 */
	public function get()
	{
		$this->plugin->setResponse($this->getAnswer());
	}

	public function getAnswer()
	{
		$object = (object) [
			'propertyOne' => 'foo',
			'propertyTwo' => 42,
		  ];
		return $object;
	}
	/**
	 * Save category - create / update
	 *
	 * @return  object  Category details wrapped inside standard api response wrapper
	 */
	public function post()
	{
		// $this->plugin->setResponse($this->saveCategory());
	}

}
