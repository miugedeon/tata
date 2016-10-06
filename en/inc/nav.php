<ul>
	<li class="menuli"><a href="index.html" target="_self" title="首页" <?php if($nav=="index") echo 'class="hover"'; ?>>首页</a></li>
    <li class="menuli">
    	<a href="about.html" target="_self" title="走进益佳" <?php if($nav=="about") echo 'class="hover"'; ?>>走进益佳</a>
    	<ul class="smenu">
        	<?php
			$sql="select * from p_type where language='cn' and p_bigtype=1";
			$query=$d->Query($sql);
			$n=1;
			while($row=mysql_fetch_array($query)){
			?>
        	<li <?php if($n==1) echo 'class="first"'; ?>><a href="about-<?php echo $row[p_id] ?>.html" target="_self" <?php if($nav=="about") echo 'class="hover"'; ?>><?php echo $row[p_title] ?></a></li>
            <?php
			$n++;
			}
			?>
        </ul>
    </li>
    <li class="menuli">
		<a href="experience.html" target="_self" title="体验馆" <?php if($nav=="experience") echo 'class="hover"'; ?>>体验馆</a>
		<ul class="smenu">
        	<?php
			$sql="select * from p_list where language='cn' and p_typelist='case'";
			$query=$d->Query($sql);
			$n=1;
			while($row=mysql_fetch_array($query)){
			?>
        	<li <?php if($n==1) echo 'class="first"'; ?>><a href="experience-<?php echo $row[p_id] ?>.html" target="_self" <?php if($nav=="about") echo 'class="hover"'; ?>><?php echo $row[p_title] ?></a></li>
            <?php
			$n++;
			}
			?>
        </ul>
	</li>
    <li class="menuli">
		<a href="product.html" target="_self" title="产品系列" <?php if($nav=="product") echo 'class="hover"'; ?>>产品系列</a>
		<ul class="smenu">
        	<?php
			$sql="select * from p_product_type where language='cn' and p_bigtype=0";
			$query=$d->Query($sql);
			$n=1;
			while($row=mysql_fetch_array($query)){
			?>
        	<li <?php if($n==1) echo 'class="first"'; ?>><a href="product-<?php echo $row[p_id] ?>.html" target="_self" <?php if($nav=="about") echo 'class="hover"'; ?>><?php echo $row[p_title] ?></a></li>
            <?php
			$n++;
			}
			?>
        </ul>
	</li>
    <li class="menuli">
		<a href="news.html" target="_self" title="新闻中心" <?php if($nav=="news") echo 'class="hover"'; ?>>新闻中心</a>
		<ul class="smenu">
        	<?php
			$sql="select * from p_list where language='cn' and p_typelist='news'";
			$query=$d->Query($sql);
			$n=1;
			while($row=mysql_fetch_array($query)){
			?>
        	<li <?php if($n==1) echo 'class="first"'; ?>><a href="news-<?php echo $row[p_id] ?>.html" target="_self" <?php if($nav=="about") echo 'class="hover"'; ?>><?php echo $row[p_title] ?></a></li>
            <?php
			$n++;
			}
			?>
        </ul>
	</li>
    <li class="menuli">
		<a href="sales.html" target="_self" title="销售中心" <?php if($nav=="sales") echo 'class="hover"'; ?>>销售中心</a>
		<ul class="smenu">
        	<?php
			$sql="select * from p_type where language='cn' and p_bigtype=6";
			$query=$d->Query($sql);
			$n=1;
			while($row=mysql_fetch_array($query)){
			?>
        	<li <?php if($n==1) echo 'class="first"'; ?>><a href="sales-<?php echo $row[p_id] ?>.html" target="_self" <?php if($nav=="about") echo 'class="hover"'; ?>><?php echo $row[p_title] ?></a></li>
            <?php
			$n++;
			}
			?>
        </ul>
	</li>
    <li class="menuli last"><a href="service.html" target="_self" title="服务中心" <?php if($nav=="service") echo 'class="hover"'; ?>>服务中心</a></li>
</ul>