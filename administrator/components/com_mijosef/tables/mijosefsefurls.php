<?php
/**
* @version		1.0.0
* @package		MijoSEF
* @subpackage	MijoSEF
* @copyright	2009-2012 Mijosoft LLC, www.mijosoft.com
* @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
* @license		GNU/GPL based on AceSEF www.joomace.net
*/

// No Permission
defined('JPATH_BASE') or die('Restricted Access');

class TableMijosefSefUrls extends JTable {

	var $id 	 	= null;
	var $url_sef 	= null;
	var $url_real 	= null;
	var $cdate		= null;
	var $mdate		= null;
	var $used		= null;
	var $hits		= null;
	var $source		= null;
	var $params		= null;

	function __construct(&$db) {
		parent::__construct('#__mijosef_urls', 'id', $db);
	}
	
	function loadBySEF($url_sef) {
		$k = $this->_tbl_key;

		if ($url_sef !== null) {
			$this->$k = $url_sef;
		}

		$url_sef = $this->$k;

		if ($url_sef === null) {
			return false;
		}

		$this->reset();

		$this->_db->setQuery('SELECT * FROM '.$this->_db->nameQuote($this->_tbl).' WHERE url_real != "" AND url_sef = '.$this->_db->Quote($url_sef));

		if ($result = $this->_db->loadAssoc()) {
			return $this->bind($result);
		}
		else {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}
	}
	
	function loadByID($id) {
		$k = $this->_tbl_key;

		if ($id !== null) {
			$this->$k = $id;
		}

		$id = $this->$k;

		if ($id === null) {
			return false;
		}

		$this->reset();

		$this->_db->setQuery('SELECT * FROM '.$this->_db->nameQuote($this->_tbl).' WHERE url_real != "" AND id = '.$this->_db->Quote($id));

		if ($result = $this->_db->loadAssoc()) {
			return $this->bind($result);
		}
		else {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}
	}
}