<?php

    // Page Title
    $pageTitle = "Fale Conosco";

    // Functions for the operation of the site
    require 'inc/functions.php';

	// HTML Start
	echo "<!DOCTYPE html>";

	echo "\n<html lang=".'"pt-br"'.">\n";

    // Head Tags
    require 'template-parts/head.php';

    // Body
    echo "\n    <body>";

    // Preloader
    require 'template-parts/preloader.php';

    // Navbar
    require 'template-parts/navbar.php';

?>

        <section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Fale Conosco</h1>
                    <p class="f_400 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse pear shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p>
                </div>
            </div>
        </section>

        <section class="contact_info_area sec_pad bg_color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 pr-0">
                        <div class="contact_info_item">
                            <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Endereço do escritório</h6>
                            <p class="f_400 f_size_15">Av. Brig. Faria Lima, 1451, Guarulhos-SP.</p>
                        </div>
                        <div class="contact_info_item">
                            <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Informação de contato</h6>
                            <p class="f_400 f_size_15"><span class="f_400 t_color3">Telefone:</span> <a href="tel:11986904543">(11) 9 8690-4543</a></p>
                            <p class="f_400 f_size_15"><span class="f_400 t_color3">Email:</span> <a href="mailto:contato@blessedcorporation.com.br">contato@blessedcorporation.com.br</a></p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mapbox">
                            <div id="mapBox" class="row m0" data-lat="-23.44278674" data-lon="-46.52222657" data-zoom="10" data-info="Av. Brig. Faria Lima, 1451, Guarulhos-SP." data-marker="img/map.png" data-mlat="-23.44278674" data-mlon="-46.52222657">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_form">
                    <h2 class="f_p f_size_22 t_color3 f_600 l_height28 mt_100 mb_40">Deixe uma mensagem</h2>
                    <form action="contact_process.php" class="contact_form_box" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group text_box">
                                    <input type="text" id="name" name="name" placeholder="Seu nome">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group text_box">
                                    <input type="text" name="email" id="email" placeholder="Seu email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group text_box">
                                    <input type="text" id="subject" name="subject" placeholder="Assunto">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group text_box">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Digite sua mensagem . . ."></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn_three">Enviar Mensagem</button>
                    </form>
                    <div id="success">Sua mensagem foi enviada com sucesso!</div>
                    <div id="error">Oops! Há algo errado. Por favor, tente novamente</div>
                </div>
            </div>
        </section>

<?php

    // Footer
    require 'template-parts/footer.php';

    // Necessary functions for the functioning of the site
    require 'vendors/compiled-scripts/scripts.php';

    // Close Body
    echo "\n    </body>";

    // HTML End
    echo "\n\n</html>";
    
?>