<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a DataNode
 * @author muellerm
 */
interface NumberProperty extends Property
{

  /**
   * 
   * @param mixed $Key
   */
  function getMinInclusive();

  /**
   * 
   * @param mixed $Key
   */
  function getMaxInclusive();

  /**
   * 
   * @param mixed $Key
   */
  function isFloat();

}
