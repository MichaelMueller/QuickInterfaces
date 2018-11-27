<?php

namespace Qck\Interfaces;

/**
 * An Config Service Class
 * 
 * @author muellerm
 */
interface DirectoryConfig
{

  /**
   * @return string
   */
  function getBaseDir();

  /**
   * @return string
   */
  function getDataDir( $createIfNotExists = true );

  /**
   * @return string
   */
  function getTmpDir( $createIfNotExists = true );

  /**
   * @return void
   */
  function createDirIfNotExists( $Dir );
}
