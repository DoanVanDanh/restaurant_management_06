<!DOCTYPE html>
<html>
    <head>
        <title>@lang('restaurant.title')</title>
        <meta charset="utf-8">
         <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
        {{ Html::style('css/app.css') }}
        {{ Html::script('js/app.js') }}
        {{ Html::script('templates/clients/js/move-top.js') }}
        {{ Html::script('templates/clients/js/easing.js') }}
        {{ Html::script('templates/clients/js/move-top.js') }}
        {{ Html::script('templates/clients/js/jquery-ui.js') }}
        {{ Html::script('templates/clients/js/jqueru.cm-overplay.js') }}
        {{ Html::script('templates/clients/js/jquery.mobile.custom.min.js') }}
        {{ Html::script('templates/clients/js/jquery.tools.min.js') }}
        {{ Html::script('templates/clients/js/fifterizr.js') }}

        {{ Html::style('templates/clients/css/style.css') }}
        {{ Html::style('templates/clients/css/jquery-ui.css') }}
        {{ Html::style('templates/clients/css/cm-overplay.css') }}
    </head>
    
 <body>
  <div class="agile-banner-main" id="home">
    <div class="banner-layer">
      <div class="header-main">
        <div class="container">
          <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">@lang('Toggle_Navigation')</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>
            <!-- navbar-header -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="scroll hvr-underline-from-center">
                  <a href="index.html"></a>
                </li>
                <li>
                  <a class="scroll hvr-underline-from-center" href="#about">@lang('restaurant.Home')</a>
                </li>
                <li>
                  <a class="scroll hvr-underline-from-center" href="#menu">@lang('restaurant.About')</a>
                </li>
                <li>
                  <a class="scroll hvr-underline-from-center" href="#team">@lang('restaurant.Team')</a>
                </li>
                <li>
                  <a class="scroll hvr-underline-from-center" href="#testimonials">@lang('restaurant.Testimonials')</a>
                </li>
                <li>
                  <a class="scroll hvr-underline-from-center" href="#contact">@lang('restaurant.Contact')</a>
                </li>
              </ul>
              <ul class="list-right">
                <li>
                  <span class="fa fa-envelope-o list-icon" aria-hidden="true"></span>
                  <a href="mailto:{{ __('restaurant.Email') }}">@lang('restaurant.Email')</a>
                </li>
                <li>
                  <span class="fa fa-phone list-icon" aria-hidden="true"></span>
                  <p> @lang('restaurant.Phone')</p>
                </li>
              </ul>
            </div>


            <div class="clearfix"> </div>
          </nav>
          <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //menu -->
   