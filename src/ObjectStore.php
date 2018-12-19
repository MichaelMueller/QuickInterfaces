<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a DataNode
 * @author muellerm
 */
interface ObjectStore
{

  /**
   * @return string
   */
  function load($Id);

  /**
   * persist all changed objects
   */
  function commit();
}
