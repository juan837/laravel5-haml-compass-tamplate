#carousel-biosoft.carousel.slide{"data-ride" => "carousel"}
  / Indicators
  %ol.carousel-indicators
    %li.active{"data-slide-to" => "0", "data-target" => "#carousel-biosoft"}
    %li{"data-slide-to" => "1", "data-target" => "#carousel-biosoft"}
    %li{"data-slide-to" => "2", "data-target" => "#carousel-biosoft"}
    %li{"data-slide-to" => "3", "data-target" => "#carousel-biosoft"}
    %li{"data-slide-to" => "4", "data-target" => "#carousel-biosoft"}
  / Contenedor del slider
  .carousel-inner
    #slider1.item.active
      %img.fondo{:src => "http://lorempixel.com/1024/480/city"}
        .carousel-caption.hidden-xs
          %h3 SEEEWwwwww
    #slider2.item
      %img.fondo{:src => "http://lorempixel.com/1024/480/city"}
        .carousel-caption.hidden-xs
          %h3 SEEEWwwwww
    #slider3.item
      %img.fondo{:src => "http://lorempixel.com/1024/480/city"}
        .carousel-caption.hidden-xs
          %h3 SEEEWwwwww
    #slider4.item
      %img.fondo{:src => "http://lorempixel.com/1024/480/city"}
        .carousel-caption.hidden-xs
          %h3 SEEEWwwwww
    #slider5.item
      %img.fondo{:src => "http://lorempixel.com/1024/480/city"}
        .carousel-caption.hidden-xs
          %h3 SEEEWwwwww
  / Controls
  %a.left.carousel-control{"data-slide" => "prev", :href => "#carousel-biosoft", :role => "button"}
    %span.glyphicon.glyphicon-chevron-left
  %a.right.carousel-control{"data-slide" => "next", :href => "#carousel-biosoft", :role => "button"}
    %span.glyphicon.glyphicon-chevron-right