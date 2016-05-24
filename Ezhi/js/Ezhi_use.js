function pop_up(){
	var divseach=document.createElement('div'); 
	divseach.setAttribute('class', 'divseach');
	divseach.setAttribute('id', 'divseach');	
	document.body.appendChild(divseach);
	var divseach_sty=document.getElementById('divseach');
divseach_sty.style.height=window.screen.height+'px';
divseach_sty.style.width=window.screen.width+'px';
 var count=0
document.body.style.overflow='hidden';
	var html="<div class='pop_up' id='pop_up'>";
	html+="<div class='pop_up_exis' >"
	html+="<p  onclick='remove_pop()' >x</p></div>";
	html+="<form method='get' id='searchform' action='http://localhost/'>"
	html+="<div class='pop_up_seach'>";
	html+="<input type='text' id='s' name='s'>";
	html+="<div class='output'>";
	html+="<div class='output_accord'id='output_accord'></div>";
	html+="<div class='sure_button'><input type='submit' id='searchsubmit' class='button submit'onclick='seach()' value='搜索'></div>";
	html+="</div></div></form></div>";
document.getElementById('divseach').innerHTML=html;
var pop_up_animation=document.getElementById('pop_up');
pop_up_animation.style.opacity=0;
pop_up_count=30;

var animation=setInterval(function(){
	count+=0.2;
	pop_up_count+=5;
	if(count<=1){
  pop_up_animation.style.opacity=count;
  pop_up_animation.style.top=pop_up_count+'px';
}
  else{
  	clearInterval(animation);
  	count=0;
  }
}, 100)
}
function remove_pop(){
	document.body.style.overflow='scroll';
	var remove_node=document.getElementById('divseach');
	document.body.removeChild(remove_node);
}

$(function(){
 $(window).bind('resize load', function(){  
 	
   slider_w=document.body.clientWidth;
   if(slider_w<=720){
   	var menu_size=$('.menu-home-container ul li').size();
	$('.menu_nav').click(function(){	
    if($('.menu_980').height()<=10&&$('.menu_980').css('display')=='none'){
    $('.menu_980').css({
	  display:'block'
		});
	$('.menu_980').animate({
	   height: menu_size*50,
		},
		300);}
   if($('.menu_980').height()==menu_size*50&&$('.menu_980').css('display')=='block'){
   $('.menu_980').animate({
	height: '0px',
    },
	300, function() {
			$('.menu_980').css({
			display:'none'
		});
	/* stuff to do after animation is complete */
       });

     }//菜单下拉效果

   });

}})
/*$('.seach').click(function() {

	$('<div>').appendTo('body').addClass('header_shade');
	
    $('.header_shade').height($(window).height());
    $('.header_shade').width($(window).width());
    $('html').css({
	overflow: 'hidden'	
});
    $('<div>').appendTo('.header_shade').addClass('quit');
    $('<div>').appendTo('.header_shade').addClass('seach_case');
});*/









	
/*if($('.main_content').children().is('.page_right'))
{  if($('.page_right').height()>$('.content_right_show').height())
$('.main_content').height($('.page_right').height());
else
	$('.main_content').height($('.content_right_show').height());
}
if($('.main_content').children().is('.content_left_show'))
{
	if($('.content_left_show').height()>$('.content_right_show').height())
$('.main_content').height($('.content_left_show').height());
else
$('.main_content').height($('.content_right_show').height());
}
if($('.main_content').children().is('.add_show_all'))
{
	if($('.add_show_all').height()+50>$('.content_right_show').height())
$('.main_content').height($('.add_show_all').height()+50);	
else
$('.main_content').height($('.content_right_show').height()+50);
}

*/
})