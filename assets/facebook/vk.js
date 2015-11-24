// $(document).ready(function(){
// 	$('#barras2').hide();
// 	$('[data-toggle=tab][href=#barras1]').on('click',function(){
// 		setTimeout(function(){
// 			drawChart();
// 		},550)
// 		$('#barras1').show(500);
// 		$('#barras2').hide(250);
// 		$('#barras2').html('<center><div id="chart_div2" style="width: 100%; height: 600px;"></div> <!--Segundo mapa--></center>  ');
// 	});
// 	$('[data-toggle=tab][href=#barras2]').on('click',function(){
// 		setTimeout(function(){
// 			drawChart2();
// 		},550)
// 		$('#chart_div2').width('100%');
// 		$('#barras2').show(500);
// 		$('#barras1').hide(250);
// 		$('#barras1').html('<center><div id="chart_div" style="width: 100%; height: 600px;"></div> <!--Segundo mapa--></center>  ');
// 	});
// });

$(document).ready(function(){
	//Dipurtados federales y locales
	$('[data-toggle=tab][href=#barras1]').on('click',function(){
		setTimeout(function(){
			drawChart();
		},500)
		$('#chart_div').width('100%');
	});
	$('[data-toggle=tab][href=#barras2]').on('click',function(){
		setTimeout(function(){
			drawChart2();
		},500)
		$('#chart_div2').width('100%');	
	});
	$('[data-toggle=tab][href=#barras3]').on('click',function(){
		setTimeout(function(){
			drawChart3();
		},500)
		$('#chart_div3').width('100%');	
	});
	$('[data-toggle=tab][href=#barras4]').on('click',function(){
		setTimeout(function(){
			drawChart4();
		},500)
		$('#chart_div4').width('100%');	
	});
	$('[data-toggle=tab][href=#barras5]').on('click',function(){
		setTimeout(function(){
			drawChart5();
		},500)
		$('#chart_div5').width('100%');	
	});
	$('[data-toggle=tab][href=#barras6]').on('click',function(){
		setTimeout(function(){
			drawChart6();
		},500)
		$('#chart_div6').width('100%');	
	});
	$('[data-toggle=tab][href=#barras7]').on('click',function(){
		setTimeout(function(){
			drawChart7();
		},500)
		$('#chart_div7').width('100%');	
	});
	$('[data-toggle=tab][href=#barras8]').on('click',function(){
		setTimeout(function(){
			drawChart8();
		},500)
		$('#chart_div8').width('100%');	
	});
	$('[data-toggle=tab][href=#barras9]').on('click',function(){
		setTimeout(function(){
			drawChart9();
		},500)
		$('#chart_div9').width('100%');	
	});
	$('[data-toggle=tab][href=#barras10]').on('click',function(){
		setTimeout(function(){
			drawChart10();
		},500)
		$('#chart_div10').width('100%');	
	});
	$('[data-toggle=tab][href=#barras11]').on('click',function(){
		setTimeout(function(){
			drawChart11();
		},500)
		$('#chart_div11').width('100%');	
	});
	$('[data-toggle=tab][href=#barras12]').on('click',function(){
		setTimeout(function(){
			drawChart12();
		},500)
		$('#chart_div12').width('100%');	
	});
	$('[data-toggle=tab][href=#barras13]').on('click',function(){
		setTimeout(function(){
			drawChart13();
		},500)
		$('#chart_div13').width('100%');	
	});
	$('[data-toggle=tab][href=#barras14]').on('click',function(){
		setTimeout(function(){
			drawChart14();
		},500)
		$('#chart_div14').width('100%');	
	});
	$('[data-toggle=tab][href=#barras15]').on('click',function(){
		setTimeout(function(){
			drawChart15();
		},500)
		$('#chart_div15').width('100%');	
	});
	$('[data-toggle=tab][href=#barras16]').on('click',function(){
		setTimeout(function(){
			drawChart16();
		},500)
		$('#chart_div16').width('100%');	
	});
	$('[data-toggle=tab][href=#barras1]').on('click',function(){
		setTimeout(function(){
			drawVisualization();
		},500)
		$('#chart_div').width('100%');	
	});
	$('[data-toggle=tab][href=#barras2]').on('click',function(){
		setTimeout(function(){
			drawVisualization2();
		},500)
		$('#chart_div2').width('100%');	
	});	
	$('[data-toggle=tab][href=#barras3]').on('click',function(){
		setTimeout(function(){
			drawVisualization3();
		},500)
		$('#chart_div3').width('100%');	
	});		
	$('[data-toggle=tab][href=#barras4]').on('click',function(){
		setTimeout(function(){
			drawVisualization4();
		},500)
		$('#chart_div4').width('100%');	
	});	
	$('[data-toggle=tab][href=#barras5]').on('click',function(){
		setTimeout(function(){
			drawVisualization5();
		},500)
		$('#chart_div5').width('100%');	
	});		
	$('[data-toggle=tab][href=#barras6]').on('click',function(){
		setTimeout(function(){
			drawVisualization6();
		},500)
		$('#chart_div6').width('100%');	
	});		
	$('[data-toggle=tab][href=#barras7]').on('click',function(){
		setTimeout(function(){
			drawVisualization7();
		},500)
		$('#chart_div7').width('100%');	
	});			
	$('[data-toggle=tab][href=#barras8]').on('click',function(){
		setTimeout(function(){
			drawVisualization8();
		},500)
		$('#chart_div8').width('100%');	
	});
	$('[data-toggle=tab][href=#barras9]').on('click',function(){
		setTimeout(function(){
			drawVisualization9();
		},500)
		$('#chart_div9').width('100%');	
	});					
	$('[data-toggle=tab][href=#barras10]').on('click',function(){
		setTimeout(function(){
			drawVisualization10();
		},500)
		$('#chart_div10').width('100%');	
	});					
});