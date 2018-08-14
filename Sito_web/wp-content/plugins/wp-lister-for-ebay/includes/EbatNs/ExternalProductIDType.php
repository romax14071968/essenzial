<?php
/* Generated on 6/26/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ExternalProductCodeType.php';

/**
  * This type is deprecated as the parent of this type is no longer available.
  * 
  * 
 **/

class ExternalProductIDType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Value;

	/**
	* @var boolean
	**/
	protected $ReturnSearchResultOnDuplicates;

	/**
	* @var ExternalProductCodeType
	**/
	protected $Type;

	/**
	* @var string
	**/
	protected $AlternateValue;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ExternalProductIDType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Value' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnSearchResultOnDuplicates' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Type' =>
				array(
					'required' => false,
					'type' => 'ExternalProductCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AlternateValue' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return string
	 **/
	function getValue()
	{
		return $this->Value;
	}

	/**
	 * @return void
	 **/
	function setValue($value)
	{
		$this->Value = $value;
	}

	/**
	 * @return boolean
	 **/
	function getReturnSearchResultOnDuplicates()
	{
		return $this->ReturnSearchResultOnDuplicates;
	}

	/**
	 * @return void
	 **/
	function setReturnSearchResultOnDuplicates($value)
	{
		$this->ReturnSearchResultOnDuplicates = $value;
	}

	/**
	 * @return ExternalProductCodeType
	 **/
	function getType()
	{
		return $this->Type;
	}

	/**
	 * @return void
	 **/
	function setType($value)
	{
		$this->Type = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getAlternateValue($index = null)
	{
		if ($index !== null)
		{
			return $this->AlternateValue[$index];
		}
		else
		{
			return $this->AlternateValue;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setAlternateValue($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AlternateValue[$index] = $value;
		}
		else
		{
			$this->AlternateValue= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addAlternateValue($value)
	{
		$this->AlternateValue[] = $value;
	}

}
?>
