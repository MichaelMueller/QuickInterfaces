<?php

namespace Qck\Interfaces;

/**
 * An Config Service Class
 * 
 * @author muellerm
 */
interface DirectoryConfig 
{
  const WORKING_DIR = "var";
  const DATA_SUBDIR = "data";
  
  /**
   * @return string
   */
  function getBaseDir();

  /**
   * @return string
   */
  function getDataDir($createIfNotExists = true);

  /**
   * @return string
   */
  function getTmpDir($createIfNotExists = true);
}
