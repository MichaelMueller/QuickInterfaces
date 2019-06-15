<?php

namespace Qck\Interfaces;

/**
 * An interface for an object that can be rendered to HTML
 * 
 * @author muellerm
 */
interface DataRegistry
{

    /**
     * 
     * @param string $SpaceName
     * @return Registry
     */
    function space( $SpaceName );

    /**
     * 
     * @param array $Data
     * @param string $IdAttrName
     */
    function save( array $Data, $IdAttrName = "id" );

    /**
     * 
     * @param mixed $Id
     * @return array|null
     */
    function get( $Id );

    /**
     * 
     * @param mixed $Id
     */
    function delete( $Id );

    /**
     * 
     */
    function clear();

    /**
     * 
     * @param callable $Matcher
     * @param bool $FindFirst
     * @return array An Array of Arrays (empty potentially)
     */
    function find( callable $Matcher = null, $FindFirst = false );
}
