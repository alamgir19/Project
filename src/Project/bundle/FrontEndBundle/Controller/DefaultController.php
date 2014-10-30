<?php

namespace Project\bundle\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Default:index.html.php', array());
    }
    
    public function teacherAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Default:teacher.html.php', array());
    }
    
    public function parentAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Default:parent.html.php', array());
    }
    
    public function studentAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Default:student.html.php', array());
    }
       
    public function kidsAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Default:kids.html.php', array());
    }
    
    public function womanAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Default:woman.html.php', array());
    }
    
    public function sitemapAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Default:sitemap.html.php', array());
    }
    
    public function eventsAction($id)
    {
        return $this->render('ProjectbundleFrontEndBundle:Default:events.html.php', array('id'=>$id));
    }
    
    public function contactAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Default:contact.html.php', array());
    }
    
    public function thankyouAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Default:thankyou.html.php', array());
    }
    
    public function commentsAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Default:comments.html.php', array());
    }
    
    public function linkupdateAction()
    {
        $status_=0;
        if($_POST['selLink']!=0){
        $sql_update=mysql_query("UPDATE woman_program SET
                LinkStatus='$status_'  
                WHERE Id='".$_POST['selLink']."'");
        }
        $sql="INSERT INTO user(
                FullName,
                Phone,
                Email,
                Comments,
                PostedDate
                ) VALUES (
                '".$_POST['fname']."', 
                '".$_POST['phnum']."', 
                '".$_POST['email']."', 
                '".$_POST['txtMessage']."',
                '".date("Y-m-d")."'
                )";
        //print $sql;
                $result=mysql_query($sql);
        return $this->redirect($this->generateUrl('thankyou',array()));
        
    }
}

