<?php

namespace Qck\Interfaces;

/**
 * Interface for creating a file object
 * @author muellerm
 */
interface FileFactory
{

  /**
   * 
   * @param string $DirPath
   * @param string $FileName
   * @return File A File Object
   */
  function create( $DirPath, $FileName );
}
