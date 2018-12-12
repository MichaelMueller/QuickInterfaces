<?php

namespace Qck\Interfaces;

/**
 *
 * @author muellerm
 */
interface Authenticator
{

  /**
   * 
   * @param string $Username
   * @param string $PlainTextPassword
   * @return void
   */
  public function check( $Username, $PlainTextPassword );

  /**
   * 
   * @param string $RedirectUrl if null a standard exception will be thrown otherwise the user will be routed to another url
   * @return void
   */
  public function assertAuthenticatedUser( $RedirectUrl = null );
}
