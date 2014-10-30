<?php function alternateRowColor($rownum){
// must be declared a variable $i=1; before using this function
	if($rownum%2==0) 
		$bg="#F1F1F1"; 
	else 
		$bg="#FFFFFF";
	return $bg;
}
function FindSiteTitle($id){
	$sql=mysql_query("SELECT Alias FROM site WHERE Id=$id");
	$result=mysql_result($sql, 0);
	//return ereg_replace(" ", "-", $result);
	return $result;
}
function FindSiteAlias($id){
	$sql=mysql_query("SELECT Alias FROM site WHERE Id=$id");
	$result=mysql_result($sql, 0);
	//return ereg_replace(" ", "-", $result);
	return $result;
}

function FindSiteAliasdest($id){
	$sql=mysql_query("SELECT Alias FROM destination WHERE Id=$id");
	$result=mysql_result($sql, 0);
	//return ereg_replace(" ", "-", $result);
	return $result;
}

function FindSiteDesc($id){
	$sql=mysql_query("SELECT Details FROM site WHERE Id=$id");
	$result=mysql_result($sql, 0);
	return $result;
}
function FindSiteSumm($id){
	$sql=mysql_query("SELECT Summary FROM site WHERE Id=$id");
	$result=mysql_result($sql, 0);
	return $result;
}

function FindPos($id){
	if($id<>0){
		$sql=mysql_query("SELECT Title FROM positions WHERE Id=$id");
		$result=mysql_result($sql, 0);
	}else
		$result="None";
		
	return $result;
}

/*function FindRegion($id){
	if($id<>0){
		$sql=mysql_query("SELECT Title FROM regions WHERE Id=$id");
		$result=mysql_result($sql, 0);
	}else
		$result="None";
		
	return $result;
}*/

function FindCountry($title){
	$sql=mysql_query("SELECT Id FROM destinations WHERE title='$title'");
	$result=mysql_result($sql, 0);
	return $result;
}

function FindCat($title){
	$sql=mysql_query("SELECT Id FROM category WHERE Title='$title'");
	$result=mysql_result($sql, 0);
	return $result;
}

function FindGrade($id){
	if($id<>0){
		$sql=mysql_query("SELECT Title FROM grades WHERE Id=$id");
		$result=mysql_result($sql, 0);
	}else
		$result="None";
		
	return $result;
}

function FindParentMenu($id){
	if($id<>0){
		$sql=mysql_query("SELECT Title FROM site WHERE Id=$id");
		$result=mysql_result($sql, 0);
	}else{
		$result="Master Menu";
	}	
	//return ereg_replace(" ", "-", $result);
	return $result;
}

/*if($page_id<>""){
	$q_page=mysql_query("SELECT * FROM site WHERE Id=$page_id");
	$row_page=mysql_fetch_array($q_page);
		//$type_id=$row_page['type_id'];
		$s_title=$row_page['Title'];
		$s_summary=$row_page['Summary'];
		$s_details=$row_page['Details'];
		$s_ptitle=$row_page['MetaTitle'];
		$s_pdesc=$row_page['MetaDesc'];
		$s_pkeywords=$row_page['MetaKey'];
		$s_image=$row_page['Image'];
		$s_img_alt=$row_page['ImageAlt'];
}

/*if($page_id<>""){
	$q_page=mysql_query("SELECT * FROM destination WHERE Id='$page_id'");
	$row_page=mysql_fetch_array($q_page);
		//$type_id=$row_page['type_id'];
		$d_title=$row_page['Title'];
		//$summary=$row_page['alias'];
		$d_description=$row_page['Description'];
		$d_alt=$row_page['Alt'];
		$d_ptitle=$row_page['MetaTitle'];
		$d_pdesc=$row_page['MetaDesc'];
		$d_pkeywords=$row_page['MetaKey'];
		$d_image=$row_page['Image'];
		$d_img_thumb=$row_page['TmageThumb'];
}


if($page_id<>""){
	$q_page=mysql_query("SELECT * FROM region WHERE Id='$page_id'");
	$row_page=mysql_fetch_array($q_page);
		$r_cat_id=$row_page['CatId'];
		$r_title=$row_page['Title'];
		$r_summary=$row_page['Summary'];
		$r_details=$row_page['Details'];
		$r_alt=$row_page['ImageAlt'];
		$r_ptitle=$row_page['MetaTitle'];
		$r_pdesc=$row_page['MetaDesc'];
		$r_pkeywords=$row_page['MetaKey'];
		$r_image=$row_page['Image'];
		$r_img_thumb=$row_page['ImageThumb'];
}


if($page_id<>""){
	$q_page=mysql_query("SELECT * FROM category WHERE Id='$page_id'");
	$row_page=mysql_fetch_array($q_page);
		//$type_id=$row_page['type_id'];
		$c_title=$row_page['Title'];
		$c_summary=$row_page['Summary'];
		$c_details=$row_page['Details'];
		$c_ptitle=$row_page['MetaTitle'];
		$c_pdesc=$row_page['MetaDesc'];
		$c_pkeywords=$row_page['MetaKey'];
		$c_image=$row_page['Image'];
		$c_alt=$row_page['ImageAlt'];
}

if($page_id<>""){
	$q_page=mysql_query("SELECT * FROM itinary WHERE Id='$page_id'");
	$row_page=mysql_fetch_array($q_page);
		$i_id=$row_page['Id'];
		$i_oitineary=$row_page['Oitinerary'];
		$i_includes=$row_page['Includes'];
		$i_excludes=$row_page['Excludes'];
		$i_title=$row_page['Title'];
		$i_days=$row_page['Days'];
		$i_modes=$row_page['Modes'];
		$i_grades=$row_page['Grade'];
		$i_maxht=$row_page['Maxht'];
		$i_transportation=$row_page['Transportation'];
		$i_seasons=$row_page['Seasons'];
		$i_groups=$row_page['Groups'];
		$i_maps=$row_page['Maps'];
		$i_highlight=$row_page['Highlight'];
		$i_details=$row_page['Details'];
		$i_overview=$row_page['Overview'];
		$i_ptitle=$row_page['MetaTitle'];
		$i_pdesc=$row_page['MetaDesc'];
		$i_pkeywords=$row_page['MetaKey'];
		$i_image=$row_page['Image'];
		$i_alt=$row_page['ImageAlt'];
}
*/

class SimpleImage {
   
   var $image;
   var $image_type;
 
   function load($filename) {
      $image_info = getimagesize($filename);
      $this->image_type = $image_info[2];
      if( $this->image_type == IMAGETYPE_JPEG ) {
         $this->image = imagecreatefromjpeg($filename);
      } elseif( $this->image_type == IMAGETYPE_GIF ) {
         $this->image = imagecreatefromgif($filename);
      } elseif( $this->image_type == IMAGETYPE_PNG ) {
         $this->image = imagecreatefrompng($filename);
      }
   }
   function save($filename, $image_type=IMAGETYPE_JPEG, $compression=70, $permissions=null) {
      if( $image_type == IMAGETYPE_JPEG || $image_type == IMAGETYPE_JPG) {
         imagejpeg($this->image,$filename,$compression);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($this->image,$filename);         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($this->image,$filename);
      }   
      if( $permissions != null) {
         chmod($filename,$permissions);
      }
   }
   function output($image_type=IMAGETYPE_JPEG) {
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($this->image);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($this->image);         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($this->image);
      }   
   }
   function getWidth() {
      return imagesx($this->image);
   }
   function getHeight() {
      return imagesy($this->image);
   }
   function resizeToHeight($height) {
      $ratio = $height / $this->getHeight();
      $width = $this->getWidth() * $ratio;
      $this->resize($width,$height);
   }
   function resizeToWidth($width) {
      $ratio = $width / $this->getWidth();
      $height = $this->getheight() * $ratio;
      $this->resize($width,$height);
   }
   function scale($scale) {
      $width = $this->getWidth() * $scale/100;
      $height = $this->getheight() * $scale/100; 
      $this->resize($width,$height);
   }
   function resize($width,$height) {
      $new_image = imagecreatetruecolor($width, $height);
      imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
      $this->image = $new_image;   
   }      
}

function LimitWords($string, $word_limit)
{
$words = explode(" ",$string);
return implode(" ",array_splice($words,0,$word_limit));
}


class home{
	
	// ------------------  start selectData -----------------	
	function selectData($table,$where, $field = "*"){
		global $select_data;
		$condition = ((is_numeric($where)) ? "Id='":"Alias='") .$where."'";
		$select = "*";
		if ($field!="*"){
			$select = "";
			foreach($field AS $fields){
				$comma = ((empty($select))? "":", ");
				$select .= $comma.$fields;
			}
		}
		$sql = mysql_query("SELECT $select FROM $table WHERE $condition");
		$select_data = mysql_fetch_array($sql);
	}	
	// ------------------  end selectData -----------------	
	
	// ------------------  start insertData -----------------	
	function insertData ($table,$value,$title,$image_tmp=NULL,$image=NULL, $image_2_tmp=NULL, $image_2=NULL, $img_gallery=NULL, $img_gallery_tmp=NULL, $cap_gallery=NULL, $thumb_image_2=NULL,$thumb_image_index=NULL, $map=NULL,$img_pdf_tmp=NULL,$img_pdf=NULL,$details=NULL){
		
		global $msg, $errorBdr,$inset_result;
		if(isset($_POST['btnAdd'])){
			if(!empty($title)){
				/*$sql = mysql_query("SELECT Id FROM $table WHERE Title='$title'");
				print "SELECT Title FROM $table WHERE Title='$title'";
				$result = mysql_num_rows($sql);
				//print $image_tmp;
				if($result == 0){*/
					$field = array_keys($value);
					$insert_sql = "INSERT INTO $table (".implode(",",$field).") VALUES ('".implode("','",$value)."')";
					$insert_result = mysql_query($insert_sql);
					$insert_id = mysql_insert_id();
					if($insert_result){
						if($image_tmp!=""){
							$file_ext=substr($image, -4, 4);
							$file_name=$table."_".$insert_id.$file_ext;
							$file_name_th="th_".$file_name;
							$file_thumb_name_th="th_banner_".$file_name;
							$file_thumb_index="th_index_".$file_name;
							$file_dir_name="../../userfiles/$file_name";
							$uploads=move_uploaded_file($image_tmp, $file_dir_name);
							if($uploads){
								$updates=mysql_query("UPDATE $table SET Image='$file_name' WHERE Id=$insert_id");
								print "UPDATE $table SET Image='$file_name' WHERE Id=$insert_id";
								$image = new SimpleImage();
								$image->load($file_dir_name);
								$image->resize(150,150);
								$image->save("../../userfiles/$file_name_th");
								$updates=mysql_query("UPDATE $table SET ImageThumb='$file_name_th' WHERE Id='$insert_id'");
								$image = new SimpleImage();
								$image->load($file_dir_name);
								$image->resize(300,200);
								$image->save("../../userfiles/$file_thumb_index");
								$updates=mysql_query("UPDATE $table SET $thumb_image_index='$file_thumb_index' WHERE Id=$insert_id");
								$image = new SimpleImage();
								$image->load($file_dir_name);
								$image->resize(200,100);
								$image->save("../../userfiles/$file_thumb_name_th");
								$updates=mysql_query("UPDATE $table SET $thumb_image_2='$file_thumb_name_th' WHERE Id=$insert_id");
								header("location:index.php");
							}
						}
						
						
						if($image_2_tmp !="")
						{
							$file_ext=substr($image_2, -4, 4);
							$file_2_name=$table."_2_".$insert_id.$file_ext;
							$map_thumb="th_map_".$file_2_name;
							$file_dir_name_2="../../userfiles/$file_2_name";
							$uploads=move_uploaded_file($image_2_tmp, $file_dir_name_2);
							if($uploads){
								$updates=mysql_query("UPDATE $table SET $map='$file_2_name' WHERE Id='$insert_id'");
								$image = new SimpleImage();
								$image->load($file_dir_name_2);
								$image->resize(262,210);
								$image->save("../../userfiles/$map_thumb");
								$updates=mysql_query("UPDATE $table SET $map_thumb='$map_thumb' WHERE Id='$insert_id'");
								header("location:index.php");
							}
						}
						
						if($img_pdf_tmp !="")
						{
							$file_ext=substr($img_pdf, -4, 4);
							$file_pdf_name=$table."_pdf_".$insert_id.$file_ext;
							$file_dir_name_pdf="../../userfiles/$file_pdf_name";
							$uploads=move_uploaded_file($img_pdf_tmp, $file_dir_name_pdf);
							if($uploads){
								$updates=mysql_query("UPDATE $table SET $details='$file_pdf_name' WHERE Id=$insert_id");
								header("location:index.php");
							}
						}
						
						/////////////////// START OF UPLOADING IMAGE FOR GALLERY///////////////////////////////////////////
						for ($i = 0; $i < count($img_gallery); $i++) {
							if ($img_gallery[$i] != '')
							{ //check if file field empty or not
								$sql = mysql_query("INSERT INTO gallary_photo (TripId) VALUES ('$insert_id')");
								$insert_id_gallery=mysql_insert_id();
								$file_ext=end(explode(".", $img_gallery[$i]));
								$file_name="gallary_".$insert_id_gallery.".".$file_ext;
								$filename_th="th_".$file_name;
								$caption = $cap_gallery[$i];
								$upload_directory="../../userfiles/".$file_name;
								
									$number_of_uploaded_files++;
									$uploaded_files[] = $img_gallery[$i];
									if (move_uploaded_file($img_gallery_tmp[$i], $upload_directory ))
									{
										
										$gal_sql=mysql_query("UPDATE gallary_photo SET ImageBig='$file_name', Caption='$caption' WHERE Id='$insert_id_gallery'");
										$image = new SimpleImage();
										$image->load($upload_directory);
										$image->resize(180,120);
										$image->save("../../userfiles/".$filename_th);
										$gal_sql=mysql_query("UPDATE gallary_photo SET ImageThumb='$filename_th' WHERE Id='$insert_id_gallery'");
										header("location:index.php");
									}
									header("location:index.php");
								}
								header("location:index.php");
						}
					////////END OF UPLOADING IMAGE FOR GALLERY/////////////////////////////	
						
						header("location:index.php");
					//}
				}else{
					$msg = "<b style=\"color:red\"><i>$title</i> title already exist. Please try another.</b>";
					$errorBdr = "style='border-color:red'";
				}
			}else{
				$msg = "<b style=\"color:red\"> Please enter Title</b>";
				$errorBdr = "style='border-color:red'";
			}
		}
	}// ------------------  insertData end-----------------
	
	// ------------------  start updateData -----------------
	function updateData ($table,$value,$id,$image_tmp=NULL,$image=NULL,$image_2_tmp=NULL,$image_2=NULL,$img_gallery=NULL,$img_gallery_tmp=NULL,$cap_gallery=NULL,$thumb_image_2=NULL,$thumb_image_index=NULL,$map=NULL,$img_pdf_tmp=NULL,$img_pdf=NULL,$details=NULL){
		if(isset($_POST['btnUpdate'])){	
			$set=array();
			foreach($value AS $column => $data ){
				$set[]= $column."='".$data."'";
			}
			$update_sql = "UPDATE $table SET ".implode(",",$set)." WHERE Id=$id";
			print $update_sql;
			$update_result = mysql_query($update_sql);
			if($update_result){
				if($image_tmp!=""){
							print $image."hello world";
							$file_ext=substr($image, -4, 4);
							$file_name=$table."_".$id.$file_ext;
							$file_name_th="th_".$file_name;
							$file_thumb_name_th="th_banner_".$file_name;
							$file_thumb_index="th_index_".$file_name;
							$file_dir_name="../../userfiles/$file_name";
							$uploads=move_uploaded_file($image_tmp, $file_dir_name);
							if($uploads){
								$updates=mysql_query("UPDATE $table SET Image='$file_name' WHERE Id=$id");
								$image = new SimpleImage();
								$image->load($file_dir_name);
								$image->resize(150,150);
								$image->save("../../userfiles/$file_name_th");
								$updates=mysql_query("UPDATE $table SET ImageThumb='$file_name_th' WHERE Id=$id");
								print "UPDATE $table SET ImageThumb='$file_name_th' WHERE Id=$id this is thumb image";
								$image = new SimpleImage();
								$image->load($file_dir_name);
								$image->resize(300,200);
								$image->save("../../userfiles/$file_thumb_index");
								$updates=mysql_query("UPDATE $table SET $thumb_image_index='$file_thumb_index' WHERE Id=$id");
								print "UPDATE $table SET $thumb_image_index='$file_thumb_index' WHERE Id=$id    this is index image";
								$image = new SimpleImage();
								$image->load($file_dir_name);
								$image->resize(200,100);
								$image->save("../../userfiles/$file_thumb_name_th");
								$updates=mysql_query("UPDATE $table SET $thumb_image_2='$file_thumb_name_th' WHERE Id=$id");
								header("location:index.php");
					}
				}
				
						if($image_2_tmp !="")
						{
							print "this is image 2";
							$file_ext=substr($image_2, -4, 4);
							$file_2_name=$table."_2_".$id.$file_ext;
							$map_thumb="th_map_".$file_2_name;
							$file_dir_name_2="../../userfiles/$file_2_name";
							$uploads=move_uploaded_file($image_2_tmp, $file_dir_name_2);
							if($uploads){
								$updates=mysql_query("UPDATE $table SET $map='$file_2_name' WHERE Id=$id");
								$image = new SimpleImage();
								$image->load($file_dir_name_2);
								$image->resize(262,210);
								$image->save("../../userfiles/$map_thumb");
								$updates=mysql_query("UPDATE $table SET $map_thumb='$map_thumb' WHERE Id=$id");
								header("location:index.php");
							}
						}
						
						if($img_pdf_tmp !="")
						{
							//print "this is pdf part";
							$file_ext=substr($img_pdf, -4, 4);
							$file_pdf_name=$table."_pdf_".$id.$file_ext;
							$file_dir_name_pdf="../../userfiles/$file_pdf_name";
							$uploads=move_uploaded_file($img_pdf_tmp, $file_dir_name_pdf);
							if($uploads){
								$updates=mysql_query("UPDATE $table SET $details='$file_pdf_name' WHERE Id=$id");
								header("location:index.php");
							}
						}
						
						/////////////////// START OF UPLOADING IMAGE FOR GALLERY///////////////////////////////////////////
						for ($i = 0; $i < count($img_gallery); $i++) {
							if ($img_gallery[$i] != '')
							{ //check if file field empty or not
								$sql = mysql_query("INSERT INTO gallary_photo (TripId) VALUES ('$id')");
								$insert_id_gallery=mysql_insert_id();
								$file_ext=end(explode(".", $img_gallery[$i]));
								$file_name="gallary_".$insert_id_gallery.".".$file_ext;
								$filename_th="th_".$file_name;
								$caption = $cap_gallery[$i];
								$upload_directory="../../userfiles/".$file_name;
								
									$number_of_uploaded_files++;
									$uploaded_files[] = $img_gallery[$i];
									if (move_uploaded_file($img_gallery_tmp[$i], $upload_directory ))
									{
										
										$gal_sql=mysql_query("UPDATE gallary_photo SET ImageBig='$file_name', Caption='$caption' WHERE Id='$insert_id_gallery'");
										$image = new SimpleImage();
										$image->load($upload_directory);
										$image->resize(180,120);
										$image->save("../../userfiles/".$filename_th);
										$gal_sql=mysql_query("UPDATE gallary_photo SET ImageThumb='$filename_th' WHERE Id='$insert_id_gallery'");
										header("location:index.php");
									}
									header("location:index.php");
								}
								header("location:index.php");
						}
					////////END OF UPLOADING IMAGE FOR GALLERY/////////////////////////////	
					
				header("location:index.php");
			}
			header("location:index.php");
		}
	}// ------------------  updatetData -----------------
	
	function DataEdit($table,$id)
	{
		global $row_data, $label;
		$label="Update";
		$sql_data=mysql_query("SELECT * FROM $table WHERE Id=$id");
		$row_data=mysql_fetch_array($sql_data);
	
	}
	
	function deleteData($table,$check,$numrows,$filter=NULL){
		global $msg;
		if(isset($_POST['btnDelete'])){
			for($i=0;$i<=$numrows;$i++){
				if(!empty($check[$i])){			
					$sql=mysql_query("SELECT * FROM $table WHERE Id=".$check[$i]."");
					$del_row=mysql_fetch_array($sql);
					$res=$del_row['CanDelete'];
					print $res;
					if($res=='T'){
						$img_big=$del_row['Image'];
						$img_thmb=$del_row['ImageThumb'];
						unlink("../../userfiles/$img_big");
						unlink("../../userfiles/$img_thmb");
						$sql_site=mysql_query("DELETE FROM $table WHERE Id=".$check[$i]."");
						header("location:index.php");
					}else
					{
						$msg="<span class='styleError'>Master Content cannot be deleted. Please click [Edit] link to change contents.</span>";
						header("location:index.php");
					}
				}
			}
		}
	}
	
	function editData($table,$check,$NumRows){
		global $row_data, $label;
		if(isset($_POST['btnEdit'])){
			$label="Update";
			for($i=0;$i<=$NumRows;$i++){
				if(!empty($check[$i])){
					$id=$check[$i];
					$sql_data=mysql_query("SELECT * FROM $table WHERE Id=$id");
					$row_data=mysql_fetch_array($sql_data);
				}
			}
		}
	}
	
}

function get_title($table,$id,$field)
{
	$sql=mysql_query("SELECT $field FROM $table WHERE Id='$id'");
	$glob_row=mysql_fetch_array($sql);
	return $glob_row["$field"];
}

function get_tour($table,$id,$field)
{
	$seql=mysql_query("SELECT $field FROM $table WHERE Id='$id'");
	$tour_row=mysql_fetch_array($seql);
	return $tour_row["$field"];
}
?>