<?php

namespace Project\bundle\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//include("bundles/projectbundlefrontend/include/userReqd.php");
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
//require("bundles/projectbundlefrontend/ckeditor/ckeditor.php");
//include("bundles/projectbundlefrontend/include/my-functions.php");

class WomanController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Woman:index.html.php', array());
    }
    
    public function addProgramAction($id, $action2)
    {
        //print "hello world";
        
        
        return $this->render('ProjectbundleFrontEndBundle:Woman:addProgram.html.php', array('id'=>$id ,'action2'=>$action2));
    }
    
    public function programUpdateAction($action, $id)
    {
        //print"this is edit option";
        //print $action;
        //print $id."this is txt id in slide update";
        if(isset($_POST['chkHome']))
		$Inshow=1;
        else
            $Inshow=0;

        if ($action == 'add'){
                print "this is add";
                $sql="INSERT INTO woman_program(
                Title,
                CatId,
                ImageAlt, 
                Description,
                MetaTitle,
                MetaDesc,
                MetaKey,
                Link,
                InShow,
                PostedDate
                ) VALUES (
                '".$_POST['txtTitle']."',
                '".$_POST['selCat']."',
                '".$_POST['image_alt']."', 
                '".$_POST['txtaDesc']."',
                '".$_POST['meta_title']."',
                '".$_POST['meta_desc']."',
                '".$_POST['meta_key']."',
                '".$_POST['txtLink']."',
                '".$Inshow."', 
                '".date("Y-m-d")."'
                )";
                //print $sql;
                $result=mysql_query($sql);
                $insert_id=mysql_insert_id();
                if($result){
                    print "this is if";
                        if($_FILES['fileImg']['tmp_name']!=""){
                                $fileext=strtolower(substr($_FILES['fileImg']['name'], -3, 3));
                                $filename="program_".$insert_id.".".$fileext;
                                $filename_th="th_".$filename;
                                $filedir="bundles/projectbundlefrontend/images/userfiles/";			
                                $uploads=move_uploaded_file($_FILES['fileImg']['tmp_name'], $filedir.$filename);
                                if($uploads){
                                        $updates=mysql_query("UPDATE woman_program SET Image='".$filename."' WHERE Id=$insert_id");
                                        //$image = new SimpleImage();
                                        //$image->load($filedir.$filename);
                                        //$image->resize(148,112);
                                        //$image->save("bundles/projectbundlefrontend/images/userfiles/$filename_th");
                                        //$updates=mysql_query("UPDATE slideshow SET ImageThumb='".$filename_th."' WHERE Id=$insert_id");
                                        return $this->redirect($this->generateUrl('woman_program',array()));
                                        }else{
                                        $msg="<span class='styleError'>Error occured. Big image could not be uploaded.</span>";
                                }	
                        }
                        return $this->redirect($this->generateUrl('woman_program',array()));
                        }else{
                            print "this is else";
                        $msg="<span class='styleError'>Error occured. ".mysql_error()."</span>";
                }
        }

        if($action=='edit'){
            //print "this is update button";
            print $_POST['txtTitle'].'this is title';
            //print $id;
                $link_state=1;
                $sql_update=mysql_query("UPDATE woman_program SET
                Title='".$_POST['txtTitle']."',
                CatId='".$_POST['selCat']."',
                ImageAlt='".$_POST['image_alt']."', 
                Description='".$_POST['txtaDesc']."',
                MetaTitle='".$_POST['meta_title']."',
                MetaDesc='".$_POST['meta_desc']."',
                MetaKey='".$_POST['meta_key']."',
                Link='".$_POST['txtLink']."',
                InShow='".$Inshow."',
                LinkStatus='$link_state',
                PostedDate='".date("Y-m-d")."'
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
                                        $filename="program_".$insert_id.".".$fileext;
                                        $filename_th="th_".$filename;
                                        $filedir="bundles/projectbundlefrontend/images/userfiles/";			
                                        $uploads=move_uploaded_file($_FILES['fileImg']['tmp_name'], $filedir.$filename);
                                        if($uploads)
                                        {
                                                $updates=mysql_query("UPDATE woman_program SET Image='".$filename."' WHERE  Id=$id");
                                                //$image = new SimpleImage();
                                                //$image->load($filedir.$filename);
                                                //$image->resize(148,112);
                                                //$image->save("bundles/projectbundlefrontend/images/userfiles/$filename_th");
                                                //$updates=mysql_query("UPDATE slideshow SET ImageThumb='".$filename_th."' WHERE Id=$id");
                                                return $this->redirect($this->generateUrl('woman_program',array()));
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
                return $this->redirect($this->generateUrl('woman_program',array()));
                

        }
        if ($action == 'delete'){
            $sql="DELETE FROM woman_program WHERE Id=$id";
            mysql_query($sql);
            return $this->redirect($this->generateUrl('woman_program',array()));
        }

        //return $this->render('ProjectbundleFrontEndBundle:Slide:index.html.php', array());
    }
    
}

