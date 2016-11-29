<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	</head>
	<body>

		<script>

		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '1337016556309048',
		      xfbml      : true,
		      version    : 'v2.8'
		    });

		    // ADD ADDITIONAL FACEBOOK CODE HERE
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>

		<h1>Raymond Live Likes<span class="likes"></span></h1>


	</body>
</html>