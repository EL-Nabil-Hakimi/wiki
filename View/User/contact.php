<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - Spurgeon</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/user/css/vendor.css">
    <link rel="stylesheet" href="assets/user/css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="assets/user/image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="assets/user/image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header id="masthead" class="s-header">

            <div class="s-header__branding">
                <p class="site-title">
                <a href="?route=home" rel="home">NB.Wiki</a>
                </p>
            </div>

            <?php include("../View/User/nav.php"); ?>


            <div class="s-header__search">

                <div class="s-header__search-inner">
                    <div class="row">
    
                        <form role="search" method="get" class="s-header__search-form" action="#">
                            <label>
                                <span class="u-screen-reader-text">Search for:</span>
                                <input type="search" class="s-header__search-field" placeholder="Search for..." value="" name="s" title="Search for:" autocomplete="off">
                            </label>
                            <input type="submit" class="s-header__search-submit" value="Search"> 
                        </form>
    
                        <a href="#0" title="Close Search" class="s-header__search-close">Close</a>
    
                    </div> <!-- end row -->
                </div> <!-- s-header__search-inner -->
    
            </div> <!-- end s-header__search -->

            <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
            <a class="s-header__search-trigger" >
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z"></path>
                </svg>
            </a>

        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <div id="content" class="s-content s-content--page">

                <div class="row entry-wrap">
                    <div class="column lg-12">

                        <article class="entry">

                            <header class="entry__header entry__header--narrow">
    
                                <h1 class="entry__title">
                                    Say Hello.
                                </h1>
    
                            </header>

                            <div class="entry__media">
                                <figure class="featured-image">
                                    <img src="assets/user/images/thumbs/contact/contact-1200.jpg" 
                                      srcset="assets/user/images/thumbs/contact/contact-2400.jpg 2400w, 
                                              assets/user/images/thumbs/contact/contact-1200.jpg 1200w, 
                                              assets/user/images/thumbs/contact/contact-600.jpg 600w" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                                </figure>
                            </div>

                            <div class="content-primary">

                                <div class="entry__content">
        
                                    <p class="lead">
                                    Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor 
                                    sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat 
                                    enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco 
                                    magna amet magna cupidatat qui labore cillum cillum cupidatat fugiat nostrud.</p> 

                                    <p>
                                    Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae 
                                    qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi 
                                    repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est 
                                    praesentium. 
                                    </p>

                                    <div class="row block-large-1-2 block-tab-whole entry__blocks">
                                        <div class="column">
                                            <h4>Where to Find Us</h4>
                                            <p>
                                            1600 Amphitheatre Parkway<br>
                                            Mountain View, CA<br>
                                            94043 US
                                            </p>
                                        </div>
        
                                        <div class="column">
                                            <h4>Contact Info</h4>
                                            <p>
                                            someone@yourdomain.com<br>
                                            info@yourdomain.com <br>
                                            Phone: (+63) 555 1212
                                            </p> 
                                        </div>
                                    </div>

                                    <h4>Feel Free to Say Hi.</h4>

                                    <form name="cForm" id="cForm" class="entry__form" method="post" action="" autocomplete="off">
                                        <fieldset class="row">

                                            <div class="column lg-6 tab-12 form-field">
                                                <input name="cName" id="cName" class="u-fullwidth" placeholder="Your Name" value="" type="text">
                                            </div>

                                            <div class="column lg-6 tab-12 form-field">
                                                <input name="cEmail" id="cEmail" class="u-fullwidth" placeholder="Your Email" value="" type="text">
                                            </div>

                                            <div class="column lg-12 form-field">
                                                <input name="cWebsite" id="cWebsite" class="u-fullwidth" placeholder="Website" value="" type="text">
                                            </div>

                                            <div class="column lg-12 message form-field">
                                                <textarea name="cMessage" id="cMessage" class="u-fullwidth" placeholder="Your Message"></textarea>
                                            </div>

                                            <div class="column lg-12">
                                                <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large u-fullwidth" value="Add Comment" type="submit">
                                            </div>

                                        </fieldset>
                                    </form> <!-- end form -->

                            </div> <!-- end content-primary -->

                        </article> <!-- end entry -->

                    </div>
                </div> <!-- end entry-wrap -->
        </section> <!-- end s-content -->


        <!-- # site-footer
        ================================================== -->
        <footer id="colophon" class="s-footer">

            <div class="row s-footer__subscribe">
                <div class="column lg-12">

                    <h2>
                    Subscribe to Our Newsletter.
                    </h2>
                    <p>
                    Subscribe now to get all latest updates
                    </p>

                    <form id="mc-form" class="mc-form">
                        <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center" placeholder="Your Email Address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
                        <input type="submit" name="subscribe" value="Subscribe" class="btn--small btn--primary u-fullwidth">
                        <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
                        <div class="mc-status"></div>
                    </form>

                </div>
            </div> <!-- end s-footer__subscribe -->

            <div class="row s-footer__main">

                <div class="column lg-5 md-6 tab-12 s-footer__about">
                    <h4>Spurgeon</h4>

                    <p>
                    Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation 
                    ullamco laboris nisi ut aliquip ex ea commodo 
                    </p>
                </div> <!-- end s-footer__about -->

                <div class="column lg-5 md-6 tab-12">
                    <div class="row">
                        <div class="column lg-6">
                            <h4>Categories</h4>
                            <ul class="link-list">
                                <li><a href="category.html">Lifestyle</a></li>
                                <li><a href="category.html">Workplace</a></li>
                                <li><a href="category.html">Inspiration</a></li>
                                <li><a href="category.html">Design</a></li>
                                <li><a href="category.html">Health</a></li>
                                <li><a href="category.html">Photography</a></li>
                            </ul>
                        </div>
                        <div class="column lg-6">
                            <h4>Site Links</h4>
                            <ul class="link-list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="category.html">Categories</a></li>
                                <li><a href="category.html">Blog</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="about.html">Contact</a></li>
                                <li><a href="#0">Terms & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> <!-- end s-footer__main -->

            <div class="row s-footer__bottom">

              
                <div class="column lg-5 md-6 tab-12">
                    <div class="ss-copyright">
                        <span>© Copyright Spurgeon 2021</span> 
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a> Distribution <a href="https://themewagon.com">ThemeWagon</a></span>
                    </div>
                </div>

            </div> <!-- end s-footer__bottom -->
           
            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 10.25L12 4.75L6.75 10.25"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25V5.75"/>
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->

        </footer><!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="assets/user/js/plugins.js"></script>
    <script src="assets/user/js/main.js"></script>

</body>
</html>