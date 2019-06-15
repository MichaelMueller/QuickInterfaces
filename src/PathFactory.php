<?php

namespace Qck\Interfaces;

/**
 * Interface for creating a file object
 * @author muellerm
 */
interface PathFactory
{

  /**
   * 
   * @param string $DirPath
   * @param string $FileBaseName
   * @return Path A File Object
   */
  function createPath($DirPath, $FileBaseName);

  /**
   * 
   * @param string $FilePath
   * @return Path A File Object
   */
  function createPathFromPath($FilePath);
}
