%html{:lang => "es"}
  %head
    %meta{:charset => "UTF-8"}
    %meta{:content => "width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no", name: "viewport"}
    %title
      @yield('title')
    -#%link{:href => "assets/images/layout/icon.png", :rel => "shortcut icon", :type => "image/png"}
    -#<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    {!! HTML::style(asset('/css/app.css')) !!}
    %script{:src => "//code.jquery.com/jquery.js"}
    /[if lt IE 9]
      %script{:src => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"}
      %script{:src => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"}
  %body
    %header
      .wrap-menu
        holasdsds
        @include('parciales.menu')
        @if(Request::path() == '/') @include('parciales.slider') @endif
    .wrap-container.wrap-otra
      @yield('content')
    %footer
      .container
        @include('parciales.footer')