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
   * @return void
   */
  function getData();

  /**
   * @return array
   */
  function setData( array $Data );

  /**
   * @return array
   */
  function hasChanged();

  /**
   * @return array
   */
  function setUnchanged();

  /**
   * @return mixed
   */
  function getId();

  /**
   * @return void
   */
  function setId($Id);
}
