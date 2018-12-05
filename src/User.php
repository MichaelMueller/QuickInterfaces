<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a controller
 * @author muellerm
 */
interface User
{

  /**
   * @return string or null if none is set
   */
  function getName();

  /**
   * @return string
   */
  function getHashedPassword();

  /**
   * @return Authenticator An Authenticator or null if no custom authenticator is used
   */
  function getAuthenticator();
}
