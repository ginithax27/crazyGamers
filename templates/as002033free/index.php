<?php 

/*******************************************************************************************/
/*
/*    Designed by 'AS Designing'
/*    Web: http://www.asdesigning.com
/*    Web: http://www.astemplates.com
/*
/*******************************************************************************************/

defined( '_JEXEC' ) or die( 'Restricted access' );

/* The following line loads the MooTools JavaScript Library */
JHTML::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();

$menus = &JSite::getMenu();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=1100" />
    <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />

  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/joomla.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slider/css/slider.css" type="text/css" 
      media="screen" />
     <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/styles.css" type="text/css" />       
     <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bloglayout.css" type="text/css" />
    
  <script type="text/javascript" src="templates/<?php echo $this->template ?>/scripts/general.js"></script>
  <script type="text/javascript" src="templates/<?php echo $this->template ?>/scripts/jquery.js"></script>

  <script type="text/javascript" src="templates/<?php echo $this->template ?>/slider/scripts/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="templates/<?php echo $this->template ?>/slider/scripts/jquery.slider.pack.js"></script>   

<?php 

include 'ie6warning.php';
include 'params.general.php';

?>
</head>

<body>

    <!-- HEADER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
    <div id="header">
        <div class="row1">
          <div class="content">
              <div class="row1col1">
                    <div id="companyname">
                        <a href="<?php echo $this->baseurl; ?>"> 
                            <img src="<?php echo $logo_img; ?>" alt="AS Templates"/>            
                        </a>
                    </div>
                </div>
                <div class="row1col2">
                    <div id="topnavbar">
                      <div class="custom">
                            <div id="maplink">
                                <a href="http://www.astemplates.com/terms.php" title="Terms od Use">
                                <img src="/images/spacer.png" border="0" width="1" height="1" style="border: 0;" /></a>
                            </div>
                            <div id="contactlink">
                                <a href="http://www.astemplates.com/contactus.php" title="Contact Us">
                                <img src="/images/spacer.png" border="0" width="1" height="1" style="border: 0;" /></a>
                            </div>
                            <div id="homelink">
                                <a href="http://www.astemplates.com" title="Home">
                                <img src="/images/spacer.png" border="0" width="1" height="1" style="border: 0;" /></a>
                            </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>

        <div id="sliderow">
            <div id="slideshow">
                <div class="slider-wrapper">
                    <div id="slider" class="nivoSlider">
              <img src="templates/<?php echo  $this->template ?>/slider/images/slide1.jpg" />
              <img src="templates/<?php echo  $this->template ?>/slider/images/slide2.jpg" />
              <img src="templates/<?php echo  $this->template ?>/slider/images/slide3.jpg" />                   
                    </div>
                </div>
        
                <script type="text/javascript">
                $(window).load(function() {
                    $('#slider').nivoSlider({
                    effect: 'fade',
                    animSpeed: <?php echo $slider_speed; ?>,
                    pauseTime: <?php echo $slider_showtime; ?>
                    });
                });
                </script>
            </div>
        </div>

    <?php if($this->countModules('position-1')): ?>
        <div class="row2">
          <div class="content">
                <div id="topmenu">
                    <jdoc:include type="modules" name="position-1"/>
                </div>
            </div>
    </div>
    <div class="clear"></div>
      <?php endif; ?>
            
    <?php 
        if($this->countModules('breadcrumbsload') || $this->countModules('position-0')): 
        ?>
        <div class="row3">
            <div class="content">
              <div class="row3col1">
                    <div id="breadcrumb"> 
                        <jdoc:include type="modules" name="breadcrumbsload" />  
                    </div>
                </div>
              <div class="row3col2">
                    <div id="search">
                        <jdoc:include type="modules" name="position-0" />
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <?php endif; ?>
    </div>
    <!-- END OF HEADER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    
    <!-- CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="clear"></div>
    <div id="content">    
        <!-- COLUMN LEFT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php if($leftcolumn) : ?> 
        <div id="colleft">
            <?php if($this->countModules('position-40')): ?>
            <div class="row1">
                <jdoc:include type="modules" name="position-40" style="xhtml"/>
            </div>
            <?php endif; ?>
            <?php if($this->countModules('position-41')): ?>
            <div class="row2">
                <jdoc:include type="modules" name="position-41" style="xhtml"/>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <!-- END OF COlUMN LEFT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
        <!-- COLUMN MAIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div id="colmain" <?php echo $maincolumn_width; ?> >
        
            <jdoc:include type="message" />
    
            <div id="component" <?php echo $maincolumn_cntwidth; ?> >
                 <jdoc:include type="component"  />
            </div>
            <div class="clear"></div>
    
            <?php if($this->countModules('position-5')): ?>
            <div id="adsense">
              <div class="innerborder">
                  <jdoc:include type="modules" name="position-5" style="xhtml"/>
                </div>
            </div>
            <?php endif; ?>

        </div>
        <!-- END OF COLUMN MAIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    </div>
    <div class="clear"></div>

    <!-- FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
  <div id="footer">

        <?php if($this->countModules('position-50')): ?>
      <div class="row2"> 
          <div class="bg">   
                <div class="overlay">    
                    <div class="content">
                        <div class="row2col1" <?php echo $footer_row2_colwidth; ?>>
                            <jdoc:include type="modules" name="position-50" style="xhtml"/>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

      <div class="row3"> 
            <div class="content">
                <div id="trademark">
                    Copyright &copy; <?php echo date('Y'); ?> <?php echo $app->getCfg('sitename'); ?>
                </div>
                <!-- DO NOT REMOVE OR CHANGE THE CONTENT BELOW, THIS THEME MAY NOT WORK PROPERLY -->
                
                <div id="ascopy">
                <a href="http://www.astemplates.com/" target="_blank">
                    Designed by:&nbsp;&nbsp;AS TEMPLATES
                </a>
                </div>
                
                <!-- DO NOT REMOVE OR CHANGE THE CONTENT ABOVE, THIS THEME MAY NOT WORK PROPERLY -->
            </div>
        </div>
  </div>
    <!-- END OF FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    
</body>
</html>



