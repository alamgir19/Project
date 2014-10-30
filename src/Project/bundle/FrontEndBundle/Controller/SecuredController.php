<?php

namespace Project\bundle\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/my-functions.php");
class SecuredController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Secured:index.html.php', array());
    }
    
    public function welcomeAction()
    {
        //print "this is welcome";
        session_start();
        $msg="";
        if(isset($_POST['txtUsername'])){	
                $LoggedUser=addslashes(trim(strtolower($_POST['txtUsername'])));
                $mypass=addslashes(trim($_POST['txtPassword']));
                //print $LoggedUser."this is user name";
                mysql_connect('localhost','root',''); 
                mysql_select_db('project_db');
                $chkUser="SELECT aduser_name, aduser_pass,adtype_id FROM admin_users WHERE aduser_name='".$LoggedUser."' AND aduser_pass='".$mypass."'";

                $resultUser=mysql_query($chkUser);
                $admin_type=mysql_fetch_array($resultUser);
                $admin_type_id=$admin_type['adtype_id'];
                if(mysql_num_rows($resultUser)==1){	
                        //session_register($LoggedUser);
                        $_SESSION['LoggedUser']=$LoggedUser;
                        //print $_SESSION['LoggedUser'];
                        $_SESSION['adtype_id']=$admin_type_id;

                        $lastLogin=mysql_query("SELECT aduser_time FROM admin_users WHERE aduser_name='".$LoggedUser."'");
                        $lastLoginTime=mysql_result($lastLogin, 0);
                        $_SESSION['lastLogin']=$lastLoginTime;
                        $updateLogin=mysql_query("UPDATE admin_users SET aduser_time='".date("Y-m-d H:i:s")."' WHERE aduser_name='".$LoggedUser."'");
                        return $this->render('ProjectbundleFrontEndBundle:Secured:welcome.html.php', array());
                }else{
                        session_unset();
                        $msg="<font color='#FF3300'>Invalid login. Please try again.</font>".mysql_error();
                }
        }
        return $this->render('ProjectbundleFrontEndBundle:Secured:welcome.html.php', array());
    }
    
    public function logoutAction()
    {
        session_start();
        session_destroy();
        //header("location:".$WebSiteUrl."login/");
        return $this->render('ProjectbundleFrontEndBundle:Secured:index.html.php', array());
    }
    
}


