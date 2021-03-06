<?php

namespace Qck\Interfaces;

/**
 *
 * @author muellerm
 */
interface HttpResponder
{

    const EXIT_CODE_OK = 200;
    const EXIT_CODE_BAD_REQUEST = 400;
    const EXIT_CODE_UNAUTHORIZED = 401;
    const EXIT_CODE_NOT_FOUND = 404;
    const EXIT_CODE_UNPROCESSABLE_ENTITY = 422;
    const EXIT_CODE_INTERNAL_ERROR = 500;
    const EXIT_CODE_NOT_IMPLEMENTED = 501;
    const EXIT_CODE_MOVED_PERMANENTLY = 301;
    const EXIT_CODE_REDIRECT_FOUND = 302;

    /**
     * 
     * @param Output $Output
     * @param int $ExitCode
     * @param array $AdditionalHeader
     */
    function send( Output $Output, $ExitCode = \Qck\Interfaces\HttpResponder::EXIT_CODE_OK );

    /**
     * 
     * @param string $Url
     */
    function redirect( $Url, $ExitCode = HttpResponder::EXIT_CODE_REDIRECT_FOUND );
}
