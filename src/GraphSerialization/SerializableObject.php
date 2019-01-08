<?php

namespace Qck\Interfaces;

/**
 *
 * An interface for storing objects data persistently
 * @author muellerm
 */
interface SerializableObject
{

  /**
   * @return PersistableObject[]
   */
  function getReferencedObjects();

  /**
   * 
   * @param object $Object
   */
  function toStringArray();
}
