<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri().'/images/favicon.png';?>">
<?php wp_head(); ?>
</head>

<?php 
$extra_classes = array();
if(get_field('home_page_animations','options')){ array_push($extra_classes, get_field('home_page_animations','options') ); }
if(get_field('parallax_slide_show','options')){ array_push($extra_classes, 'parallax-slideshow' ); } ?>

<body <?php body_class($extra_classes); ?>>
<?php if(function_exists('wp_body_open')){ wp_body_open(); } ?>
<?php do_action('gon_after_body_tag'); ?>


<?php $header = get_field('select_header_style','option'); 

//below-slider header on home page gets a different treatment than the rest due to it's place in the html
if($header!=='below-slider'||!is_front_page()):  ?>
<header id="header" role="banner" class="navigation gon_header-<?php echo $header; ?>">
  
<?php switch ($header) {
  case 'standard':
    get_template_part('header/standard');
    break;
  case 'banded':
    get_template_part('header/banded');
    break;
  case 'transparent-top':
    get_template_part('header/transparent-top');
    break;
  case 'transparent-bottom':
    get_template_part('header/transparent-bottom');
    break;

  default:
    break;
}

if($header=='below-slider'&&!is_front_page()){
  get_template_part('header/below-slider');
} ?>

</header>
<?php endif; ?>


<?php if(get_field('header_slide','options')): ?>
<header id="header" role="banner" class="navigation gon_header-<?php echo $header; ?> slide-in">
<?php switch ($header) {
  case 'standard':
    get_template_part('header/standard');
    break;
  case 'banded':
    get_template_part('header/banded');
    break;
  case 'transparent-top':
    get_template_part('header/transparent-top');
    break;
  case 'transparent-bottom':
    get_template_part('header/transparent-bottom');
    break;
  
  default:
    break;
} 

if($header=='below-slider'&&!is_front_page()){
  get_template_part('header/below-slider');
}

?>
</header>
<?php endif; ?>

<?php if( !is_front_page() && get_field('show_header_image', get_the_ID() ) ){?>

<section class="container-fluid head-img" style="background:url(<?php if( get_field('custom_header_image', get_the_ID()) ): the_field('custom_header_image', get_the_ID()); else : the_field('default-header-image', 'option'); endif; ?>) transparent no-repeat center center;background-size:cover;<?php if(get_field('header_height',get_the_ID())): echo 'min-height:'.get_field('header_height',get_the_ID()); else : echo 'min-height:10em;'; endif; ?>">
</section>

<?php } ?>

<div id="main-content" <?php if(get_field('site-background', 'option')){ ?>style="background:url('<?php the_field('site-background', 'option');?>') repeat;"<?php } ?> >










