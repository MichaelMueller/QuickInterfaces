<?php

namespace Qck\Interfaces\GraphSerialization;

/**
 * Central interface for a Node within a Object Graph that can be serialized and which provides the objects that
 * it owns.
 * 
 * @author muellerm
 */
interface Node
{

  /**
   * @return SerializableNode[]
   */
  function getOwnedNodes();

  /**
   * 
   * @param NodeIdProvider $NodeIdProvider
   */
  function toStringArray( NodeIdProvider $NodeProvider );
}
