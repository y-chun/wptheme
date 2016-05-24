$(function(){
$('.accordion_content').eq(0). css({
	height: '100px'	,
	display:'block'
});
$('.accordion_content').eq(1). css({
	height: '0'	,
	display:'none'
});
$('.accordion_content').eq(2). css({
	height: '0'	,
	display:'none'
});
$('.accordion_content').eq(3). css({
	height: '0'	,
	display:'none'
});
$('.accordion_content').eq(4). css({
	height: '0'	,
	display:'none'
});

$('.right_show_classify').eq(0).click(function() {
		$('.accordion_content').eq(0). css({
	display: 'block'});
	$('.accordion_content').eq(0).animate({
		height: '100px',
		},
		600
			
);
	
	

	if($('.accordion_content').eq(1).height()!=0){
		$('.accordion_content').eq(1).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(1). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(2).height()!=0){
		$('.accordion_content').eq(2).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(2). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(3).height()!=0){
		$('.accordion_content').eq(3).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(3). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(4).height()!=0){
		$('.accordion_content').eq(4).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(4). css({
	display: 'none'	
});
	});
	}
});







$('.right_show_classify').eq(1).click(function() {
		$('.accordion_content').eq(1). css({
	display: 'block'});
	$('.accordion_content').eq(1).animate({
		height: '100px',
		},
		600
			
);

	if($('.accordion_content').eq(0).height()!=0){
		$('.accordion_content').eq(0).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(0). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(2).height()!=0){
		$('.accordion_content').eq(2).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(2). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(3).height()!=0){
		$('.accordion_content').eq(3).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(3). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(4).height()!=0){
		$('.accordion_content').eq(4).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(4). css({
	display: 'none'	
});
	});
	}
});



$('.right_show_classify').eq(2).click(function() {
		$('.accordion_content').eq(2). css({
	display: 'block'});
	$('.accordion_content').eq(2).animate({
		height: '100px',
		},
		600
			
);
	

	if($('.accordion_content').eq(1).height()!=0){
		$('.accordion_content').eq(1).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(1). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(0).height()!=0){
		$('.accordion_content').eq(0).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(0). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(3).height()!=0){
		$('.accordion_content').eq(3).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(3). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(4).height()!=0){
		$('.accordion_content').eq(4).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(4). css({
	display: 'none'	
});
	});
	}
});





$('.right_show_classify').eq(3).click(function() {
		$('.accordion_content').eq(3). css({
	display: 'block'});
	$('.accordion_content').eq(3).animate({
		height: '100px',
		},
		600
			
);

	if($('.accordion_content').eq(1).height()!=0){
		$('.accordion_content').eq(1).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(1). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(2).height()!=0){
		$('.accordion_content').eq(2).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(2). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(0).height()!=0){
		$('.accordion_content').eq(0).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(0). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(4).height()!=0){
		$('.accordion_content').eq(4).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(4). css({
	display: 'none'	
});
	});
	}
});





$('.right_show_classify').eq(4).click(function() {
		$('.accordion_content').eq(4). css({
	display: 'block'});
	$('.accordion_content').eq(4).animate({
		height: '100px',
		},
		600
			
);
	

	if($('.accordion_content').eq(1).height()!=0){
		$('.accordion_content').eq(1).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(1). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(2).height()!=0){
		$('.accordion_content').eq(2).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(2). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(3).height()!=0){
		$('.accordion_content').eq(3).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(3). css({
	display: 'none'	
});
	});
	}
		if($('.accordion_content').eq(0).height()!=0){
		$('.accordion_content').eq(0).animate({
		height: '0px',
		},
		600, function() {
			$('.accordion_content').eq(0). css({
	display: 'none'	
});
	});
	}
});
})