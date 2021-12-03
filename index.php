<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/home.css"/>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Calligraffitti|Open+Sans');
		
		html, body {
		  height: 100%;
		  background-color: #D0F0FF;
		  margin:0!important;
		}
		
		
		
		h1 {
		  font-family: 'Calligraffitti';
		}
		
		h3 {
		  font-family: 'Open Sans';
		}
		
		
		.LightWaves {
		  animation: lightwaves 2s infinite;
		  position: relative;
		}
		
		@keyframes lightwaves {
			0%,100% { transform: translate(0,0); }
			25%     { transform: translate(5px,5px); transform: scale(1.05); }
			50%     { transform: translate(25px, 5px); }
			75%     { transform: translate(12px,10px); transform: scale(1.05); }
		}
		
		.DarkWaves {
		  animation: darkwaves 3.8s infinite;
		}
		
		@keyframes darkwaves {
			0%,100% { transform: translate(0,0); }
			25%     { transform: translate(25px, 5px); transform: scale(1.05); }
			50%     { transform: translate(12px,10px); }
			75%     { transform: translate(5px,5px); }
		}
		
		.WhiteWaves {
		  animation: whitewaves 4s alternate ease infinite;
		}
		
		@keyframes whitewaves {
			0% { transform: translate(0,25px); }
			100%     { transform: translate(25px,35px); }
		}
		
		.lifebuoy{
		right:0;
		position: relative;
		z-index:1000;
		animation: boom 1s infinite linear;
		}
		
		@keyframes boom {
		  0% {
			transform: scale(0.4);
		  }
		  50% {
			transform: scale(0.42);
		  }
		  100% {
			transform: scale(0.4);
		  }
		}
		
		.backgd{
		width:100%;
		height: 100vh;
		position:absolute;
		}
		
		.sgl8r8o {
		  height: 100px;
		  width: 100px;
		  top: 130px;
		  left: 170px;
		  position: absolute;
		  z-index: 3;
		  border-radius: 100% 0px 0px;
		  border-top: 60px solid red;
		  border-left: 60px solid rgb(241, 241, 241);
		}
		.n29n237 {
		  height: 100px;
		  width: 100px;
		  top: 130px;
		  left: 330px;
		  position: absolute;
		  z-index: 3;
		  border-radius: 100% 0px 0px;
		  border-top: 60px solid red;
		  border-left: 60px solid rgb(241, 241, 241);
		  transform: rotate(-270deg);
		}
		.mo71q15 {
		  height: 100px;
		  width: 100px;
		  top: 290px;
		  left: 330px;
		  position: absolute;
		  z-index: 3;
		  border-radius: 100% 0px 0px;
		  border-top: 60px solid red;
		  border-left: 60px solid rgb(241, 241, 241);
		  transform: rotate(-180deg);
		}
		.grqsesn {
		  height: 100px;
		  width: 100px;
		  top: 290px;
		  left: 170px;
		  position: absolute;
		  z-index: 3;
		  border-radius: 100% 0px 0px;
		  border-top: 60px solid red;
		  border-left: 60px solid rgb(241, 241, 241);
		  transform: rotate(-90deg);
		}
		
		</style>	
</head>

<body>











</div>

<div class="backgd" >

<svg class="sea" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%"
	 height="auto" viewBox="0 0 800 350" style="enable-background:new 0 0 800 400;" xml:space="preserve">
<style type="text/css">
<![CDATA[
	.st0{opacity:0.76;}
	.st1{fill:url(#SVGID_1_);}
	.st2{fill:url(#SVGID_2_);}
	.st3{fill:url(#SVGID_3_);}
	.st4{fill:none;stroke:#FFFFFF;stroke-width:4;stroke-miterlimit:10;}
]]>
</style>
<g id="Sky" class="sky">
	<radialGradient id="SVGID_1_" cx="400" cy="202.5" r="317.3423" gradientUnits="userSpaceOnUse">
		<stop  offset="0" style="stop-color:#E6DBFA"/>
		<stop  offset="3.659654e-002" style="stop-color:#E5DCFA"/>
		<stop  offset="0.5708" style="stop-color:#D5EBFE"/>
		<stop  offset="1" style="stop-color:#D0F0FF"/>
	</radialGradient>
	<rect y="-1" class="st1" width="800" height="407"/>
</g>
<g id="DarkWaves" class="DarkWaves">
	<g>
		<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="400.0005" y1="602" x2="400.0005" y2="202.3545">
			<stop  offset="0" style="stop-color:#0000FF"/>
			<stop  offset="0.1789" style="stop-color:#0020EC"/>
			<stop  offset="0.4149" style="stop-color:#0043D7"/>
			<stop  offset="0.6374" style="stop-color:#005CC8"/>
			<stop  offset="0.8386" style="stop-color:#006CBF"/>
			<stop  offset="1" style="stop-color:#0071BC"/>
		</linearGradient>
		<path class="st2" d="M761.8,202.4c-24.7,0-36.7,7.2-49.5,14.7c-13.2,7.8-26.8,15.9-53.8,15.9c-27,0-40.6-8.1-53.8-15.9
			c-12.8-7.6-24.9-14.7-49.6-14.7c-24.7,0-36.8,7.2-49.6,14.7c-13.2,7.8-26.8,15.9-53.8,15.9c-27,0-40.7-8.1-53.8-15.9
			c-12.8-7.6-24.9-14.7-49.6-14.7c-24.7,0-36.8,7.2-49.6,14.7c-13.2,7.8-26.8,15.9-53.8,15.9c-27,0-40.7-8.1-53.8-15.9
			c-12.8-7.6-24.9-14.7-49.6-14.7c-24.7,0-36.8,7.2-49.6,14.7C78.7,224.9,65,232.9,38,232.9c-27,0-40.4-8.1-53.6-15.9
			c-12.1-7.1-24.3-13.9-45.4-14.6V602h922V232.9c-22.6-0.8-37.2-8.4-49.7-15.8C798.5,209.5,786.5,202.4,761.8,202.4z"/>
	</g>
</g>
<g id="LightWaves" class="LightWaves">
	<g>
		<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="400.0005" y1="600" x2="400.0005" y2="214.3545">
			<stop  offset="0" style="stop-color:#0000FF"/>
			<stop  offset="0.1643" style="stop-color:#0B2CF7"/>
			<stop  offset="0.3574" style="stop-color:#1559F0"/>
			<stop  offset="0.5431" style="stop-color:#1E7DEA"/>
			<stop  offset="0.7168" style="stop-color:#2496E6"/>
			<stop  offset="0.874" style="stop-color:#28A6E3"/>
			<stop  offset="1" style="stop-color:#29ABE2"/>
		</linearGradient>
		<path class="st3" d="M750.9,229.8c-14.8-7.9-28.7-15.4-57.2-15.4c-28.5,0-42.4,7.5-57.2,15.4c-15.2,8.2-30.9,16.6-62.1,16.6
			s-46.9-8.4-62.1-16.6c-14.8-7.9-28.7-15.4-57.2-15.4c-28.5,0-42.4,7.5-57.2,15.4c-15.2,8.2-30.9,16.6-62.1,16.6
			c-31.2,0-46.9-8.4-62.1-16.6c-14.8-7.9-28.7-15.4-57.2-15.4c-28.5,0-42.4,7.5-57.2,15.4c-15.2,8.2-30.9,16.6-62.1,16.6
			c-31.2,0-46.9-8.4-62.1-16.6c-14.8-7.9-28.9-15.4-57.3-15.4c-16.9,0-28.8,2.6-38.8,6.4V600h922V237c-12,5.3-26,9.4-47.8,9.4
			C782.1,246.4,766.1,237.9,750.9,229.8z"/>
	</g>
</g>
<g id="WhiteWaves" class="WhiteWaves">
	<g class="st0">
		<path class="st4" d="M-71,220c94.2,0,94.2,18,188.4,18c94.2,0,94.2-18,188.4-18c94.2,0,94.2,18,188.4,18c94.2,0,94.2-18,188.4-18
			s94.2,18,188.4,18"/>
	</g>
</g>
</svg>



</div>
    </div>












	
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100" style="align-items: center;">
				<div class="card-wrapper">
					
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Connexion</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="email">Adresse Mail</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email non valide
									</div>
								</div>

								<div class="form-group">
									<label for="password">Mot de Passe
										<a href="forgot.html" class="float-right">
											 Mot de Passe oublié ?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Mot de Passe obligatoire
							    	</div>
								</div>

								

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Se Connecter
									</button>
								</div>
								<div class="mt-4 text-center">
									Vous n'avez pas un compte ? <a href="register.html">Inscrivez-vous</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer" style="text-align: center; font-size: 12px;">
						Copyright &copy; 2021 &mdash; Code Of Duty
					</div>
				</div>
			</div>
		</div>
	</section>

	
</body>
</html>