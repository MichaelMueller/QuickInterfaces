<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a DataNode
 * @author muellerm
 */
interface Property
{

  /**
   * 
   * @param mixed $Key
   */
  function getName();

  /**
   * 
   * @param mixed $Key
   */
  function getDefaultValue();

  /**
   * 
   * @param mixed $Key
   */
  function canBeNull();

}
