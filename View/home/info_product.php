<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Standard Post - Spurgeon</title>

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

            <?php include("../View/home/nav.php"); ?>

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
        <?php foreach($results AS $result): ?>
        ================================================== -->
        <div id="content" class="s-content s-content--blog">

                <div class="row entry-wrap">
                    <div class="column lg-12">
                        <article class="entry format-standard">

                            <header class="entry__header">
    
                                <h1 class="entry__title">
                                    <?= $result['title'] ;?>
                            </h1>

                                <div class="entry__meta">
                                    <div class="entry__meta-author">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <circle cx="12" cy="8" r="3.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.8475 19.25H17.1525C18.2944 19.25 19.174 18.2681 18.6408 17.2584C17.8563 15.7731 16.068 14 12 14C7.93201 14 6.14367 15.7731 5.35924 17.2584C4.82597 18.2681 5.70558 19.25 6.8475 19.25Z"></path>
                                        </svg>
                                        <a ><?= $result['name'] ?></a> 
                                    </div>
                                    <div class="entry__meta-date">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5"></circle>
                                            <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
                                        </svg>
                                            <?= $result['date'] ?>
                                    </div>
                                    <div class="entry__meta-cat">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 17.25V9.75C19.25 8.64543 18.3546 7.75 17.25 7.75H4.75V17.25C4.75 18.3546 5.64543 19.25 6.75 19.25H17.25C18.3546 19.25 19.25 18.3546 19.25 17.25Z"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 7.5L12.5685 5.7923C12.2181 5.14977 11.5446 4.75 10.8127 4.75H6.75C5.64543 4.75 4.75 5.64543 4.75 6.75V11"></path>
                                        </svg>
                                          
                                        <span class="cat-links">

                                            <a href="#0">Category</a>
                                            <a href="#0"><?= $result['ctgrname'] ?></a>

                                        </span>
                                    </div>
                                </div>
                            </header>

                            <div class="entry__media">
                                <figure class="featured-image" style="width:100% ; display:flex ; justify-content : center;">
                                    <img src="<?= $result['image'] ?> " sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                                </figure>
                            </div>

                            <div class="content-primary">

                                <div class="entry__content">
                                   <p  style="text-align: justify;"> <?= $result['description'] ?> </p>
                                            
                        </article> <!-- end entry -->

                        <!-- comments -->
                        <div class="comments-wrap">

                            <div id="comments">
                                <div class="large-12">

                                    <h3>5 Comments</h3>

                                    <!-- START commentlist -->
                                    <ol class="commentlist">

                                        <li class="depth-1 comment">

                                            <div class="comment__avatar">
                                                <img class="avatar" src="assets/user/images/avatars/user-01.jpg" alt="" width="50" height="50">
                                            </div>

                                            <div class="comment__content">

                                                <div class="comment__info">
                                                    <div class="comment__author">Itachi Uchiha</div>

                                                    <div class="comment__meta">
                                                        <div class="comment__time">Aug 15, 2021</div>
                                                        <div class="comment__reply">
                                                            <a class="comment-reply-link" href="#0">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="comment__text">
                                                <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                                                facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                                                </div>

                                            </div>

                                        </li> <!-- end comment level 1 -->

                                        <li class="thread-alt depth-1 comment">

                                            <div class="comment__avatar">
                                                <img class="avatar" src="assets/user/images/avatars/user-04.jpg" alt="" width="50" height="50">
                                            </div>

                                            <div class="comment__content">

                                                <div class="comment__info">
                                                    <div class="comment__author">John Doe</div>

                                                    <div class="comment__meta">
                                                        <div class="comment__time">Aug 14, 2021</div>
                                                        <div class="comment__reply">
                                                            <a class="comment-reply-link" href="#0">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="comment__text">
                                                <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
                                                urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
                                                tantas semper delicatissimi.</p>
                                                </div>

                                            </div>

                                            <ul class="children">

                                                <li class="depth-2 comment">

                                                    <div class="comment__avatar">
                                                        <img class="avatar" src="assets/user/images/avatars/user-03.jpg" alt="" width="50" height="50">
                                                    </div>

                                                    <div class="comment__content">

                                                        <div class="comment__info">
                                                            <div class="comment__author">Kakashi Hatake</div>

                                                            <div class="comment__meta">
                                                                <div class="comment__time">Aug 14, 2021</div>
                                                                <div class="comment__reply">
                                                                    <a class="comment-reply-link" href="#0">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="comment__text">
                                                            <p>Duis sed odio sit amet nibh vulputate
                                                            cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                                                            cursus a sit amet mauris</p>
                                                        </div>

                                                    </div>

                                                    <ul class="children">

                                                        <li class="depth-3 comment">

                                                            <div class="comment__avatar">
                                                                <img class="avatar" src="assets/user/images/avatars/user-04.jpg" alt="" width="50" height="50">
                                                            </div>

                                                            <div class="comment__content">

                                                                <div class="comment__info">
                                                                    <div class="comment__author">John Doe</div>

                                                                    <div class="comment__meta">
                                                                        <div class="comment__time">Aug 14, 2021</div>
                                                                        <div class="comment__reply">
                                                                            <a class="comment-reply-link" href="#0">Reply</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="comment__text">
                                                                <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                                                etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                                                </div>

                                                            </div>

                                                        </li>

                                                    </ul>

                                                </li>

                                            </ul>

                                        </li> <!-- end comment level 1 -->

                                        <li class="depth-1 comment">

                                            <div class="comment__avatar">
                                                <img class="avatar" src="assets/user/images/avatars/user-02.jpg" alt="" width="50" height="50">
                                            </div>

                                            <div class="comment__content">

                                                <div class="comment__info">
                                                    <div class="comment__author">Shikamaru Nara</div>

                                                    <div class="comment__meta">
                                                        <div class="comment__time">Aug 13, 2021</div>
                                                        <div class="comment__reply">
                                                            <a class="comment-reply-link" href="#0">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="comment__text">
                                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                                </div>

                                            </div>

                                        </li>  <!-- end comment level 1 -->

                                    </ol>
                                    <!-- END commentlist -->

                                </div> <!-- end col-full -->
                            </div> <!-- end comments -->


                            <div class="comment-respond">

                                <!-- START respond -->
                                <div id="respond">

                                    <h3>
                                    Add Comment 
                                    <span>Your email address will not be published.</span>
                                    </h3>

                                    <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                                        <fieldset class="row">

                                            <div class="column lg-6 tab-12 form-field">
                                                <input name="cName" id="cName" class="u-fullwidth h-remove-bottom" placeholder="Your Name" value="" type="text">
                                            </div>

                                            <div class="column lg-6 tab-12 form-field">
                                                <input name="cEmail" id="cEmail" class="u-fullwidth h-remove-bottom" placeholder="Your Email" value="" type="text">
                                            </div>

                                            <div class="column lg-12 form-field">
                                                <input name="cWebsite" id="cWebsite" class="u-fullwidth h-remove-bottom" placeholder="Website" value="" type="text">
                                            </div>

                                            <div class="column lg-12 message form-field">
                                                <textarea name="cMessage" id="cMessage" class="u-fullwidth" placeholder="Your Message"></textarea>
                                            </div>

                                            <div class="column lg-12">
                                                <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large u-fullwidth" value="Add Comment" type="submit">
                                            </div>

                                        </fieldset>
                                    </form> <!-- end form -->

                                </div>
                                <!-- END respond-->

                            </div> <!-- end comment-respond -->

                        </div> <!-- end comments-wrap -->

                    </div>
                </div> <!-- end entry-wrap -->
        </section> <!-- end s-content -->

<?php endforeach  ?>
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