<?php

namespace Qck\Interfaces;

/**
 * Encapsulation of everything that is known when a request is sent to this system (input
 * variables, env, client and config infos)
 * @author muellerm
 */
interface Request
{

  /**
   * Get input parameter either from post, cookie, get or cli
   * @param string $Name
   * @param mixed $Default
   * @return mixed
   */
  public function get( $Name, $Default = null );

  /**
   * 
   * @param string $Name
   * @return bool
   */
  public function has( $Name );

  /**
   * 
   * @return array
   */
  public function getParams();

  /**
   * @return bool
   */
  function wasRunFromCommandLine();

  /**
   * @return Client
   */
  function getClient();

  /**
   * @return Env
   */
  function getEnv();

  /**
   * @return Config
   */
  function getConfig();
}
