<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel='stylesheet' type='text/css'>
 
</head>
<body>
 
 
 
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-2195009-2', 'auto');
      ga('send', 'pageview');

      ga('create', 'UA-2195009-27', 'auto', {name: "foundation"});
      ga('foundation.send', 'pageview');

    </script>
<div class="off-canvas-wrapper">
<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
<div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
<div class="row column">
<br>

<h5>Menu</h5>
<ul class="side-nav">
  <li><a href="/">Home</a></li>
  <li><a href="/login">Login</a></li>
  <li><a href="/register">Register</a></li>
  <li><a href="/gallery/create">Create</a></li>
</ul>
</div>
</div>
<div class="off-canvas-content" data-off-canvas-content>
<div class="title-bar hide-for-large">
<div class="title-bar-left">
<button class="menu-icon" type="button" data-open="my-info"></button>
<span class="title-bar-title">Mike Mikerson</span>
</div>
</div>
@if(session()->has('message'))
<div data-alert class="alert-box">
{{session()->get('message')}}
  
</div>

@endif
@yield('content')
<hr>
<div class="row">
<div class="medium-6 columns">
<h5>Menu</h5>
<ul class="menu">
  <li><a href="/">Home</a></li>
  <li><a href="/login">Login</a></li>
  <li><a href="/register">Register</a></li>
  <li><a href="/create">Create</a></li>
</ul>
<ul class="menu">
<li><a href="#">Dribbble</a></li>
<li><a href="#">Facebook</a></li>
<li><a href="#">Yo</a></li>
</ul>
</div>
<div class="medium-6 columns">
<label>Name
<input type="text" placeholder="Name">
</label>
<label>Email
<input type="text" placeholder="Email">
</label>
<label>
Message
<textarea placeholder="holla at a designerd"></textarea>
</label>
<input type="submit" class="button expanded" value="Submit">
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
</body>
</html>