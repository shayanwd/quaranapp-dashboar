<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!-- Meta data -->
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <meta content="Al-Quran Kareem" name="description">
  <meta content="Al-Quran Kareem" name="author">
  <meta name="keywords" content="Al-Quran Kareem" />

  <!-- Title -->
  <title>Login</title>
	<!--Favicon -->
	<link rel="icon" href="assets/images/brand/fav.png" type="image/x-icon" />

	<!-- Style css -->
	<link href="assets/css/style.css" rel="stylesheet" />

	<!-- Dark css -->
	<link href="assets/css/dark.css" rel="stylesheet" />

	<!-- Skins css -->
	<link href="assets/css/skins.css" rel="stylesheet" />

	<!-- Animate css -->
	<link href="assets/css/animated.css" rel="stylesheet" />

	<!---Icons css-->
	<link href="assets/plugins/web-fonts/icons.css" rel="stylesheet" />
	<link href="assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/plugins/web-fonts/plugin.css" rel="stylesheet" />

	<!-- Style css -->
	<link href="assets//css/main.css" rel="stylesheet" />
	<link href="assets//css/second.css" rel="stylesheet" />


<style>
	.page-style1.page-style2{
	    cursor: auto;
    display: flex;
    width: 100%;
    flex-direction: column;
    justify-content: center;
}
</style>
</head>

<body class="page-style1 page-style2 light-mode default-sidebar">
	<div class="d-md-flex">
		<div class="w-80 bg-style h-100vh page-style">
			<div class="page-content">
				<div class="page-single-content">
					<!-- <img src="assets/images/login-img.png" alt="img" class="header-brand-img mb-5"> -->
					<div class="card-body text-white  text-center">
						<img src="assets/images/login-img.png" alt="img" class="w-100 mx-auto text-center">
					</div>
				</div>
			</div>
		</div>
		<div class="w-80 page-content">
			<div class="page-single-content">
				<div class="card-body p-6">
					<form method="POST" action="/login" class="row">
                        @csrf
						<div class="col-md-8 mx-auto d-block">
							<div class="d-flex justify-content-center">
							<img class="login-logo" src="../assets/images/brand/logo-block.png" alt="" />
						</div>
                        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
							<h3 class="login-title">Login to Continue</h3>
							<div class="input-group mb-3 login-input-holder">
								<span class="input-group-addon">
									<svg class="svg-icon"  xmlns="http://www.w3.org/2000/svg" width="20.096" height="20.096" viewBox="0 0 20.096 20.096">
										<g id="vuesax_outline_sms" data-name="vuesax/outline/sms" transform="translate(-11)">
										  <g id="sms" transform="translate(11)">
											<path id="Vector" d="M13.188,15.491H4.815C1.758,15.491,0,13.732,0,10.676V4.815C0,1.758,1.758,0,4.815,0h8.373C16.244,0,18,1.758,18,4.815v5.861C18,13.732,16.244,15.491,13.188,15.491ZM4.815,1.256c-2.395,0-3.559,1.164-3.559,3.559v5.861c0,2.395,1.164,3.559,3.559,3.559h8.373c2.395,0,3.559-1.164,3.559-3.559V4.815c0-2.395-1.164-3.559-3.559-3.559Z" transform="translate(1.047 2.303)" fill="#ecdfc9"/>
											<path id="Vector-2" data-name="Vector" d="M4.817,3.873a3.113,3.113,0,0,1-1.959-.661L.237,1.119a.626.626,0,0,1,.779-.98L3.636,2.232a2,2,0,0,0,2.353,0L8.61.139a.618.618,0,0,1,.879.1.618.618,0,0,1-.1.879L6.768,3.212A3.073,3.073,0,0,1,4.817,3.873Z" transform="translate(5.231 6.903)" fill="#ecdfc9"/>
											<path id="Vector-3" data-name="Vector" d="M0,0H20.1V20.1H0Z" fill="none" opacity="0"/>
										  </g>
										</g>
									  </svg>

								</span>
								<input type="text" name="email" class="form-control" placeholder="Email">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-addon">
									

									  <svg  class="svg-icon"  id="Group_15732" data-name="Group 15732" xmlns="http://www.w3.org/2000/svg" width="22.157" height="22.157" viewBox="0 0 22.157 22.157">
										<g id="vuesax_linear_lock" data-name="vuesax/linear/lock">
										  <g id="lock">
											<path id="Vector" d="M0,0H22.157V22.157H0Z" fill="none" opacity="0"/>
										  </g>
										</g>
										<path id="Vector-2" data-name="Vector" d="M11.078,8.136a.75.75,0,0,1-.75-.75V5.539a5.359,5.359,0,0,0-.873-3.445C8.727,1.19,7.446.75,5.539.75s-3.188.44-3.917,1.344A5.359,5.359,0,0,0,.75,5.539V7.386a.75.75,0,0,1-.75.75.75.75,0,0,1-.75-.75V5.539C-.75,2.839-.1-.75,5.539-.75s6.289,3.589,6.289,6.289V7.386A.75.75,0,0,1,11.078,8.136Z" transform="translate(5.539 1.846)" fill="#ecdfc9"/>
										<path id="Vector-3" data-name="Vector" d="M13.848,11.828H4.616c-2.188,0-3.411-.331-4.223-1.143S-.75,8.65-.75,6.462V4.616C-.75,2.428-.419,1.2.393.393S2.428-.75,4.616-.75h9.232c2.188,0,3.411.331,4.223,1.143s1.143,2.035,1.143,4.223V6.462c0,2.188-.331,3.411-1.143,4.223S16.036,11.828,13.848,11.828ZM4.616.75c-1.724,0-2.669.21-3.162.7S.75,2.892.75,4.616V6.462c0,1.724.21,2.669.7,3.162s1.439.7,3.162.7h9.232c1.724,0,2.669-.21,3.162-.7s.7-1.439.7-3.162V4.616c0-1.724-.21-2.669-.7-3.162s-1.439-.7-3.162-.7Z" transform="translate(1.846 9.232)" fill="#ecdfc9"/>
										<path id="Vector-4" data-name="Vector" d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z" transform="translate(14.273 14.271)" fill="#ecdfc9"/>
										<path id="Vector-5" data-name="Vector" d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z" transform="translate(10.58 14.271)" fill="#ecdfc9"/>
										<path id="Vector-6" data-name="Vector" d="M.5,1.5H.495a1,1,0,0,1,0-2H.5a1,1,0,0,1,0,2Z" transform="translate(6.886 14.271)" fill="#ecdfc9"/>
									  </svg>
									  
									  
									
								</span>
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="row">
								
								<div class="col-12">
									<button type="submit" class="btn btn-primary btn-block">Sign In</button>
								</div>
								<!-- <div class="col-12">
									<a href="forgot-password.html" class="forgot-btn btn btn-link box-shadow-0 px-0">Forgot
										password?</a>
								</div> -->
							</div>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	<!-- Jquery js-->
	<script src="assets/js/vendors/jquery-3.4.0.min.js"></script>

	<!-- Bootstrap4 js-->
	<script src="assets/plugins/bootstrap/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!--Othercharts js-->
	<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

	<!-- Circle-progress js-->
	<script src="assets/js/vendors/circle-progress.min.js"></script>

	<!-- Jquery-rating js-->
	<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

</body>

</html>