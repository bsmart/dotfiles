<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Carousel Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/global.css" rel="stylesheet">
    <link href="../assets/css/deek.css" rel="stylesheet">
    <link href="../assets/css/swipebox.css" rel="stylesheet">
    <!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <a id="#section-1"></a>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" id="logo" href="#section-1">
          <img src="../assets/img/drifty_logo.png" alt="Drifty logo">
          </a>
          <ul class="nav" id="top-nav">
            <li>
              <a href="#section-2">
                Work
              </a>
            </li>
            <li>
              <a href="#section-3">
                About us
              </a>
            </li>
            <li>
              <a href="#section-4">
                Contact
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>



    <!-- Carousel
    ================================================== -->
    <div id="section-1"></div>
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="../assets/img/examples/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline</h1>
              <p id="cta-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <div class="btn-holder">
              <a id="btn-cta" href="#section-3">Work with us today!</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../assets/img/examples/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p id="cta-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../assets/img/examples/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p id="cta-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        <h1 class="h1-heading" style="text-align: center;">
          Meet the Deek team
        </h1>
        <p class="p-sub-heading-text" style="text-align: center;">
          Drifty is a cloud based software company founded in 2012 by a close team
          of designers and developers, with a passion for building awesome tools
          that make it easier to create and develop for the
          web and mobile.
        </p>
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span6">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2 class="bio">Geo Jenkins</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        </div><!-- /.span4 -->
        <div class="span6">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2 class="bio">Brittany Smart</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


        <div class="container gallery">
        <h1 class="h1-heading" style="text-align: center;">
        Our work
        </h1>
            <ul class="thumbnails">
                <li class="span3">
                    <a class="thumbnail fancybox" href="http://vimeo.com/64044455"  title="Nuke"><img src="http://vimeo.com/64044455" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                      <a class="thumbnail fancybox" href="../assets/img/pics/2.jpg"><img src="../assets/img/pics/2.jpg" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                    <a class="thumbnail swipebox" href="../assets/img/pics/1.jpg"  title="Nuke"><img src="../assets/img/pics/1.jpg" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                      <a class="thumbnail swipebox" href="../assets/img/pics/2.jpg"><img src="../assets/img/pics/2.jpg" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                    <a class="thumbnail swipebox" href="../assets/img/pics/1.jpg"  title="Nuke"><img src="../assets/img/pics/1.jpg" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                      <a class="thumbnail swipebox" href="../assets/img/pics/2.jpg"><img src="../assets/img/pics/2.jpg" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                    <a class="thumbnail swipebox" href="../assets/img/pics/1.jpg"  title="Nuke"><img src="../assets/img/pics/1.jpg" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                      <a class="thumbnail swipebox" href="../assets/img/pics/2.jpg"><img src="../assets/img/pics/2.jpg" /></a>
                </li> <!--end thumb -->
            </ul><!--end thumbnails -->      
    </div>  


  <div class="container">
  
        <div class="page-header">
            <h1>Contact Me</h1>
        </div>
<?php

    // check for a successful form post
    if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";

    // check for a form error
    elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";

?>
        <form method="POST" action="contact-form-submission.php" class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="input1">Name</label>
                <div class="controls">
                    <input type="text" name="contact_name" id="input1" placeholder="Your name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input2">Email Address</label>
                <div class="controls">
                    <input type="text" name="contact_email" id="input2" placeholder="Your email address">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input3">Message</label>
                <div class="controls">
                    <textarea name="contact_message" id="input3" rows="8" class="span5" placeholder="The message you want to send to me."></textarea>
                </div>
            </div>
            <div class="form-actions">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
        
    </div>

    
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider" id="section-2">

      <div class="featurette">
        <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png">
        <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider" id="section-3">

      <div class="featurette">
        <img class="featurette-image pull-left" src="../assets/img/examples/browser-icon-firefox.png">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider" id="section-4">

      <div class="featurette">
        <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-safari.png">
        <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

</div>
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p>&copy; 2013 Deek Design &middot; Created with care in Pennsylvania.</p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script src="../assets/js/jquery.nav.js"></script>
    <script src="../assets/js/jquery.scrollTo.js"></script>
    <script src="../assets/js/holder/holder.js"></script>
    <script src="../assets/js/jquery-1.9.0.min.js"></script>
    <script src="../assets/js/jquery.swipebox.min.js"></script>
    <script src="../assets/js/jquery.swipebox.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox").fancybox();
  });
</script>
    <script>
        $('#top-nav').onePageNav({
        currentClass: 'active',
        changeHash: true,
        scrollSpeed: 1000
       });
    </script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  </body>
</html>
