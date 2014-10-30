<header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php $sql_slide=  mysql_query("SELECT * FROM slideshow");
            $total_num=  mysql_num_rows($sql_slide);
            $i=0;
            while($i< $total_num){ //print $i;?>
            <li data-target="#myCarousel" data-slide-to="<?php print $i;?>" class="<?php if($i==0){?>active<?php }?>"></li>
            <?php $i++; }?>
            </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            
            <?php $slideshow_sql=mysql_query("SELECT * FROM slideshow");
            $tot_num=  mysql_num_rows($slideshow_sql);
            $j=0;
					while($show_row=mysql_fetch_array($slideshow_sql) and $j < $tot_num){?>
            <div class="item <?php if($j==0){?>active<?php }?>">
                <div class="fill" style="background-image:url('<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/userfiles/'.$show_row['Image']); ?>');"></div>
                <div class="carousel-caption">
                    <h2><?php print $show_row['Title'];?></h2>
                </div>
            </div>
            <?php $j++; }?>
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>




