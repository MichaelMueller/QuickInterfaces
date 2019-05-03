<?php

namespace Qck\Interfaces;

/**
 * interface for classes providing an ActiveRecord
 * @author muellerm
 */
interface ActiveRecordProvider
{

    /**
     * @return ActiveRecord
     */
    function getActiveRecord();
}
