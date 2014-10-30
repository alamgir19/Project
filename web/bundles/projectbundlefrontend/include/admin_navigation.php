<div class="topmenu">
  <div class="cssvertical">
    <ul id="cssvertical">
      <li id="home"><a href="<?php print $WebSiteUrl;?>admin/site/welcome.php">Home</a>
        <ul>
          <li><a href="<?php print $WebSiteUrl;?>admin/site/change_password.php">Change Password</a></li>
          <li><a href="<?php print $WebSiteUrl;?>admin/site/logout.php">Logout [ <?php print $_SESSION['myuser'];?> ]</a></li>
        </ul>
      </li>
      <li id="site"><a title="Site" href="<?php print $WebSiteUrl;?>admin/site/">Site</a>
        <ul>
          <?php $q_site=mysql_query("SELECT id, title, urls FROM site WHERE parent_id<>22 ORDER BY title");
			while($r_site=mysql_fetch_array($q_site)){
				if($r_site['site_url']=="") $url="index.php?action=edit&amp;id=".$r_site['id']; else $url=$r_site['url'];
				print "<li><a href=\"".$WebSiteUrl."admin/site/".$url."\">".$r_site['title']."</a></li>";
			}?>
        </ul>
      </li>
      <li id="news"><a href="<?php print $WebSiteUrl;?>admin/news/">News &amp; Blogs</a></li>
      
      <li id="slideshow"><a href="<?php print $WebSiteUrl;?>admin/slideshows/">Slideshows</a></li>
    </ul>
  </div>
</div>
