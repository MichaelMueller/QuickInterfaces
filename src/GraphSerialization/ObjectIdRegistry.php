<?php

namespace Qck\Interfaces\GraphSerialization;

/**
 * A central interface for addressing objects using an id
 * @author muellerm
 */
interface NodeIdRegistry extends NodeIdProvider
{

  /**
   * sets an object
   * @param mixed $Id
   * @return object An object or null
   */
  function setNodeId( \Qck\Interfaces\SerializableNode $Node, $Id = null );
}
