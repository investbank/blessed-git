<?php

    // Functions for the operation of the site
    require '../inc/functions.php';

	// HTML Start
	echo "<!DOCTYPE html>";

	echo "\n<html lang=".'"pt-br"'.">\n";

    // Head Tags
    require '../template-parts/head.php';

    // Body
    echo "\n    <body>";

    // Preloader
    require '../template-parts/preloader.php';

    // Navbar
    require '../template-parts/navbar.php';

?>

        <section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Nossos Trabalhos</h1>
                    <p class="f_400 w_color f_size_16 l_height26">Conheça alguns dos <br> Jeffrey bodge barney some dodgy.!!</p>
                </div>
            </div>
        </section>
        <section class="portfolio_area sec_pad bg_color">
            <div class="container">
                <div id="portfolio_filter" class="portfolio_filter mb_50">
                    <div data-filter="*" class="work_portfolio_item active">See All</div>
                    <div data-filter=".br" class="work_portfolio_item">Branding</div>
                    <div data-filter=".web" class="work_portfolio_item">Web Design</div>
                    <div data-filter=".fashion" class="work_portfolio_item">Fashion</div>
                    <div data-filter=".ux" class="work_portfolio_item">UI/UX</div>
                    <div data-filter=".product" class="work_portfolio_item">Product</div>
                </div>
                <div class="row portfolio_gallery mb-50" id="work-portfolio">
                    <div class="col-lg-3 col-sm-6 portfolio_item br ux mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid1.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid1.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="https://consorciodiretocaixa.com.br/" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Consórcio Direto Caixa</h3>
                                </a>
                                <!-- <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio_item fashion web mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid2.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid2.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="http://droitthemes.com/html/saasland/work-default.html" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Invest Bank Company</h3>
                                </a>
                                <!-- <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio_item product br mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid3.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid3.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="http://droitthemes.com/html/saasland/work-default.html" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Yazigi Caçapava</h3>
                                </a>
                                <!-- <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio_item ux web mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid4.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid4.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="http://droitthemes.com/html/saasland/work-default.html" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Portfolio Center Slider</h3>
                                </a>
                                <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio_item br ux mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid5.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid5.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="http://droitthemes.com/html/saasland/work-default.html" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Portfolio Center Slider</h3>
                                </a>
                                <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio_item fashion web mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid6.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid6.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="http://droitthemes.com/html/saasland/work-default.html" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Portfolio Center Slider</h3>
                                </a>
                                <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio_item product br mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid7.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid7.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="http://droitthemes.com/html/saasland/work-default.html" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Portfolio Center Slider</h3>
                                </a>
                                <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio_item ux web mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid8.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid8.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="http://droitthemes.com/html/saasland/work-default.html" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Inner Smart Watch</h3>
                                </a>
                                <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio_item ux web mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid1.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid1.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="http://droitthemes.com/html/saasland/work-default.html" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Inner Smart Watch</h3>
                                </a>
                                <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio_item fashion web mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid6.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid6.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="http://droitthemes.com/html/saasland/work-default.html" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Portfolio Center Slider</h3>
                                </a>
                                <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio_item product br mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid7.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid7.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="http://droitthemes.com/html/saasland/work-default.html" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Portfolio Center Slider</h3>
                                </a>
                                <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio_item ux web mb_50">
                        <div class="portfolio_img">
                            <a href="img/portfolio/2-columns/grid8.jpg" class="img_popup"><img class="img_rounded" src="img/portfolio/2-columns/grid8.jpg" alt=""></a>
                            <div class="portfolio-description">
                                <a href="http://droitthemes.com/html/saasland/work-default.html" class="portfolio-title">
                                    <h3 class="f_500 f_size_20 f_p mt_30">Inner Smart Watch</h3>
                                </a>
                                <div class="links"><a href="portfolio-grid-2col-4.html#">Branding,</a><a href="portfolio-grid-2col-4.html#">Fashion</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php

    // Footer
    require '../template-parts/footer.php';

    // Necessary functions for the functioning of the site
    require '../vendors/compiled-scripts/scripts.php';

    // Close Body
    echo "\n    </body>";

    // HTML End
    echo "\n\n</html>";
    
?>