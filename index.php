<?php
define("common/looeicConfig", 'api');
include_once("serverInc.php");

include_once("common/handleInputData.php");
include_once("common/init.inc.php");


//********************************************
if($admin_info == -1 and $member_info == -1)
{
    dd('3');
}

/*checkPermissions();*/

if(isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
    switch ($action) {

        default :
          dd('1');
    }

} else {
    //checkPermissions('show');
    dd('2');
}
