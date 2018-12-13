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
  function getDataDir( $Subdir = null, $createIfNotExists = true );

  /**
   * @return string
   */
  function getLocalDataDir( $Subdir = null, $createIfNotExists = true );

  /**
   * @return string
   */
  function getHostName();

  /**
   * @return string
   */
  function getAssetsDir( $Subdir = null, $createIfNotExists = false );

  /**
   * @return string
   */
  function getTmpDir( $Subdir = null, $createIfNotExists = true );
}
