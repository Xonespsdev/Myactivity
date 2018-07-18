  <meta charset="utf-8">
  <title>@yield('title')</title>
  <nav class="navbar" id="mainav">
  	<ul>
  		<div id="menuF" class="default">
  			<div class="container">
  				<div class="row">
  					<div class="logo col-md-4">
  						<div>
  							<a href="#">
  								<img src="images/logo.png">
  							</a>
  						</div>
  					</div>
  					<div class="col-md-8">
  						<div class="navmenu" style="text-align: center;">
  							<ul id="menu">
  								<li class="menu-has-children {{ ( Request::is('/') ) ? 'active' : '' }}" ><a href="/">Home</a></li>
                  
  								<li class="{{ Route::current()->getName() == 'home.page.blog' ? 'active' : '' }}">
                    <div class="dropdown">
                    <a href="{{route('home.page.blog')}}">Blogs</a> <i class="fa fa-caret-down"></i>
                      <div class="dropdown-content">
                      <a href="#">Technology</a>
                      <a href="#">Knowlege</a>
                      <a href="#">Beauty</a>
                    </div>
                  </div>
                  </li>
  								<li><a href="#news">News</a></li>
                  <li>
                   <div class="dropdown">
                    <a href="#">Projects</a>
                    <i class="fa fa-caret-down"></i>
                    <div class="dropdown-content">
                      <a href="#">Java</a>
                      <a href="#">VB</a>
                      <a href="#">C#</a>
                      <a href="#">C</a>
                       <a href="#">C++</a>
                      <a href="#">PHP</a>
                      <a href="#">Javascrip</a>
                    </div>
                  </div>
                </li>
                <li class="{{ Route::current()->getName() == 'home.page.contact' ? 'active' : '' }}"><a href="{{route('home.page.contact')}}">Contact</a></li>
                <li class="{{ Route::current()->getName() == 'home.page.about' ? 'active' : '' }}"><a href="{{route('home.page.about')}}">About</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </ul>
</nav>

<script type="text/javascript">
  jQuery(document).ready(function(){
   jQuery('#menu').slicknav();

 });
</script>

<script type="text/javascript">
  $(document).ready(function(){

   var $menu = $("#menuF");

   $(window).scroll(function(){
    if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
     $menu.fadeOut('fast',function(){
      $(this).removeClass("default")
      .addClass("fixed transbg")
      .fadeIn('fast');
    });
   } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
     $menu.fadeOut('fast',function(){
      $(this).removeClass("fixed transbg")
      .addClass("default")
      .fadeIn('fast');
    });
   }
 });
 });
    //jQuery
  </script>