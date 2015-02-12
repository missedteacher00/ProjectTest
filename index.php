

<!DOCTYPE html>
<html>
<head>
  <title>Project00</title>
</head>
<body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1546926692223129',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0]; // Linkage du SDK Facebook
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


<div class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>

</body>
</html>


