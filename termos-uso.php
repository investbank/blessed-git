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

        <section class="breadcrumb_area" style="background-image: url('img/headers/termos-politicas.jpeg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Termos de Uso</h1>
                    <p class="f_400 w_color f_size_16 l_height26">São os termos e condições que deverão ser observados pelo
                        usuário na <br> utilização do site e, principalmente de suas funcionalidades e ferramentas.</p>
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
                            <p>Ao acessar ao site <a href='https://www.blessedcorporation.com.br'>Blessed Corporation</a>, você concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis.</p>
                            <h3 class="mt-5">2. Uso de Licença</h3>
                            <p>É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site Blessed Corporation , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não pode: </p>
                            <ol>
                                <li>modificar ou copiar os materiais;  </li>
                                <li>usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial);  </li>
                                <li>tentar descompilar ou fazer engenharia reversa de qualquer software contido no site Blessed Corporation;  </li>
                                <li>remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou  </li>
                                <li>transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.</li>
                            </ol>
                            <p>Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser rescindida por Blessed Corporation a qualquer momento. Ao encerrar a visualização desses materiais ou após o término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em formato eletrónico ou impresso.</p>
                            <h3 class="mt-5">3. Isenção de responsabilidade</h3>
                            <ol>
                                <li>Os materiais no site da Blessed Corporation são fornecidos 'como estão'. Blessed Corporation não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos. </li>
                                <li>Além disso, o Blessed Corporation não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</li>
                            </ol>
                            
                            <h3 class="mt-5">4. Limitações</h3>
                            <p>Em nenhum caso o Blessed Corporation ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em Blessed Corporation, mesmo que Blessed Corporation ou um representante autorizado da Blessed Corporation tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</p>
                            <h3 class="mt-5">5. Precisão dos materiais</h3>
                            <p>Os materiais exibidos no site da Blessed Corporation podem incluir erros técnicos, tipográficos ou fotográficos. Blessed Corporation não garante que qualquer material em seu site seja preciso, completo ou atual. Blessed Corporation pode fazer alterações nos materiais contidos em seu site a qualquer momento, sem aviso prévio. No entanto, Blessed Corporation não se compromete a atualizar os materiais.</p>
                            <h3 class="mt-5">6. Links</h3>
                            <p>O Blessed Corporation não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por Blessed Corporation do site. O uso de qualquer site vinculado é por conta e risco do usuário.</p>
                            </p>
                            
                            <h4 class="mt-5">Modificações</h4>
                            <p>A Blessed Corporation pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</p>
                            
                            <h4 class="mt-5">Lei aplicável</h4>
                            <p>Estes termos e condições são regidos e interpretados de acordo com as leis do Blessed Corporation e você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</p>
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