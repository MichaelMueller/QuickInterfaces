<?php

namespace Qck\Interfaces;

/**
 * interface for classes providing an ActiveRecord
 * @author muellerm
 */
interface ActiveRecordConsumer
{

    /**
     * @return ActiveRecord
     */
    function setActiveRecord( ActiveRecord $ActiveRecord );
}
