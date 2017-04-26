<?php
  session_start(); // Starting Session
  $error = ''; // Variable To Store Error Message
  $isadmin = 0;
  
 // if (isset($_POST['submit'])) 
 // {
     if (empty($_POST['username']) || empty($_POST['password'])) 
	 {
        $error = "Username or Password is invalid";
		echo $error;
     }
     else
     {
		// Define $username and $password
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// using ldap bind
        $ldaprdn  = 'ho' . "\\" .$username;     // ldap rdn or dn
        $ldappass = $password;  // associated password
		
		// connect to ldap server
        //$ldapconn = ldap_connect("ho.pjbservices.com")
		$ldapconn = ldap_connect("172.16.30.106")
        or die("Could not connect to LDAP server.");
				
		if ($ldapconn) 
		{
		    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
            ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
	   
            // binding to ldap server
            $ldapbind = @ldap_bind($ldapconn, $ldaprdn, $ldappass);
			
			// verify binding
            if ($ldapbind) 
			{
			   $filter="(sAMAccountName=$username)";
               $result = ldap_search($ldapconn,"dc=ho,dc=pjbservices,dc=com",$filter);
               ldap_sort($ldapconn,$result,"sn");
               $info = ldap_get_entries($ldapconn, $result);
			   
			   $subdit = "";
			   $memberof = $info[0]["memberof"];
               foreach($memberof as $mmb)
               {
			     if(strstr($mmb, "SUBDIT"))
				 {
				   $subdit = $mmb;
				   break;
				 }
			   }			   
			   
			   //List of NIDs with admin access
			   /*if($username == '8914138KP' || $username == '8513958KP' || $username == '8514617OJT')
			     $isadmin = 1;*/
				 
			   $_SESSION['login_user'] = $username; // Initializing Session
			   $_SESSION['nid'] = $info[0]["samaccountname"][0];
			   $_SESSION['nama'] = $info[0]["name"][0];
			   $_SESSION ['user_id'] = $info[0]["distinguishedname"][0];
			   $_SESSION['subdit'] = $subdit;
			   $_SESSION['isadmin'] = $isadmin;
			   
			   //----------------------------------------------------------------
			   
			  /* $cookie_name = hash('sha256', $_SERVER['REMOTE_ADDR']);
			   
			      $pjbs = array(
				     md5('token') => session_id(),
					 md5('nid') => $info[0]["samaccountname"][0],
					 md5('user_id') => $info[0]["distinguishedname"][0],
					 md5('nama') => $info[0]["name"][0],
					 md5('pass') => $password,
					 md5('cookie_name') => $cookie_name,

                     md5('memberof') => $info[0]["memberof"]					 
				  );*/
				  				  
				//Sub domain cookies
			 //   setcookie($cookie_name, serialize($pjbs), time()+600 , '/', '.pjbservices.com');
                 
			   //----------------------------------------------------------------
			   
			   header("location: exp.php"); // Redirecting To Other Page
			}
			else
			  $error = "Username or Password is invalid";
			  if($_POST['username'] == 'root'){
				  header("location: ../app/index.php/home/login/b1h2t3a34g4343s4f5d32j3k23d21l~".$_POST['username']."~".md5($_POST['password']));
				  }
			  else{
			  	  header("location: ../app/index.php/home/login");
			  }
			
		}
		
     }
	 
  // }
?>