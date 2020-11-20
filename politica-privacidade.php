<?php

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

    <section class="breadcrumb_area"
        style="background-image: url('img/headers/termos-politicas.jpeg');background-position:  center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Política de Privacidade</h1>
                <p class="f_400 w_color f_size_16 l_height26">A política de privacidade é um documento que explica como
                    um website <br> lida com toda a informação coletada dos seus utilizadores e/ou clientes.</p>
            </div>
        </div>
    </section>

    <section class="blog_area sec_pad pt-5 cus_ptB_Bl">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_single mb_50">
                        <p class="f_400 mb-30">
                        </p>

                        <p>A sua privacidade é importante para nós. É política da Blessed Corporation respeitar a sua
                            privacidade em relação a qualquer informação sua que possamos coletar no site <a
                                href="https://www.blessedcorporation.com.br">Blessed Corporation</a>, e outros sites que
                            possuímos e operamos.</p>

                        <p>Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer
                            um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento.
                            Também informamos por que estamos coletando e como será usado.</p>

                        <p>Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço
                            solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente
                            aceitáveis para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou
                            modificação não autorizados.</p>

                        <p>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto
                            quando exigido por lei.</p>

                        <p>O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente
                            de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar
                            responsabilidade por suas respectivas políticas de privacidade.</p>

                        <p>Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez
                            não possamos fornecer alguns dos serviços desejados.</p>

                        <p>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de
                            privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados
                            do usuário e informações pessoais, entre em contacto conosco.</p>

                        <h3 class="mt-5">Compromisso do Usuário</h3>

                        <p>O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Blessed
                            Corporation oferece no site e com caráter enunciativo, mas não limitativo:</p>

                        <ul>

                            <li>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem
                                pública;</li>

                            <li>B) Não divulgar conteúdo ou propaganda de natureza racista, xenofóbica, <a
                                    href="https://ondeapostar.pt/" style="color:#576d96;text-decoration:none;">apostas
                                    online</a>, pornografia ilegal, de apologia ao terrorismo ou contra os direitos
                                humanos;</li>

                            <li>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) da Blessed
                                Corporation, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus
                                informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de
                                causar danos anteriormente mencionados.</li>

                        </ul>

                        <h3 class="mt-5">Mais informações</h3>

                        <p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você
                            não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso
                            interaja com um dos recursos que você usa em nosso site.</p>

                        <p>Esta política é efetiva a partir de <strong>Novembro</strong>/<strong>2020</strong>.</p>

                    </div>
                </div>
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