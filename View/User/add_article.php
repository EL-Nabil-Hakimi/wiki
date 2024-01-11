<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NB wiki</title>

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
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <style>
        .checkbox-container {
                display: flex;
                align-items: center;
                padding:0px 10px;
            }

            .checkbox-container input {
                margin-right: 5px;
            }
         

    .checkbox-container input {
        transform: scale(1.5);
        margin-right : 10px;
        accent-color : black;
        cursor: pointer;
        position: relative;
        top: 8px;
    }
    
   
    </style>

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
    <div id="page" class="s-pagewrap ss-home">


        <!-- # site header 
        ================================================== -->
        <header id="masthead" class="s-header">

            <div class="s-header__branding">
                <p class="site-title">
                    <a href="index.html" rel="home">NB wiki</a>
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
            <a class="s-header__search-trigger" href="#">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z"></path>
                </svg>
            </a>

        </header> 


        <div class="comments-wrap">

            <div id="comments">
             
            </div> 

            <div class="comment-respond">

                <!-- START respond -->
                <div id="respond">

                    <h3>
                    Add Article 
                    </h3>

                    <form name="contactForm" id="contactForm" method="post" action="?route=add_wiki" enctype="multipart/form-data">
                        <fieldset class="row">

                        <div class="column lg-12 form-field" style="margin-bottom:30px">
                                 <input type="file" class="u-fullwidth h-remove-bottom" placeholder="Image..." style="cursor : pointer;" accept=".jpg, .jpeg, .png," name="image" required>
                            </div>
                            
                            <div class="column lg-12 form-field">
                                <input name="title" id="cWebsite" class="u-fullwidth h-remove-bottom" placeholder="title" value="" type="text" required>
                            </div>
                            
                            <div class="column lg-12 message form-field">
                                <textarea name="description" id="cMessage" class="u-fullwidth" style="resize: none;" placeholder="description" required></textarea>
                            </div>
                            
                            <div class="column lg-6 tab-12 form-field"  style="cursor: pointer; " >
                            <select name="category" required>
                                <option value="">Choese Your Category...</option>
                                <?php foreach($resultctgr As $ctgr): ?>
                                    <option value="<?= $ctgr['id'] ?>"><?= $ctgr['name'] ?></option>
                                    <?php endforeach ?>
                                    <!-- Add more options as needed -->
                                </select>                            
                            </div>

                            <div class="column lg-6 tab-12 form-field" style="margin-bottom:30px">
                                <h4 style="margin: 0;">Choese The Tags :</h4>
                                <div  style="cursor: pointer; overflow-y: scroll; max-height: 200px; padding:10px 20px">
                                    
                                    <?php foreach($resultstags as $resulttag): ?>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_<?= $resulttag['id'] ?>" name="selectedTags[]" value="<?= $resulttag['id'] ?>">
                                            <label for="checkbox_<?= $resulttag['id'] ?>"><?= $resulttag['name'] ?></label>
                                        </div>
                                    <?php endforeach; ?>
                                        
                                </div>
                                        
                            </div>
                           
                                        
                            </div>                              

                            

                            <div class="column lg-12">
                                <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large u-fullwidth" value="Add Article" type="submit">
                            </div>
                            
                        </fieldset>
                    </form> <!-- end form -->

                </div>
                <!-- END respond-->

            </div> <!-- end comment-respond -->

        </div> <!-- end comments-wrap -->

       
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
                    <h4>NB wiki</h4>

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
                        <span>© Copyright NB wiki 2021</span> 
                        <span>Design by <a href="https://www.NB wiki.com/">NB wiki</a> Distribution <a href="https://NB.com">NB</a></span>
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