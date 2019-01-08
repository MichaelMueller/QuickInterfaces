<?php

namespace Qck\Interfaces\GraphSerialization;

/**
 * An interface for retrieving Nodes
 * 
 * @author muellerm
 */
interface NodeIdProvider
{

  /**
   * 
   * @param mixed $Id
   * @return mixed an id or null if not exists
   */
  function getNodeId( Node $Node );
}
