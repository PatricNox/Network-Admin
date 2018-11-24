<?php

/**
* Network-Admin
* This file involves all networking.
*
* @author PatricNox <hello@PatricNox.info>
*
*/

/** WINDOWS Commands Executed
 * 
 *  arp 
 *  nslookup
 */


/** Get IP from All Computers in LAN
**************************************/
// Query shell for Computer IP's in network
$exec = explode('Type', shell_exec('arp -a'.' 2>&1'));

// Only use IP list
$ipList = explode('dynamic',$exec[1]);

// Remove Static IP's
end($ipList);
$static = key($ipList);
unset($ipList[$static]);
reset($ipList);

// Filter to only get IP
// and save them in its own array
$_IPList = [];
for ($i = 1; $i < count($ipList); $i++)
{
    $d = explode(' ', $ipList[$i]);
   
    if ($ip = $d[5])
        array_push($_IPList, $ip);
}

/** Get Hostname from All Computers in LAN
**************************************/
$_NameList = [];
foreach ($_IPList as $PC)
{
    // Get and filter out hostnames
    $exec = shell_exec("nslookup $PC".' 2>&1');
    $exec = explode("Name:",$exec);
    $name = explode("Address", $exec[1]);

    // Remove lan tag and push into PCNames array
    $PCName = str_replace('.lan', '', $name[0]);

    array_push($_NameList, trim($PCName));
}

/** Combine IP and Name List into an associative array
 ******************************************************/
$NetworkPCList = array_combine($_NameList, $_IPList);
