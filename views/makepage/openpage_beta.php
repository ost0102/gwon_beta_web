<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="width=device-width,minimum-scale=1,maximum-scale=1" name="viewport">
<meta name="title" content="<? echo $title; ?>" />
<meta name="description" content="<?echo $summary;?>" />
<?php
    $l_special_characters_preg = "/[#\&\+\-%@=\/\\\:;,'\"\^`~\!\?\*$#<>()\[\]\{\}]/i";
    $l_meta_keywords = "easymenu";
    if ($title != '') $l_meta_keywords = $l_meta_keywords.",".str_replace(" ", ",", preg_replace($l_special_characters_preg, '', preg_replace('/\s+/', ' ', trim($title))));
    if ($div1_name != '') $l_meta_keywords = $l_meta_keywords.",".str_replace(" ", ",", preg_replace($l_special_characters_preg, '', preg_replace('/\s+/', ' ', trim($div1_name))));
    if ($div2_name != '') $l_meta_keywords = $l_meta_keywords.",".str_replace(" ", ",", preg_replace($l_special_characters_preg, '', preg_replace('/\s+/', ' ', trim($div2_name))));
    if ($div3_name != '') $l_meta_keywords = $l_meta_keywords.",".str_replace(" ", ",", preg_replace($l_special_characters_preg, '', preg_replace('/\s+/', ' ', trim($div3_name))));
    if ($div4_name != '') $l_meta_keywords = $l_meta_keywords.",".str_replace(" ", ",", preg_replace($l_special_characters_preg, '', preg_replace('/\s+/', ' ', trim($div4_name))));
    if ($div5_name != '') $l_meta_keywords = $l_meta_keywords.",".str_replace(" ", ",", preg_replace($l_special_characters_preg, '', preg_replace('/\s+/', ' ', trim($div5_name))));
    if ($div6_name != '') $l_meta_keywords = $l_meta_keywords.",".str_replace(" ", ",", preg_replace($l_special_characters_preg, '', preg_replace('/\s+/', ' ', trim($div6_name))));
    if ($div7_name != '') $l_meta_keywords = $l_meta_keywords.",".str_replace(" ", ",", preg_replace($l_special_characters_preg, '', preg_replace('/\s+/', ' ', trim($div7_name))));
    if ($div8_name != '') $l_meta_keywords = $l_meta_keywords.",".str_replace(" ", ",", preg_replace($l_special_characters_preg, '', preg_replace('/\s+/', ' ', trim($div8_name))));
    if ($div9_name != '') $l_meta_keywords = $l_meta_keywords.",".str_replace(" ", ",", preg_replace($l_special_characters_preg, '', preg_replace('/\s+/', ' ', trim($div9_name))));
    if ($div10_name != '') $l_meta_keywords = $l_meta_keywords.",".str_replace(" ", ",", preg_replace($l_special_characters_preg, '', preg_replace('/\s+/', ' ', trim($div10_name))));
?>
<meta name="keywords" content="<? echo $l_meta_keywords; ?>" />
<meta property="og:url" content="<? echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] ?>" />
<meta property="og:title" content="<?echo $title;?> :: easymenu.kr" />
<meta property="og:description" content="<?echo $summary;?>" />
<meta property="og:image" content="<? echo 'http://'.$_SERVER['SERVER_NAME'].$project_img; ?>" />
<title><?echo $title;?> :: easymenu.kr</title>
<script type="text/javascript" src="/js/html5.js"></script>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/selectivizr.js"></script>
<!--favicon-->
<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
<link href="/css/style.css" rel="stylesheet" type="text/css"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="/js/selectivizr.js"></script>
<![endif]-->
<!--user code file-->
<!???[if lte IE 8]>
<link href="/<?echo $css;?>" type="text/css" rel="stylesheet"/>
<!???[if lte IE 8]>
<link href="/<?echo $css;?>" type="text/css" rel="stylesheet" media="screen and (min-width:600px)"/>

<link href="/<?echo $css_m;?>" type="text/css" rel="stylesheet" media="screen and (max-width:599px)"/>

<!--modal??? ?????? -->
<script type="text/javascript" src="/js/jquery.simplemodal.js"></script>
<script type="text/javascript">
	//jQuery ?????? ??????
	window.onload=function(){
		//scroll ????????? ????????????
	};
	//????????? ????????? ?????? ???????????? ????????????
	$(window).scroll(function(){ 
		var scr_now = $(document).scrollTop();
		//menu_left ??????????????? ?????? html type1, 2 ?????? > type2????????? ??????????????? type1????????? ??????????????? ????????????.
		var check_menu_left = $("div").hasClass("menu_left");
		//?????? ?????????
		//alert(scr_now);

		if(scr_now >150){
			$('#top_con').show();
			$('#menu_area').css('position','fixed');
			$('#menu_area').css('top','0px');
			$('#menu_area').css('width','100%');
			$('#menu_area').css('z-index','100');	

			//$('#top_logo').css('display','hidden');
			//s_div.style.visibility = "hidden";
		}else{
			$('#top_con').show();
			$('#menu_area').css('position','static');
		}
	});
	$(document).ready(function() {
		check_teammate();
		check_team();
		//project_information
		$("#post_txt_info").click(function(){
		  var w_num = $('#w_num').val();
		  var input_txt1 = $('#input_txt1').val();
		  var input_txt2 = $('#input_txt2').val();
		  var input_txt3 = $('#input_txt3').val();
		 
		   
		   $.post("/makepage/input_con_txt",{
			w_num: w_num,
			input_txt1: input_txt1,
			input_txt2: input_txt2,
			input_txt3: input_txt3
			},
		   function(data){
			 //alert(data);
			 //????????? ???????????????
			 open_modal(data);
			 $('#val_url').val('');
			 $('#val_url_txt').val('');
			 if(data =="????????? ?????????????????????."){
				//alert('???????????? ????????? ??????????????? ???????????????.');
				//location.replace('/makepage/add_con_txt/<?echo $w_num;?>');
			 }
		   }); 
		});

		$("#goto_other").click(function(){
			alert('?????? ?????? ?????????????????? ???????????????.');
			location.replace('/makepage/add_other/<?echo $w_num;?>');
		});


		//modal ??????
		 $("#m_close").click(function(){
		  $.modal.close();
		  $modal_state ='off';
		 });
		 $modal_state ='off';

		 /*$("body").click(function(){
			check_modal();
		 });*/

	});
	
	
	//modal??? ??????
	function open_modal(state_value){
		var state = state_value;
		if($modal_state == 'off'){
			$('#modal_txt').text(state);
			$("#modal_content").modal();
			$modal_state = 'on';
		}
	}
	function modal_off(){
		if($modal_state == 'on'){
			$.modal.close();
			$modal_state = 'off';
		}
	}
	function check_modal(){
		var modal_overlay = $('#simplemodal-overlay').css('visibility');
		//overlay??? visible ????????????..
		 if(modal_overlay == 'visible'){
			 //alert('test');
			 
			//overlay?????? ????????? ??????????????? ???????????? ??????, ??????????????? off??? ?????????.
			 $.modal.close();
			 $modal_state ='off';
		}
	}
	//?????? ??????
	function scr_bt(val){
		//???????????? div????????? ????????? ?????????
		var menu_h = $('#menu_area').height();
		var menu_show_state = $('#menu_area').css('display');
		//alert(menu_h);
		if(menu_show_state == 'none'){
			//????????? ????????? ????????????..?????? ????????? ?????? ??????
			var num_w = -30;
		}else{
			var num_w = menu_h;
		}

		if('<?echo $div1_name;?>' != ''){
			var div1 = $('#con_con1').offset().top+num_w;
		}
		if('<?echo $div2_name;?>' != ''){
			var div2 = $('#con_con2').offset().top+num_w;
		}
		if('<?echo $div3_name;?>' != ''){
			var div3 = $('#con_con3').offset().top+num_w;
		}
		if('<?echo $div4_name;?>' != ''){
			var div4 = $('#con_con4').offset().top+num_w;
		}
		if('<?echo $div5_name;?>' != ''){
			var div5 = $('#con_con5').offset().top+num_w;
		}
		if('<?echo $div6_name;?>' != ''){
			var div6 = $('#con_con6').offset().top+num_w;
		}
		if('<?echo $div7_name;?>' != ''){
			var div7 = $('#con_con7').offset().top+num_w;
		}
		if('<?echo $div8_name;?>' != ''){
			var div8 = $('#con_con8').offset().top+num_w;
		}
		if('<?echo $div9_name;?>' != ''){
			var div9 = $('#con_con9').offset().top+num_w;
		}
		if('<?echo $div10_name;?>' != ''){
			var div10 = $('#con_con10').offset().top+num_w;
		}
		var div11 = $('#other_info').offset().top+num_w;
		if(val == 'menu1'){
			$('html, body').animate( {scrollTop:div1} );
		}else if(val == 'menu2'){
			$('html, body').animate( {scrollTop:div2} );
		}else if(val == 'menu3'){
			$('html, body').animate( {scrollTop:div3} );
		}else if(val == 'menu4'){
			$('html, body').animate( {scrollTop:div4} );
		}else if(val == 'menu5'){
			$('html, body').animate( {scrollTop:div5} );
		}else if(val == 'menu6'){
			$('html, body').animate( {scrollTop:div6} );
		}else if(val == 'menu7'){
			$('html, body').animate( {scrollTop:div7} );
		}else if(val == 'menu8'){
			$('html, body').animate( {scrollTop:div8} );
		}else if(val == 'menu9'){
			$('html, body').animate( {scrollTop:div9} );
		}else if(val == 'menu10'){
			$('html, body').animate( {scrollTop:div10} );
		}else if(val == 'menu11'){
			$('html, body').animate( {scrollTop:div11} );
		}else{
			$('html, body').animate( {scrollTop:'0'} );
		}
	}

	function popup_code(){
		window.open("/makepage/edit_code/","Edit code",'width=500,height=430,left=0,top=0,scrollbars=no');
	}
	//???????????? ?????????
	function check_teammate(){
		//alert(at_val);
		var w_num = '<?echo $p_num;?>';
		$.get("/team/check_teammate/"+w_num+"_open",function(data,status){
			//alert("Data: " + data + "\nStatus: " + status);
			$('#team_mate_state').html(data);
			$('#team_mate_state').css('size','12px');
			$('#team_mate_state').css('line-height','15px');
	   });
	}
	//????????? ?????????
	function check_team(){
		var w_num = '<?echo $p_num;?>';
		$.get("/team/check_team/"+w_num,function(data,status){
			//alert("Data: " + data + "\nStatus: " + status);
			$('#team_state').html(data);
	   });
	}

	//browser resize
	$(window).resize(function(){ 
		//??????????????? ?????? ????????? ??????
		var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
		for (var word in mobileKeyWords){
			if (navigator.userAgent.match(mobileKeyWords[word]) != null){
				//document.location.href = '/upload/up1';
				//$('<meta name="viewport" content="width=320;"/>').appendTo('head');
				$('<meta name="viewport" content="width=divece-width, intial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>').appendTo('head');
				break;
				//<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
			}
		}
	});

</script>
<!--user code file-->
<script type="text/javascript" src="/<?echo $javascript;?>"></script>
<script type="text/javascript" src="/<?echo $javascript_m;?>"></script>
<!--??? ?????? ????????? ?????? ????????? ?????? ????????? ?????? ?????? ??????-->
<script src="/js/webfont.js"></script>
<script>
 WebFont.load({
  custom: {
   families: ['Nanum Gothic'],
   urls: ['/css/font.css']
  }
 });
  WebFont.load({
  custom: {
   families: ['Nanum Myeongjo'],
   urls: ['/css/font.css']
  }
 });
</script>
<!--??? ?????? ????????? ?????? ????????? ?????? ????????? ?????? ?????? ???-->
<!--google????????? ??????-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-45987664-1', 'intropage.net');
	  ga('send', 'pageview');

	</script>
<!-- google????????? ???-->
</head>
<body>
<div id='right_top_shape'>
	<a href="http://<?=$this->config->item('intro_url');?>/"><img src="/img/right_top_shape_<?echo $cate_id;?>.png" class='logo_shape'></a>
</div>
<div id='bg_area' title='<? echo $project_img; ?>'>
</div>
<div id=container>
	<!-- top Area Start -->
	<div id=top_area>
		<div id=top_con>
			<?if($logo!='')echo '<img src="'.$logo.'" id="logo_img">';?>
			<h1><?echo $title;?></h1>
			<?echo $summary;?>
		</div>
	</div>
	<div id=menu_area>
		<div id=menu_txt>
			<?if($div1_name!='')echo '<a onclick="scr_bt(\'menu1\')">'.$div1_name.'</a>&nbsp;';?>
			<?if($div2_name!='')echo  '<a onclick="scr_bt(\'menu2\')">'.$div2_name.'</a>&nbsp;';?>
			<?if($div3_name!='')echo  '<a onclick="scr_bt(\'menu3\')">'.$div3_name.'</a>&nbsp;';?>
			<?if($div4_name!='')echo  '<a onclick="scr_bt(\'menu4\')">'.$div4_name.'</a>&nbsp;';?>
			<?if($div5_name!='')echo  '<a onclick="scr_bt(\'menu5\')">'.$div5_name.'</a>&nbsp;';?>
			<?if($div6_name!='')echo  '<a onclick="scr_bt(\'menu6\')">'.$div6_name.'</a>&nbsp;';?>
			<?if($div7_name!='')echo  '<a onclick="scr_bt(\'menu7\')">'.$div7_name.'</a>&nbsp;';?>
			<?if($div8_name!='')echo  '<a onclick="scr_bt(\'menu8\')">'.$div8_name.'</a>&nbsp;';?>
			<?if($div9_name!='')echo  '<a onclick="scr_bt(\'menu9\')">'.$div9_name.'</a>&nbsp;';?>
			<?if($div10_name!='')echo  '<a onclick="scr_bt(\'menu10\')">'.$div10_name.'</a>&nbsp;';?>
			<a onclick="scr_bt('menu11')">????????????</a>
		</div>
	</div>
	<!-- top Area finish -->
	<!-- Contents Area Start -->
	<?$this->load->view('/include/con_area_beta');?>
	<!-- Contents Area finish -->
	<!-- Bottom-->
	<div id='bottom'>
		<div id='bt_txt'>
			<a href="http://<?=$this->config->item('intro_url');?>/">easymenu.kr</a> ?? &nbsp;2017<br/>
			<span style="font-size: 10px;">Updated : <? echo $edit_time; ?></span>
		</div>
	</div>
	<!-- Bottom ??? -->
	<!-- Other Contents Area finish -->
</div>
<!--????????? ???????????? ??????-->
<div id="modal_content">
	 <div id="modal_txt">
		?????? ?????? ?????? ????????????!
	</div>
	<div id=login_close>
		<a onClick="modal_off()"><img src="/img/land/bt_close.png"></a>
	</div>
</div>
<!--????????? ???????????? ??? -->
</body>
</html>