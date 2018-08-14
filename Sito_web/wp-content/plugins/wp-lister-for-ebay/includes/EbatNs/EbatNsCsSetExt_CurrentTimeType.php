<?php
// autogenerated file 05.05.2008 16:30
// $Id: EbatNsCsSetExt_CurrentTimeType.php,v 1.2 2013-04-05 11:16:00 thomasbiniasch Exp $
// $Log: EbatNsCsSetExt_CurrentTimeType.php,v $
// Revision 1.2  2013-04-05 11:16:00  thomasbiniasch
// bugfixes and template updates, first running version milestone!
//
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 *
 */
class EbatNsCsSetExt_CurrentTimeType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $DateMedium;
	/**
	 * @var string
	 */
	protected $TimeLong;

	/**
	 * @return string
	 */
	function getDateMedium()
	{
		return $this->DateMedium;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDateMedium($value)
	{
		$this->DateMedium = $value;
	}
	/**
	 * @return string
	 */
	function getTimeLong()
	{
		return $this->TimeLong;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTimeLong($value)
	{
		$this->TimeLong = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EbatNsCsSetExt_CurrentTimeType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'DateMedium' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'TimeLong' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				)
			));

	}
}
?>