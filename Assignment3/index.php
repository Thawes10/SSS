<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="1043549977034-parhcs7a5kbnpc9a2fr30bu8dmn6o73v.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
  <div align="center">
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div><br>
	<span id="id"></span><br>
	<span id="fullName"></span><br>
	<span id="image"></span><br>
	<span id="email"></span><br>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
		document.getElementById("id").innerHTML = 'ID: '+profile.getId();
        document.getElementById("fullName").innerHTML = 'Name: '+profile.getName();
        document.getElementById("email").innerHTML = 'Email: '+profile.getEmail();
		document.getElementById("image").innerHTML = '<img src="'+profile.getImageUrl()+'"></img>';
        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
      };
    </script>
	</div>
  </body>
</html>
