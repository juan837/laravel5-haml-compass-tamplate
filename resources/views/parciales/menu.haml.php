%nav.navbar.navbar-default.navbar-fixed-top{:role => "navigation"}
  .container-fluid
    .navbar-header
      .logo-biosoft
        LOGO
      %button.navbar-toggle.collapsed{"data-target" => "#bs-menu", "data-toggle" => "collapse", "type" => "button"}
        %span.sr-only Toggle navigation
        %span.icon-bar
        %span.icon-bar
        %span.icon-bar
    #bs-menu.collapse.navbar-collapse
      %ul.ph-line-nav.nav.navbar-nav
        %li{"class" => ""}
          {!! HTML::link('/', 'INICIO') !!}
        %li
          {!! HTML::link('rental', 'MALL RENTAL') !!}
        %li
          {!! HTML::link('condominio', 'MALL CONDOMINIO') !!}
        %li
          {!! HTML::link('modalidad', 'MODALIDAD') !!}
        %li
          {!! HTML::link('contacto', 'CONÁCTENOS') !!}
        .effect