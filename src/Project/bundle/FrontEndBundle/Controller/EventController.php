<?php

namespace Project\bundle\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//include("bundles/projectbundlefrontend/include/userReqd.php");
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
//require("bundles/projectbundlefrontend/ckeditor/ckeditor.php");
//include("bundles/projectbundlefrontend/include/my-functions.php");

class EventController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectbundleFrontEndBundle:Event:index.html.php', array());
    }
    
    public function addEventAction($id, $action2)
    {
        print "hello world";
        //print $id;
        //print $action2;
        
        return $this->render('ProjectbundleFrontEndBundle:Event:addEvent.html.php', array('id'=>$id ,'action2'=>$action2));
    }
    
    public function eventUpdateAction($action, $id)
    {
        //print"this is edit option";
        print $action;
        print $id."this is txt id in slide update";
        if(isset($_POST['chkHome']))
		$Inshow=1;
        else
            $Inshow=0;

        if ($action == 'add'){
                print "this is add";
                $sql="INSERT INTO events(
                Title,
                Place, 
                Description,
                Time,
                EventDate,
                PostedDate
                ) VALUES (
                '".$_POST['txtTitle']."',
                '".$_POST['txtPlace']."',
                '".$_POST['txtaDesc']."',
                '".$_POST['txtTime']."',
                '".$_POST['txtDate']."',
                '".date("Y-m-d")."'
                )";
                print $sql;
                $result=mysql_query($sql);
                $insert_id=mysql_insert_id();
                if($result){
                    print "this is if";
                        if($_FILES['fileBigImg']['tmp_name']!=""){
                                $fileext=strtolower(substr($_FILES['fileBigImg']['name'], -3, 3));
                                $filename="event_".$insert_id.".".$fileext;
                                $filename_th="th_".$filename;
                                $filedir="bundles/projectbundlefrontend/images/userfiles/";			
                                $uploads=move_uploaded_file($_FILES['fileBigImg']['tmp_name'], $filedir.$filename);
                                if($uploads){
                                        $updates=mysql_query("UPDATE events SET BigImage='".$filename."' WHERE Id=$insert_id");
                                        //$image = new SimpleImage();
                                        //$image->load($filedir.$filename);
                                        //$image->resize(148,112);
                                        //$image->save("bundles/projectbundlefrontend/images/userfiles/$filename_th");
                                        //$updates=mysql_query("UPDATE slideshow SET ImageThumb='".$filename_th."' WHERE Id=$insert_id");
                                        return $this->redirect($this->generateUrl('event',array()));
                                        }else{
                                        $msg="<span class='styleError'>Error occured. Big image could not be uploaded.</span>";
                                }	
                        }
                        if($_FILES['fileImg']['tmp_name']!=""){
                                $fileextension=strtolower(substr($_FILES['fileImg']['name'], -3, 3));
                                $filename_small="event_small_".$insert_id.".".$fileextension;
                                $filename_th="th_".$filename_small;
                                $filedirect="bundles/projectbundlefrontend/images/userfiles/";			
                                $upload=move_uploaded_file($_FILES['fileImg']['tmp_name'], $filedirect.$filename_small);
                                if($upload){
                                        $updates=mysql_query("UPDATE events SET Small_Image='".$filename."' WHERE Id=$insert_id");
                                        //$image = new SimpleImage();
                                        //$image->load($filedir.$filename);
                                        //$image->resize(148,112);
                                        //$image->save("bundles/projectbundlefrontend/images/userfiles/$filename_th");
                                        //$updates=mysql_query("UPDATE slideshow SET ImageThumb='".$filename_th."' WHERE Id=$insert_id");
                                        return $this->redirect($this->generateUrl('event',array()));
                                        }else{
                                        $msg="<span class='styleError'>Error occured. Big image could not be uploaded.</span>";
                                }	
                        }
                        
                        return $this->redirect($this->generateUrl('event',array()));
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
                $sql_update=mysql_query("UPDATE events SET
                Title='".$_POST['txtTitle']."',
                Description='".$_POST['txtaDesc']."',
                Place='".$_POST['txtPlace']."',
                Time='".$_POST['txtTime']."',
                EventDate='".$_POST['txtDate']."',
                PostedDate='".date("Y-m-d")."'
                WHERE Id='$id'");
                
                if($sql_update)
                {
                    //print "this is inside if";
                        $insert_id=$id;
                        
                    //print "this is if";
                        if($_FILES['fileBigImg']['tmp_name']!=""){
                                $fileext=strtolower(substr($_FILES['fileBigImg']['name'], -3, 3));
                                $filename="event_".$insert_id.".".$fileext;
                                $filename_th="th_".$filename;
                                $filedir="bundles/projectbundlefrontend/images/userfiles/";			
                                $uploads=move_uploaded_file($_FILES['fileBigImg']['tmp_name'], $filedir.$filename);
                                if($uploads){
                                        $updates=mysql_query("UPDATE events SET BigImage='".$filename."' WHERE Id=$insert_id");
                                        //$image = new SimpleImage();
                                        //$image->load($filedir.$filename);
                                        //$image->resize(148,112);
                                        //$image->save("bundles/projectbundlefrontend/images/userfiles/$filename_th");
                                        //$updates=mysql_query("UPDATE slideshow SET ImageThumb='".$filename_th."' WHERE Id=$insert_id");
                                        return $this->redirect($this->generateUrl('event',array()));
                                        }else{
                                        $msg="<span class='styleError'>Error occured. Big image could not be uploaded.</span>";
                                }	
                        }
                        if($_FILES['fileImg']['tmp_name']!=""){
                                $fileext=strtolower(substr($_FILES['fileImg']['name'], -3, 3));
                                $filename="event_small_".$insert_id.".".$fileext;
                                $filename_th="th_".$filename;
                                $filedir="bundles/projectbundlefrontend/images/userfiles/";			
                                $uploads=move_uploaded_file($_FILES['fileImg']['tmp_name'], $filedir.$filename);
                                if($uploads){
                                        $updates=mysql_query("UPDATE events SET Small_Image='".$filename."' WHERE Id=$insert_id");
                                        //$image = new SimpleImage();
                                        //$image->load($filedir.$filename);
                                        //$image->resize(148,112);
                                        //$image->save("bundles/projectbundlefrontend/images/userfiles/$filename_th");
                                        //$updates=mysql_query("UPDATE slideshow SET ImageThumb='".$filename_th."' WHERE Id=$insert_id");
                                        return $this->redirect($this->generateUrl('event',array()));
                                        }else{
                                        $msg="<span class='styleError'>Error occured. Big image could not be uploaded.</span>";
                                }	
                        }
                        
                        return $this->redirect($this->generateUrl('event',array()));
                }	
                //header("location:ProjectbundleFrontEndBundle:Slide:index.html.php");
                //return new RedirectResponse($this->generateUrl('slideshow'));
                return $this->redirect($this->generateUrl('woman_program',array()));
                

        }
        if ($action == 'delete'){
            $sql="DELETE FROM events WHERE Id=$id";
            mysql_query($sql);
            return $this->redirect($this->generateUrl('event',array()));
        }

        //return $this->render('ProjectbundleFrontEndBundle:Slide:index.html.php', array());
    }
    
}

