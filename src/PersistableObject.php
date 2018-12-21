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
   * recursively save this object tree
   * @return void
   */
  function save();

  /**
   * 
   */
  function delete();
  
  /**
   * 
   */
  function getId();
}
