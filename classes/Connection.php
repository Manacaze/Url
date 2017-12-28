<?php
/**
 * Created by PhpStorm.
 * User: Manacaze
 * Date: 10/28/2017
 * Time: 12:10 AM
 */

class Connection
{
    protected function con(){
        global $con;
        return $con;
    }
}