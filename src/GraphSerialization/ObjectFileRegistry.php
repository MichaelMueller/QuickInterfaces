<?php

namespace Qck\Interfaces;

/**
 * An interface for retrieving associated File objects to arbitrary objects
 *  
 * @author muellerm
 */
interface ObjectFileRegistry
{

  /**
   * 
   * @param type $Object
   * @param \Qck\Interfaces\File $File
   */
  function setFile( $Object, File $File );

  /**
   * returns or creates a File Object for the object
   * @param File
   * @return File Description
   */
  function getFile( $Object );
}
