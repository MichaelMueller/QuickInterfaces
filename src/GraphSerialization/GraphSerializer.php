<?php

namespace Qck\Interfaces;

/**
 * 
 *  
 * @author muellerm
 */
interface GraphSerializer
{
  /**
   * 
   * @param \Qck\Interfaces\Node $Node
   * @return string
   */
  function serialize( Node $Node );
  
  /**
   * @return string
   */
  function getFileExtension();
}
