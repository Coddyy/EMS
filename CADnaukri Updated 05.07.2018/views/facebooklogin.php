
<!DOCTYPE html>
<html>
<head>
  <title>fb</title>
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '241334279984528',
      cookie     : false,
      xfbml      : true,
      version    : 'v3.0'
    });
      
    
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
},{scope:'email'}); 
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

 function statusChangeCallback(response){
  if(response.status === 'connected'){
    FB.api('/me/permissions', function(data) {
    console.log(data.name);
},{scope:'email'});
  }else{
    console.log('nope');
  }
 }


function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  },{scope:'email'});
}

</script>


           

<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>

</body>
</html>