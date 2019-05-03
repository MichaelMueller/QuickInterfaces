<?php

namespace Qck\Interfaces;

/**
 * Service class for sending messages to an admin
 * @author muellerm
 */
interface ActiveRecord
{

    /**
     * @return mixed An Id for this record or null if no Id provided yet!
     */
    function getId();

    /**
     * 
     * @param mixed $Key
     * @param mixed $Value
     */
    function setId( $Id );

    /**
     * 
     * @param mixed $Value
     */
    function add( $Value );

    /**
     * 
     * @param mixed $Key
     * @param mixed $Value
     */
    function set( $Key, $Value );

    /**
     * 
     * @param mixed $Key
     * @param mixed $Default
     * @return mixed A value or $Default
     */
    function get( $Key, $Default = null );

    /**
     * @param mixed $Key
     */
    function remove( $Key );

    /**
     * @return data array 
     */
    function getData();

    /**
     * @return array an array of keys or empty array
     */
    function keys();

    /**
     * @return array an array of values
     */
    function values();

    /**
     * @return bool
     */
    function has( $Key );

    /**
     * @return ActiveRecord a new ActiveRecord
     */
    function create( $Id = null );

    /**
     * saves this active record (and potentially contained active records)
     */
    function save();
}
