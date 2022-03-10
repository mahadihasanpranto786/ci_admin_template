<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function authorityInfo($authorityId)
{
    $dataDriver =& get_instance();
    $authorityInfo=$dataDriver->User->user_info($authorityId);
    return $authorityInfo;
}