<?php

namespace Project\bundle\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//include("bundles/projectbundlefrontend/include/userReqd.php");
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
//require("bundles/projectbundlefrontend/ckeditor/ckeditor.php");
//include("bundles/projectbundlefrontend/include/my-functions.php");

class SlideController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Slide:index.html.php', array());
    }
    
    public function addSlideAction($id, $action2)
    {
        //print "hello world";
        
        
        return $this->render('ProjectbundleFrontEndBundle:Slide:addSlide.html.php', array('id'=>$id ,'action2'=>$action2));
    }
   
    public function slideUpdateAction($action, $id)
    {
        //print"this is edit option";
        print $action;
        //print $id."this is txt id in slide update";
        if(isset($_POST['chkHome']))
		$Inhome=1;
        else
            $Inhome=0;

        if ($action == 'add'){
                print "this is add";
                $sql="INSERT INTO slideshow(
                ImageAlt, 
                Details,
                InHome,
                PostedDate
                ) VALUES (
                '".$_POST['image_alt']."', 
                '".$_POST['txtaDetails']."', 
                '".$Inhome."', 
                '".date("Y-m-d")."'
                )";
                $result=mysql_query($sql);
                $insert_id=mysql_insert_id();
                print $result;
                if($result){
                        if($_FILES['fileImg']['tmp_name']!=""){
                                $fileext=strtolower(substr($_FILES['fileImg']['name'], -3, 3));
                                $filename="photos_".$insert_id.".".$fileext;
                                $filename_th="th_".$filename;
                                $filedir="bundles/projectbundlefrontend/images/userfiles/";			
                                $uploads=move_uploaded_file($_FILES['fileImg']['tmp_name'], $filedir.$filename);
                                if($uploads){
                                        $updates=mysql_query("UPDATE slideshow SET Image='".$filename."' WHERE Id=$insert_id");
                                        //$image = new SimpleImage();
                                        //$image->load($filedir.$filename);
                                        //$image->resize(148,112);
                                        //$image->save("bundles/projectbundlefrontend/images/userfiles/$filename_th");
                                        $updates=mysql_query("UPDATE slideshow SET ImageThumb='".$filename_th."' WHERE Id=$insert_id");
                                       // return $this->redirect($this->generateUrl('slideshow',array()));
                                        }else{
                                        $msg="<span class='styleError'>Error occured. Big image could not be uploaded.</span>";
                                }	
                        }

                        }else{
                        $msg="<span class='styleError'>Error occured. ".mysql_error()."</span>";
                }
        }

        if($action=='edit'){
            //print "this is update button";

                $sql_update=mysql_query("UPDATE slideshow SET
                Title='".$_POST['txtTitle']."',
                ImageAlt='".$_POST['image_alt']."', 
                Details='".$_POST['txtaDetails']."'  
                WHERE Id='$id'");	
                if($sql_update)
                {
                    //print "this is inside if";
                        $insert_id=$id;
                        if($_FILES['fileImg']['tmp_name']!="")
                        {
                                if($_FILES['fileImg']['tmp_name']!="")
                                {
                                        $fileext=strtolower(substr($_FILES['fileImg']['name'], -3, 3));
                                        $filename="photos_".$insert_id.".".$fileext;
                                        $filename_th="th_".$filename;
                                        $filedir="bundles/projectbundlefrontend/images/userfiles/";			
                                        $uploads=move_uploaded_file($_FILES['fileImg']['tmp_name'], $filedir.$filename);
                                        if($uploads)
                                        {
                                                $updates=mysql_query("UPDATE slideshow SET Image='".$filename."' WHERE  Id=$id");
                                                //$image = new SimpleImage();
                                                //$image->load($filedir.$filename);
                                                //$image->resize(148,112);
                                                //$image->save("bundles/projectbundlefrontend/images/userfiles/$filename_th");
                                                $updates=mysql_query("UPDATE slideshow SET ImageThumb='".$filename_th."' WHERE Id=$id");
                                                return $this->redirect($this->generateUrl('slideshow',array()));
                                                } 
                                        else
                                        {
                                                $msg="<span class='styleError'>Error occured. Big image could not be uploaded.</span>";
                                        }	
                                }

                        }
                        else
                        {
                                $msg="<span class='styleError'>Error occured. ".mysql_error()."</span>";
                        }
                }	
                //header("location:ProjectbundleFrontEndBundle:Slide:index.html.php");
                //return new RedirectResponse($this->generateUrl('slideshow'));
                return $this->redirect($this->generateUrl('slideshow',array()));
                

        }
        if ($action == 'delete'){
            $sql="DELETE FROM slideshow WHERE Id=$id";
            mysql_query($sql);
            return $this->redirect($this->generateUrl('slideshow',array()));
        }

        //return $this->render('ProjectbundleFrontEndBundle:Slide:index.html.php', array());
    }
   
}
