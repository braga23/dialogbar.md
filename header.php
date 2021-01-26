<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JYN7PZW3JX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JYN7PZW3JX');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <?php wp_head(); ?>

    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '841215606658383');
  fbq('track', 'PageView');
</script>
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?> >
	<!-- Facebook Pixel Code -->
	<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=841215606658383&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	<!-- loading -->
	<?php if( get_theme_mod("display_loading","yes") != "no" ){  ?>
	   <div id="loading">
	        <div class="timer-loader">
	          <?php esc_html_e('Loading...','mitup'); ?>
	        </div>    
	    </div>
	<?php } ?>
	<!-- /loading -->

    <div class="ovatheme_container_<?php echo esc_attr(mitup_get_current_width_site()); ?>">
        <div class="wrapper">
    	
        <?php  $header = mitup_get_current_header(); 
			get_template_part( 'header/header', $header ); ?>

