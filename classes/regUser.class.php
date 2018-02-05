<?php
/**
 * Created by PhpStorm.
 * User: Michael Porten
 * Date: 2/5/2018
 * Time: 10:18 AM
 */

class regUser extends Users
{
    //methods
    function __construct($user_level, $user_id){
        parent::__construct(1);
        $this->user_id = $user_id;
    }
}