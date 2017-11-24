<html>
	<head>
		<title>hi</title>
	</head>
	
	<body>
		<h1>Hi</h1>
		<script type="text/javascript">
			var urlParams = document.URL.split('?');
			var redirectUrl = 'http://yardsale.druidinc.com/';

			if(urlParams.length > 1) {
				var params = urlParams[1].split('&');
				var paramIndex;

				redirectUrl += '?';

				for(paramIndex in params) {
					if(params[paramIndex].indexOf('request_ids') >= 0 ) {
						redirectUrl += params[paramIndex];

						break;
					}
				}
			}

			console.log(redirectUrl);

			window.top.location.href = redirectUrl + '#home';
		</script>
	</body>

</html>