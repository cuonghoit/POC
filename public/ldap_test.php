<?php
// check http://www.forumsys.com/tutorials/integration-how-to/ldap/online-ldap-test-server/

// Active Directory server
$ldap_host = "ldap.forumsys.com";

// connect to active directory
$ldapconn = ldap_connect($ldap_host) or die("Could not connect to LDAP Server");

//user dn
//$ldapadmin = "uid=gauss,dc=example,dc=com";
$ldapadmin = "cn=read-only-admin,dc=example,dc=com";


// Password
$ldappass = "password";

// set connection is using protocol version 3, if not will occur warning error.
ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);

if ($ldapconn) {
    // binding to ldap server
    $ldapbind = ldap_bind($ldapconn, $ldapadmin, $ldappass);

    // verify binding
    if ($ldapbind){
        echo "LDAP bind successful…";

        $ds=ldap_connect($ldap_host);
        if ($ds) {
            $authuser = "meeting";
            $sr=ldap_search($ds, "OU=Service Accounts,OU=PQPOC,DC=phuquocpoc,DC=local", "(cn=*)");
            // SHOW ALL DATA
            echo '<h1>Dump all data</h1><pre>';
            print_r($sr);
            echo '</pre>';

            // echo "Search result is " . $sr . "<br />";

            if (ldap_count_entries($ds, $sr) == 0){
                echo "The entire directory was searched for (uid=" . $authuser . ") but no entry was found.<br />";
            }

            if (ldap_count_entries($ds, $sr) == 1){
                echo "The entire directory was searched for (uid=" . $authuser . ") and one entry was found.<br />";
            }



            // echo "Getting entries ...<p>";
            $info = ldap_get_entries($ds, $sr);
            // echo "Data for " . $info["count"] . " items returned:<p>";

            for ($i=0; $i<$info["count"]; $i++) {
                echo "<br />dn is: " . $info[$i]["dn"] . "<br />";
                echo "first cn entry is: " . $info[$i]["cn"][0] . "<br />";
                echo "first email entry is: " . $info[$i]["mail"][0] . "<br /><hr />";
            }
        }
    } else {
        echo "LDAP bind failed…";
    }

}
