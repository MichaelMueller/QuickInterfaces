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
     * @param string $PartialKey
     * @return Registry
     */
    function getSpace( $PartialKey );

    /**
     * 
     * @param array $Data
     * @param string $KeyAttrName
     */
    function save( array $Data, $KeyAttrName = "id" );

    /**
     * 
     * @param mixed $Key
     * @return array|null
     */
    function get( $Key );

    /**
     * 
     * @param callable $Matcher
     * @param bool $FindFirst
     * @return array An Array of Arrays (empty potentially)
     */
    function find( callable $Matcher = null, $FindFirst = false );
}
