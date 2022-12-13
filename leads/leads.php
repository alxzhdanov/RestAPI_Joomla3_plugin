<?php
/**
 * @package	API
 * @version 1.5
 * @author 	Alexey Zhdanov
 * @link 	
 * @copyright Copyright (C) 2011 Edge Web Works, LLC. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 */

 defined('_JEXEC') or die( 'Restricted access' );


 
 class PlgAPILeads extends ApiPlugin
{
	/**
	 * Constructor.
	 *
	 * @param   object  &$subject  The object to observe.
	 * @param   array   $config    An optional associative array of configuration settings.
	 *
	 * @since   1.6.0
	 */
	public function __construct(&$subject, $config = array())
	{
		parent::__construct($subject, $config = array());

		ApiResource::addIncludePath(dirname(__FILE__) . '/leads');
		//$this->setResourceAccess('lead', 'public', 'get');
	}
}
