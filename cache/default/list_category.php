<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>分类列表</title>
	<meta content="telephone=no" name="format-detection" />
	<link rel="apple-touch-icon-precomposed" href="http://localhost/machao/themes/default/__RESOURCE__/recouse/images/apple-touch-icon.png"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="http://localhost/machao/themes/default/__RESOURCE__/recouse/css/reset.css" rel="stylesheet" type="text/css" />
	<link href="http://localhost/machao/themes/default/__RESOURCE__/recouse/css/search_new.css" rel="stylesheet" type="text/css" />
	<link href="http://localhost/machao/themes/default/__RESOURCE__/recouse/css/bjcommon.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="http://localhost/machao/themes/default/__RESOURCE__/recouse/css/xmapp.css"/>
	<script type="text/javascript" src="http://localhost/machao/themes/default/__RESOURCE__/recouse/js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="http://localhost/machao/themes/default/__RESOURCE__/recouse/js/jquery.lazyload.js"></script>
	<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#submit").click(function() {
		if($("#search_word").val()){
			$("#searchForm").submit();
		} else {
			alert("请输入关键词！");
			return false;
		}
	});
});
</script>
</head>

<body style=" margin:0 auto;">






<div class="WX_search1" id="mallHead">
  
	<form class="WX_search_frm1" action="mobile.php" id="searchForm" name="searchForm">
					<input type="hidden" name="mod" value="mobile" />
		<input type="hidden" name="do" value="goodlist" />
		<input type="hidden" name="name" value="shopwap" />
        <input name="keyword" id="search_word" class="WX_search_txt hd_search_txt_null" placeholder="请输入商品名进行搜索！" ptag="37080.5.2" type="search"  AUTOCOMPLETE="off"/>
      
   
    <div class="WX_me">
        <a href="javascript:;" id="submit" class="WX_search_btn_blue" >搜索</a>
       
    </div>
	 </form>
</div>





		<div class="tab">
			
<div class="category">
	<ul>     	
		<?php if(is_array($category)) { foreach($category as $item) { ?>
		<li class="clearfix">
			<div class="info">
				<p class="name"><a href="<?php echo mobile_url('goodlist', array('pcate' => $item['id']))?>"><?php echo $item['name'];?></a></p>
					<div class="data">
						<?php if(is_array($children[$item['id']])) { foreach($children[$item['id']] as $child) { ?>
                    	<a href="<?php echo mobile_url('goodlist', array('ccate' => $child['id']))?>"><?php echo $child['name'];?></a>
						<?php } } ?>
                    </div>
			</div>
		</li>
		<?php } } ?>
    </ul>
</div>
		</div>
	</div>

<div class="wx_nav"><a href="<?php echo mobile_url('shopindex')?>" data-href="###" ptag="37080.1.1" class="nav_index on">首页</a><a href="<?php echo mobile_url('listCategory')?>"  ptag="37080.1.2" class="nav_search" style="display:">分类</a><a href="<?php echo mobile_url('mycart')?>"  ptag="37080.1.3" class="nav_shopcart">购物车</a><a href="<?php echo mobile_url('fansindex')?>"  ptag="37080.1.4" class="nav_me">个人中心</a></div>

<script src="http://localhost/machao/themes/default/__RESOURCE__/recouse/js/zepto.min.js" type="text/javascript"></script>


</body>
</html>