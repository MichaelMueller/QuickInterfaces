<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a controller
 * @author muellerm
 */
interface Node
{

  /**
   * @return array
   */
  function getData();

  /**
   * @return array
   */
  function setData(array $Data);

  /**
   * @return array
   */
  function hasChanged();

  /**
   * @return array
   */
  function setUnchanged();
}
