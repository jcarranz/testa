<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">

        <?php // force Internet Explorer to use the latest rendering engine available ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php wp_title(''); ?></title>

        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <![endif]-->
        <?php // or, set /favicon.ico for IE10 win ?>
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

        <?php // drop Google Analytics Here ?>
        <?php // end analytics ?>

    </head>

<body class="instalaciones" itemscope itemtype="http://schema.org/WebPage">


<header role="banner" itemscope itemtype="http://schema.org/WPHeader">
    <div class="cabecera <?php if (is_home()) echo 'home'; ?>">
        <section class="layout">
            <div class="nav_superior">
                <div class="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php // bloginfo('name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo320.png" alt="Logotipo"></a></div>
                
                <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
                <div class="nav">
                    <ul>
                        <li><a href="#"><i id="menu" class="fa fa-bars animenu__toggle"></i></a>
                        
                        <?php wp_nav_menu(array(
                        'container' => false,                           // remove nav container
                        'container_class' => '',                 // class of container (should you choose to use it)
                        'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                        'menu_class' => 'animenu2',               // adding custom nav class
                        'theme_location' => 'main-nav',                 // where it's located in the theme
                        'before' => '',                                 // before the menu
                        'after' => '',                                  // after the menu
                        'link_before' => '',                            // before each link
                        'link_after' => '',                             // after each link
                        'depth' => 0,                                   // limit the depth of the nav
                        'fallback_cb' => ''                             // fallback function (if there is one)
                        )); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <!-- cabecera -->
</header> <?php //header ?>


<div class="fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/instalaciones_box_1.jpg');" data-img-width="960" data-img-height="523" data-diff="10">
    <div class="content-a">
        <div class="content-b">
          <div class="hola">
           <h2>¡Hola!</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem obcaecati sapiente. Eligendi molestiae magni tempora officia rerum officiis aspernatur minima accusantium, reiciendis, ipsum magnam voluptates ea expedita odio sint.</p>
            <p>Facilis molestias ab eius placeat cum esse officiis soluta, quasi optio recusandae repellendus explicabo sequi voluptate odit numquam quibusdam corporis non nihil architecto aspernatur iste, quod eos. Sapiente, numquam, neque.</p>        
          </div>
        </div>
    </div>
</div>
  
<div class="not-fullscreen background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/instalaciones_box_2.jpg');" data-img-width="960" data-img-height="374" data-diff="20">
    <div class="content-a">
        <div class="content-b">
            <div class="insta">
               <h2>Instalaciones</h2>
               <section>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem obcaecati sapiente. Eligendi molestiae magni tempora officia rerum officiis aspernatur minima accusantium, reiciendis, ipsum magnam voluptates ea expedita odio sint.</p>
                    <p>Facilis molestias ab eius placeat cum esse officiis soluta, quasi optio recusandae repellendus explicabo sequi voluptate odit numquam quibusdam corporis non nihil architecto aspernatur iste, quod eos. Sapiente, numquam, neque.</p>      
                   
               </section>
               
            </div>
        </div>
    </div>
</div>
  
<div class="fullscreen background parallax"style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/instalaciones_box_3.jpg');" data-img-width="960" data-img-height="570" data-diff="100" data-oriz-pos="100%">
    <div class="content-a">
        <div class="content-b">
            <div class="avent">
            <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_alpha.png" alt="logo">
                <a href="#">www.amazonia-team.com</a>
            </div>
               
               <section>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia autem obcaecati sapiente. Eligendi molestiae magni tempora officia rerum officiis aspernatur minima accusantium, reiciendis, ipsum magnam voluptates ea expedita odio sint.</p>
                    <p>Facilis molestias ab eius placeat cum esse officiis soluta, quasi optio recusandae repellendus explicabo sequi voluptate odit numquam quibusdam corporis non nihil architecto aspernatur iste, quod eos. Sapiente, numquam, neque.</p>      
                   
               </section>
               
            </div>
        </div>
    </div>
</div>
  
  
<div class="not-fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/instalaciones_box_5.jpg');" data-img-width="960" data-img-height="470" data-diff="100">
    <div class="content-a">
        <div class="content-b">
           <div class="como">
               <section>
               <h2>¿Cómo llegar?</h2>
               <p>Carretera de Fuenfría 3.9</p>
               <p>40º 46' 11.41" (N) - 4º 04' 01.17" (O)</p>
               <a href="#"><i class="fa fa-map-marker"></i> Ir a Google Maps</a>       
               </section>
           </div>
        </div>
    </div>
</div>
  
<section class="not-fullscreen">
    <div class="content-a">
        <div class="content-b">
           <div class="otros">
                <h2>OTROS SERVICIOS</h2>
                <div class="restauracion">
                    <section>
                   <img src="<?php echo get_template_directory_uri(); ?>/images/icono_restauracion.png" alt="restauracion">
                   <p>RESTAURACION</p>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ducimus repudiandae culpa ipsa, praesentium cupiditate ipsam amet voluptatum rerum? Tempora, delectus amet nam, dignissimos totam temporibus nisi vel. Perferendis, harum.</p>   
               </section>
                    
                </div>
               
               <section>
                <img src="<?php echo get_template_directory_uri(); ?>/images/icono_hotel.png" alt="restauracion">
               <p>ALOJAMIENTO Y SALA</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ducimus repudiandae culpa ipsa, praesentium cupiditate ipsam amet voluptatum rerum? Tempora, delectus amet nam, dignissimos totam temporibus nisi vel. Perferendis, harum.</p>
               </section>
           </div>
        </div>
    </div>
</section>
<section>
    final
</section>
  
<!-- include jQuery -->
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
/* detect touch */
if("ontouchstart" in window){
    document.documentElement.className = document.documentElement.className + " touch";
}
if(!$("html").hasClass("touch")){
    /* background fix */
    $(".parallax").css("background-attachment", "fixed");
}

/* fix vertical when not overflow
call fullscreenFix() if .fullscreen content changes */
function fullscreenFix(){
    var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(i){
        if($(this).innerHeight() <= h){
            $(this).closest(".fullscreen").addClass("not-overflow");
        }
    });
}
$(window).resize(fullscreenFix);
fullscreenFix();

/* resize background images */
function backgroundResize(){
    var windowH = $(window).height();
    $(".background").each(function(i){
        var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        // overflowing difference
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        // remaining height to have fullscreen image only on parallax
        var remainingH = 0;
        if(path.hasClass("parallax") && !$("html").hasClass("touch")){
            var maxH = contH > windowH ? contH : windowH;
            remainingH = windowH - contH;
        }
        // set img values depending on cont
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        // fix when too large
        if(contW > imgW){
            imgW = contW;
            imgH = imgW / ratio;
        }
        //
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);
        path.css("background-size", imgW + "px " + imgH + "px");
    });
}
$(window).resize(backgroundResize);
$(window).focus(backgroundResize);
backgroundResize();

/* set parallax background-position */
function parallaxPosition(e){
    var heightWindow = $(window).height();
    var topWindow = $(window).scrollTop();
    var bottomWindow = topWindow + heightWindow;
    var currentWindow = (topWindow + bottomWindow) / 2;
    $(".parallax").each(function(i){
        var path = $(this);
        var height = path.height();
        var top = path.offset().top;
        var bottom = top + height;
        // only when in range
        if(bottomWindow > top && topWindow < bottom){
            var imgW = path.data("resized-imgW");
            var imgH = path.data("resized-imgH");
            // min when image touch top of window
            var min = 0;
            // max when image touch bottom of window
            var max = - imgH + heightWindow;
            // overflow changes parallax
            var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
            top = top - overflowH;
            bottom = bottom + overflowH;
            // value with linear interpolation
            var value = min + (max - min) * (currentWindow - top) / (bottom - top);
            // set background-position
            var orizontalPosition = path.attr("data-oriz-pos");
            orizontalPosition = orizontalPosition ? orizontalPosition : "50%";
            $(this).css("background-position", orizontalPosition + " " + value + "px");
        }
    });
}
if(!$("html").hasClass("touch")){
    $(window).resize(parallaxPosition);
    //$(window).focus(parallaxPosition);
    $(window).scroll(parallaxPosition);
    parallaxPosition();
}



</script>
  
</body>
</html>

