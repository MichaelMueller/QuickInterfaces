<?php

namespace Qck\Interfaces\ObjectSerialization;

/**
 * An interface for conversion of objects to an array of scalar. Implementing classes must "know" these
 * classes.
 *  
 * @author muellerm
 */
interface DataFileProvider
{

  /**
   * 
   * @param mixed $Id
   * @param string $FileExtension
   * @return \Qck\Interfaces\File
   */
  function getFile( $Id, $FileExtension );

  /**
   * @return File[]
   */
  function getAllFiles( $FileExtension );
}
