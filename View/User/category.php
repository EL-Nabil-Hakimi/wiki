<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>


    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category - Spurgeon</title>

 <style>
    #searshDiv{
        display: grid;
        grid-template-columns: 20% 20% 20% 20%;
        justify-content: center;
        width: 100%;
    }

    #searshDiv input{
        margin: 10px 30px ;
    }

    #searshDiv input[type = submit]{
        background-color: black;
        color: white;
    }
    @media (max-width: 1220px) {
    #searshDiv {
        display: grid;
        grid-template-columns: 30% 30% 30%;
        justify-content: center;
        width: 100%;
    }
}
    @media (max-width: 815px) {
    #searshDiv {
        display: grid;
        grid-template-columns: 40% 40%;
        justify-content: center;
        width: 100%;
    }
}
    @media (max-width: 700px) {
    #searshDiv {
        display: grid;
        grid-template-columns: 80%;
        justify-content: center;
        width: 100%;
    }

        
    }

    .entry__excerptff {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-height: 100px;
    }
 </style>

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
           
     <div class="row s-header__navigation">

        
    
            </div> <!-- end s-header__navigation -->

            <?php include("../View/User/nav.php"); ?>
  
            <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
            <a class="s-header__search-trigger" >
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z"></path>
                </svg>
            </a>

        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">

        
        <!-- pageheader -->
            <div class="s-pageheader">
                <div class="row">
                    <div class="column large-12">
                        <h1 class="page-title">
                            Wikies
                        </h1>
                       
                      

                    </div>
                       
                </div>
                <div id="searshDiv">
                         <input type="text" id="title" placeholder="Search By Title...">
                        <input type="text" id="category" placeholder="Search By Category...">
                        <input type="text" id="tags" placeholder="Search By Tage...">
                        <input type="submit" value='Search' onclick="search()">
                </div>
            </div> <!-- end s-pageheader-->


            <!--  masonry -->
            <div id="bricks" class="bricks">

                <div class="masonry">

                    <div class="bricks-wrapper" id="MyDives" data-animate-block>

                        <div class="grid-sizer"></div>

                        <?php   foreach ($results As $result): ?>

                            <article class="brick entry" data-animate-el >
        
        <div class="entry__thumb">
            <a href="?route=info_page_user&id=<?= $result['id'] ?>" class="thumb-link">
                <img src="<?= $result['image']; ?>" 
                 alt="">
            </a>
        </div> <!-- end entry__thumb -->

        <div class="entry__text">
            <div class="entry__header">
                <div class="entry__meta">
                    <span class="cat-links">
                        <a >Created By</a>
                    </span>
                    <span class="byline">
                        By:
                        <a href="#0"><?= $result['name'] ?></a>
                    </span>
                </div>
               
                <h1 class="entry__title"><a ><?= $result['title'] ?></a></h1>
             </div>
            <div class="entry__excerpt"  style="max-height:200px;">
                <p class="entry__excerptff" >
                    <?= $result['description'] ?>
                </p>
            </div>
            <div class="entry__meta">
                  
                  <span class="byline">
                      At :
                      <a href="#0"><?= $result['date'] ?></a>
                  </span>
              </div>
            <a class="entry__more-link" href="#0">Read More</a>
        </div> <!-- end entry__text -->
    
        
    </article> <!-- end article -->
                                <?php endforeach ?>
                    </div> <!-- end bricks-wrapper -->

                </div> <!-- end masonry-->


                <!-- pagination -->
                <div class="row pagination">
                    <div class="column lg-12">
                        <nav class="pgn">
                            <ul>
                                <li>
                                    <a class="pgn__prev" href="#0">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li><a class="pgn__num" href="#0">1</a></li>
                                <li><span class="pgn__num current">2</span></li>
                                <li><a class="pgn__num" href="#0">3</a></li>
                                <li><a class="pgn__num" href="#0">4</a></li>
                                <li><a class="pgn__num" href="#0">5</a></li>
                                <li><span class="pgn__num dots">…</span></li>
                                <li><a class="pgn__num" href="#0">8</a></li>
                                <li>
                                    <a class="pgn__next" href="#0">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H4.75"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav> <!-- end pgn -->
                    </div> <!-- end column -->
                </div> <!-- end pagination -->

            </div> <!-- end bricks -->

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
    <script src="assets/user/js/search.js"></script>

</body>
</html>