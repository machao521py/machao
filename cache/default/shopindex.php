<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $cfg['shop_title'] ?></title>
<meta charset="utf-8">
 <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
<link href="http://localhost/machao/themes/default/__RESOURCE__/recouse/css/bjcommon.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://localhost/machao/themes/default/__RESOURCE__/recouse/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="http://localhost/machao/themes/default/__RESOURCE__/recouse/js/jquery.lazyload.js"></script>
<script type="text/javascript" src="http://localhost/machao/themes/default/__RESOURCE__/recouse/js/fbi.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".row_list img").lazyload({
		placeholder: "http://localhost/machao/themes/default/__RESOURCE__/recouse/images//img_bg4.png",
		effect: "fadeIn"
	});
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



<div id="viewport" class="viewport">
  <div class="slider card card-nomb" style="visibility: visible;">
    <script type="text/javascript" src="http://localhost/machao/themes/default/__RESOURCE__/recouse/js/TouchSlide.1.1.js"></script>
    <div id="focus" class="focus">
      <div class="hd">
        <ul>
        </ul>
      </div>
      <div class="bd">
        <ul>
       <?php if(is_array($advs)) { foreach($advs as $adv) { ?>
        <li><a href="<?php if(empty($adv['link'])) { ?><?php } else { ?><?php echo $adv['link'];?><?php } ?>">
        	<img src="<?php echo WEBSITE_ROOT;?>/attachment/<?php echo $adv['thumb'];?>" /></a></li>
		<?php } } ?>
        </ul>
      </div>
    </div>
    <script type="text/javascript">
	TouchSlide({ 
		slideCell:"#focus",
		titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell:".bd ul",
		delayTime:600,
		interTime:4000,
		effect:"leftLoop", 
		autoPlay:true,//自动播放
		autoPage:true, //自动分页
		switchLoad:"_src" //切换加载，真实图片路径为"_src" 
	});
	</script>
  </div>
  
  <div id="home-page" data-role="page" data-member-sn="ejWCX" data-member-subscribe="true">
	<div role="main" class="ui-content ">
    <div class="WX_search1" id="mallHead">
	<form class="WX_search_frm1" action="index.php" id="searchForm" name="searchForm">
				<input type="hidden" name="mod" value="mobile" />
		<input type="hidden" name="do" value="goodlist" />
		<input type="hidden" name="name" value="shopwap" />
        <input name="keyword" id="search_word" class="WX_search_txt hd_search_txt_null" placeholder="请输入商品名进行搜索！" ptag="37080.5.2" type="search"  AUTOCOMPLETE="off"/>
    <div class="WX_me">
        <a href="javascript:;" id="submit" class="WX_search_btn_blue" >搜索</a>
       
    </div>
	 </form>
</div>


  












    <div class="home-categories"  >
        <?php foreach($category as $row){ ?>
        <div class="category-container" style="background-color:#ffffff;">
		  <div class="category-name">
	          <a class="category-url" href="<?php echo mobile_url('goodlist', array('pcate' => $row['id']));?>">
	              <div class="name-border"></div>
	              <div class="name"><?php echo $row['name'];?></div>
					     <div class="name-more">
                  <i class="icons-arrow-right2"></i>
                </div>
                 <div class="text-more"> <a href="<?php echo mobile_url('goodlist', array('pcate' => $row['id']));?>" style="color:#000000" >更多</a></div>
				
	            </div>

	          	</a>
			  </div>
			  
			  
			  
			  
			  
			  
			  

    <div class="ms_list"> 
	
	 <?php foreach($row['list'] as $item){ ?>
			<div class="ms_li">     
			<a class="url" href="<?php echo mobile_url('detail', array('id' => $item['id']))?>" >         
			<div class="img"><img alt="" src="<?php echo WEBSITE_ROOT;?>/attachment/<?php echo $item['thumb']?>"></div>         
			<div class="info">
			       
			<div class="tit"><?php echo $item['title']?></div>             
			           
			<div class="cost"><span class="label"><i class="icon_phone"></i>原价:</span><span class="price">¥<?php echo $item['marketprice']?></span></div>              
			<div class="desc" >市场价:<span class="price">¥<?php echo $item['productprice']?></span></div>                                                                                          
			<div class="act">
			<div class="count"><span class="label">已售:<?php echo $item['sales']?></span></div>        
			<div class="buy"><span class="btn_buy  curClass">立即购买</span></div>             
			</div>         
			</div>     
			</a> 
			</div> 
 <?php } ?>
			</div>           

   		  <?php } ?>
 

    </div>

 </div>
</div>         
 </div>







  
  

  
  
		<div class="viewport">
			<footer style="width:100%;min-width:300px;margin-top:10px;margin-bottom:50px;padding:10px 0;color:#555;text-align:center;">
				<a style="color:#555;margin:0 3px;">&copy; <?php echo $cfg['shop_title'] ?></a></footer>
		</div>





<div class="wx_nav"><a href="<?php echo mobile_url('shopindex')?>" data-href="###" ptag="37080.1.1" class="nav_index on">首页</a><a href="<?php echo mobile_url('listCategory')?>"  ptag="37080.1.2" class="nav_search" style="display:">分类</a><a href="<?php echo mobile_url('mycart')?>"  ptag="37080.1.3" class="nav_shopcart">购物车</a><a href="<?php echo mobile_url('fansindex')?>"  ptag="37080.1.4" class="nav_me">个人中心</a></div>


<script src="http://localhost/machao/themes/default/__RESOURCE__/recouse/js/zepto.min.js" type="text/javascript"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
   $(window).on("scroll", function() {
		if($nav.hasClass('global-nav--current')){
			navHide();
		}
	});
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script>


 
</body>
</html>