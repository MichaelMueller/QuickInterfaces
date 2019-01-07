<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a DataNode
 * @author muellerm
 */
interface PersistableObject
{

  /**
   * @return ObjectSchema
   */
  function getSchema();
}
