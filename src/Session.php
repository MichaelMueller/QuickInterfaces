<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a controller
 * @author muellerm
 */
interface Session
{

  /**
   * @return User or null
   */
  function getCurrentUser();

  /**
   * start session and set a username if set
   * @return string or null if none is set
   */
  function setCurrentUser(User $User);

  /**
   * completely clear session
   */
  function logout();
}
