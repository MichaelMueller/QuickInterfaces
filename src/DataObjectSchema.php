<?php

namespace Qck\Interfaces;

/**
 * Basic and simple interface for a DataObject using ActiveRecord pattern
 * 
 * @author muellerm
 */
interface DataObjectSchema
{

  function getKeys();
  
  /**
   * 
   * @return bool
   */
  function isReference( $Name );

  /**
   * 
   * @return bool
   */
  function isBinary( $Name );

  /**
   * 
   * @return bool
   */
  function isWeakReference( $Name );

  /**
   * 
   * @return string
   */
  function getFqcn();
}
