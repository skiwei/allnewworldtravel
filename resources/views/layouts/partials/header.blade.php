<?php 
use App\AllNewWorld\Libraries\VO;
?>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class='container'>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class='navbar-brand' href="/">
      	{{ VO::COMPANY_NAME }}
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('featuredTours') }}">TOURS</a></li>
        <li><a href="{{ route('destinations') }}">DESTINATIONS</a></li>
        <li><a href="{{ route('contact') }}">CONTACT</a></li>
        <li><a><span class='header-phone'>{{ VO::COMPANY_PHONE }}</span></a></li>
      </ul>
    </div>
  </div>
</div>