<!doctype html>
<html lang="en-US">

<!-- Mirrored from templates.iqonic.design/Eric Egana/frontend/html/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 13:53:02 GMT -->

<head>
   <!-- Required meta tags -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Eric Egana</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- Typography CSS -->
   <link rel="stylesheet" href="css/typography.css">
   <!-- Style -->
   <link rel="stylesheet" href="css/style.css" />
   <!-- Responsive -->
   <link rel="stylesheet" href="css/responsive.css" />
   <!-- swiper -->
   <link rel="stylesheet" href="css/swiper.min.css">
   <link rel="stylesheet" href="css/swiper.css">
   <style>
      .img-box img {
         border-radius: 10px;
         mix-blend-mode: overlay;
      }

      .block-images.position-relative {
         min-width: 280px;
         margin-left: 20px !important;
         margin-top: 20px !important;
      }

      .block-images.position-relative {
         min-width: 280px;
         max-width: 300px;
         margin-left: 20px !important;
         margin-top: 20px !important;
      }

      .img-box {
         border-radius: 10px;
      }

      .badge {
         width: 36%;
         background-color: #000000bf;
         padding: 2px;
      }

   </style>
</head>

<body>
   <?php
      $apiKey = 'AIzaSyDDIKdq6srL6usxujr7mxxtvnUl5uWvsUU';
      
      $videoIds = array(
         'v_bkUR9PSKg', 
         'a4UojzZTZOc', 
         'i0ONa8j4ovo',
         'up-oXFqPzt4',
         '1WbJpvdpSp4',
         'J0L4Y5Xa1Sg',
         'WulFJwj8A',
         'WrPYkbuCCX8'
      );

      $videoIdsString = implode(',', $videoIds);
      $videoData = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=$videoIdsString&key=$apiKey&part=snippet");
      $videoData = json_decode($videoData);
   ?>
   <!-- Header -->
   <header id="main-header">
      <div class="main-header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <nav class="navbar navbar-expand-lg navbar-light p-0">
                     <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <div class="navbar-toggler-icon" data-toggle="collapse">
                           <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                           <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                           <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                        </div>
                     </a>
                     <a class="navbar-brand text-uppercase text-danger" href="index.php">Your Logo</a>
                     <div class="mobile-more-menu">
                        <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                           data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                           <i class="ri-more-line"></i>
                        </a>

                     </div>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="menu-main-menu-container">
                           <ul id="top-menu" class="navbar-nav ml-auto">

                           </ul>
                        </div>
                     </div>

                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header End -->
   <div class="main-content">
      <section id="iq-favorites">
         <div class="container-fluid">

            <div class="row p-5">
               <div class="col-md-12">
                  <h5 class="text-uppercase">Category Name</h5>
               </div>
               <?php
                  foreach ($videoData->items as $video) {
                     $videoTitle = $video->snippet->title;
                     $videoThumbnail = $video->snippet->thumbnails->high->url;
                     $description = $video->snippet->description;
                     $videoLength = isset($videoData->items->contentDetails) ? $videoData->items->contentDetails->duration : 'Unknown';
                     echo '
                           <div class="block-images position-relative ">
                              <div class="img-box" style="background:#c4b8b847">
                                 <img
                                    src="'.$videoThumbnail.'"
                                    alt="" loading="lazy">
                              </div>
                              <div class="block-description pt-5">
                                 <h6 class="iq-title"><a href="video-detail.php">'.$videoTitle.'</a></h6>
                                 <div class="badge">'.$videoLength.'</div>
                              </div>
                           </div>
                     ';

                  }
               ?>

            </div>

            <div class="row p-5">
               <div class="col-md-12">
                  <h5 class="text-uppercase">Category Name</h5>
               </div>

               <?php
                     foreach ($videoData->items as $video) {
                        $videoTitle = $video->snippet->title;
                        $videoThumbnail = $video->snippet->thumbnails->high->url;
                        $description = $video->snippet->description;

                        echo '
                              <div class="block-images position-relative ">
                                 <div class="img-box" style="background:#c4b8b847">
                                    <img
                                       src="'.$videoThumbnail.'"
                                       alt="" loading="lazy">
                                 </div>
                                 <div class="block-description pt-5">
                                    <h6 class="iq-title"><a href="video-detail.php">'.$videoTitle.'</a></h6>
                                    <div class="badge">10:00</div>
                                 </div>
                              </div>
                        ';

                     }
                  ?>

            </div>
         </div>
      </section>
   </div>

   <footer id="contact" class="footer-one iq-bg-dark">
      <!-- Address -->
      <div class="footer-top">
         <div class="container-fluid">
            <div class="row footer-standard">
               <div class="col-lg-6">
                  <div class="widget text-left">
                     <div class="menu-footer-link-1-container">
                        <ul id="menu-footer-link-1" class="menu p-0">
                           <li id="menu-item-7314"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7314">
                              <a href="#">Terms Of Use</a>
                           </li>
                           <li id="menu-item-7316"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7316">
                              <a href="privacy-policy.php">Privacy-Policy</a>
                           </li>
                           <li id="menu-item-701"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-701">
                              <a href="faq.php">FAQ</a>
                           </li>
                           <li id="menu-item-7118"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7118">
                              <a href="watch-video.php">Watch List</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="widget text-left">
                     <div class="textwidget">
                        <p><small>?? 2021 Eric Egana. All Rights Reserved. All videos and shows on this platform are
                              trademarks of, and all related images and content are the property of, Eric Egana Inc.
                              Duplication and copy of this is strictly prohibited. All rights reserved.</small>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                  <h6 class="footer-link-title">
                     Follow Us :
                  </h6>
                  <ul class="info-share">
                     <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                     <li><a target="_blank" href="#"><i class="fa fa-github"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                  <div class="widget text-left">
                     <div class="textwidget">
                        <h6 class="footer-link-title">Eric Egana App</h6>
                        <!-- <div class="d-flex align-items-center">
                           <a class="app-image" href="#">
                              <img src="images/footer/01.jpg" loading="lazy" alt="play-store">
                           </a><br>
                           <a class="ml-3 app-image" href="#"><img src="images/footer/02.jpg" loading="lazy"
                                 alt="app-store"></a>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Address END -->
   </footer>

   <!-- MainContent End-->
   <!-- back-to-top -->
   <div id="back-to-top">
      <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
   </div>
   <!-- back-to-top End -->
   <!-- jQuery, Popper JS -->
   <script src="js/jquery-3.5.1.min.js"></script>
   <script src="js/popper.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="js/bootstrap.min.js"></script>
   <!-- owl carousel Js -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- select2 Js -->
   <script src="js/select2.min.js"></script>
   <!-- Magnific Popup-->
   <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- Custom JS-->
   <script src="js/custom.js"></script>
   <script src="js/rtl.js"></script>
   <!-- gsap JS -->
   <script src="plugin/gsap/gsap.min.js"></script>
   <script src="js/gsap-scripts.js"></script>
   <!-- Swiper JS -->
   <script src="js/swiper.min.js"></script>
   <script src="js/swiper.js"></script>
</body>

<!-- Mirrored from templates.iqonic.design/Eric Egana/frontend/html/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 13:53:37 GMT -->

</html>