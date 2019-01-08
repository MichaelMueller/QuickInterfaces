<?php

namespace Qck\Interfaces;

/**
 * 
 *  
 * @author muellerm
 */
interface NodeUnserializer
{
  /**
   * 
   * @param \Qck\Interfaces\Node $Node
   * @return Node Object
   */
  function unserialize( $DataString );
  
  /**
   * @return string
   */
  function getFileExtension();
}
