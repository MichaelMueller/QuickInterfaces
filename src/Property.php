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
   * @param type $Value1
   * @param type $Value2
   * @return int
   */
  function compare( $Value1, $Value2 );
}
