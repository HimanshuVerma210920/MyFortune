<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIP</title>
	<style>
		.content{
			padding-top: 3%;
		}
		.h2{
			color: teal;
		}
	</style>
</head>
<body>
	<div class="content">
		<h2 class="h2">SIP Calculator – Systematic Investment Plan Calculator</h2>
	</div>  
</body>
</html>
<?php  
    $p  = $_POST['month'];
    $i = $_POST['return'];
    $n = $_POST['time'];
	$n = $n*12;
    $r = ($i/100)*(1/12);
	$p1 = (1+$r)**$n;
	$p1 = $p1-1;
	$p2 = $p* $p1;
	$m = ((1+$r)/$r)*$p2;
	echo "<h2>Your Total Returns  :",floor($m),"</h2>";
	
	$ratio1 = ceil((($p*$n)/$m)*100);
	$ratio2 = floor((($m-($p*$n))/$m)*100);
?>	
	
	
	
		<!doctype html>
		<html> 
		<head>
		 
		<title> About</title> 
		<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"> 

		 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		 
		   <style>
			
			 
		 
		.b-skills
		{
			border-top: 1px solid #f9f9f9;
			padding-top: 46px;
			text-align: center;
		}

		.b-skills:last-child { margin-bottom: -30px; }

		.b-skills h2 { margin-bottom: 50px; font-weight: 900; text-transform: uppercase;}

		.skill-item
		{
			position: relative;
			max-width: 250px;
			width: 100%;
			margin-bottom: 30px;
			color: #555;
		}

		.chart-container
		{
			position: relative;
			width: 100%;
			height: 0;
			padding-top: 100%;
			margin-bottom: 27px;
		}

		.skill-item .chart,
		.skill-item .chart canvas
		{
			position: absolute;
			top: 0;
			left: 0;
			width: 100% !important;
			height: 100% !important;
		}

		.skill-item .chart:before
		{
			content: "";
			width: 0;
			height: 100%;
		}

		.skill-item .chart:before,
		.skill-item .percent
		{
			display: inline-block;
			vertical-align: middle;
		}

		.skill-item .percent
		{
			position: relative;
			line-height: 1;
			font-size: 40px;
			font-weight: 900;
			z-index: 2;
		}

		.section{
			padding-left: 28%;
		}

		.skill-item  .percent:after
		{
			content: attr(data-after);
			font-size: 20px;
		}
			   
			   p{
				   font-weight: 900;
			   }
		 
			
			</style>
		 
		  
		  
		 
		</head>

		<body>	 
				<section id="s-team" class="section">
					 
					<br><br><br>

					<div class="b-skills">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="skill-item center-block">
										<div class="chart-container">
											
											
											<div class="chart " data-percent="<?php echo $ratio1 ?>" data-bar-color="#23afe3">
												<span class="percent" data-after="%"><?php echo $ratio1 ?></span>
											</div>
											
										</div>

										<p>Investment : <?php $h = $p*($n); echo ceil($h) ?></p>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="skill-item center-block">
										<div class="chart-container">
											<div class="chart " data-percent="<?php echo $ratio2 ?>" data-bar-color="#a7d212">
												<span class="percent" data-after="%"><?php echo $ratio2 ?></span>
											</div>
										</div>

										<p>Returns : <?php echo ceil($m-$h)  ?></p>
									</div>
								</div>

								

							
							</div>
						</div>
					</div>
				</section>
				<br><br><br><br><br>
			
		 
		 
		  <br><br><br><br>  
		  
		  
		  
		 <script src="plugins/jquery-2.2.4.min.js"></script>
		 <script src="plugins/jquery.appear.min.js"></script>
		 <script src="plugins/jquery.easypiechart.min.js"></script> 
		 <script>
			'use strict';

		var $window = $(window);

		function run()
		{
			var fName = arguments[0],
				aArgs = Array.prototype.slice.call(arguments, 1);
			try {
				fName.apply(window, aArgs);
			} catch(err) {
				 
			}
		};
		 
		/* chart
		================================================== */
		function _chart ()
		{
			$('.b-skills').appear(function() {
				setTimeout(function() {
					$('.chart').easyPieChart({
						easing: 'easeOutElastic',
						delay: 3000,
						barColor: '#369670',
						trackColor: '#fff',
						scaleColor: false,
						lineWidth: 21,
						trackWidth: 21,
						size: 250,
						lineCap: 'round',
						onStep: function(from, to, percent) {
							this.el.children[0].innerHTML = Math.round(percent);
						}
					});
				}, 150);
			});
		};
		 

		$(document).ready(function() {
		  
			run(_chart);
		  
			
		});


			
			</script>
		 
		   
		</body>
		 
		</html>