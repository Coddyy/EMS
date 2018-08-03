<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="google-signin-client_id" content="1080439175172-bk4for67c82tdtg2m11du0t7ofv58nid.apps.googleusercontent.com">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</head>
<style type="text/css">
	.g-signin2{
		margin-left: 200px;
		margin-top: 200px;
	}
	.data{
		/*display: none;*/
	}
</style>
<body>
<div class="g-signin2" data-onsuccess="onSignIn"></div>

<div class="data">
	<p>Profile Details</p>
	<p></p>
	<p class="alert alert-danger" id="email"></p>
	<img class="img-circle" src="" id="pic" />
	<p>Email</p>

	<p class="alert alert-danger" id="email"></p>
</div>


</body>
</html>

<script type="text/javascript">
	function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  // console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  // console.log('Name: ' + profile.getName());
  // console.log('Image URL: ' + profile.getImageUrl());
  // console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  $('#email').text(profile.getEmail());
}
</script>
<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>