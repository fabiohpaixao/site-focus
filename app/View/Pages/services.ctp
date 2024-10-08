    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Serviços</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">Serviços</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start
    <div class="container">
        <div class="row mbot50">
            <div class="col-lg-7 about">
                <h3>Lorem ispsum dolor emnet.</h3>
                <p>
                    Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore dolore magnm aliquam quaerat voluptatem.
                </p>
                <p>
                    Aenean nibh ante, lacinia non tincidunt nec, lobortis ut tellus. Sed in porta diam. Suspendisse potenti. Donec luctus ullamcorper nulla. Duis nec velit odio.
                </p>
            </div>
            <div class="col-lg-5">
                <div class="span5 about-carousel">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Carousel items --
                        <div class="carousel-inner">
                            <div class="active item">
                                <?php echo $this->Html->image("about_1.jpg"); ?>
                                <div class="carousel-caption">
                                    <p>Donec luctus ullamcorper nulla</p>
                                </div>
                            </div>
                            <div class="item">
                                <?php echo $this->Html->image("about_2.jpg"); ?>
                                <div class="carousel-caption">
                                    <p>Blanditiis praesentium voluptatum</p>
                                </div>
                            </div>
                            <div class="item">
                                <?php echo $this->Html->image("about_1.jpg"); ?>
                                <div class="carousel-caption">
                                    <p>Honest and amazing things that bring positive results</p>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel nav --
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                            <i class="icon-angle-left"></i>
                        </a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
                            <i class="icon-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <?php if(is_null($service) || strlen($service) < 1): ?>
      <div class="gray-box mbot50">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="text-center feature-head">
                        <h1> Nossos Serviços </h1>
                        <p>Fornecemos as melhores soluções em automação, garantindo sempre inovação, tecnologia e qualidade.</p>
                    </div>
                    <div class="services">
                        <div class="col-lg-6 col-sm-6">
                            <div class="icon-wrap ico-bg round">
                                <i class="icon-gears"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Automação Industrial</h3>
                                <p>Garantimos maior produtividade, menor índice perdas e melhora na qualidade dos produtos. Através de sistemas integrados de supervisão, controle e gerenciamento de processos industriais.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="icon-wrap ico-bg round">
                                <i class="icon-building"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Automação Predial</h3>
                                <p>Seguindo o Conceito de Edifício Verde (Edifício Sustentável), a iFocus surge como uma grande parceira no fornecimento de soluções para Automação Predial,proporcionando conforto, segurança e economia nestes empreendimentos, através da integração de diversas tecnologias.</p>
                            </div>
                        </div>
                    </div>
                    <div class="services">
                        <div class="col-lg-6 col-sm-6">
                            <div class="icon-wrap ico-bg round">
                                <i class="icon-tasks"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Gerenciamento e Controle de Batch ISA-88</h3>
                                <p>Os Sistemas de gerenciamento e controle Batch ISA-88 tem como principal objetivo a padronização no desenvolvimento de soluções para processos de produção por batelada, além proporcionar maior eficiência, flexibilidade, variedade e qualidade dos produtos, esses sistemas registram e fornecem relatórios das bateladas produzidas.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="icon-wrap ico-bg round">
                                <i class="icon-bar-chart"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Sistema de Execução de Manufatura (MES)</h3>
                                <p>Sistemas MES possuem grande capacidade de coleta de dados produtivos de processos, máquinas e equipamentos. São ferramentas poderosas que exibem as informações do chão de fábrica em tempo real, através de relatórios gerenciais confiáveis, que são a base para a tomada de decisão em um ambiente industrial.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
 
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            
            <?php if($service == 'industrial'): ?>
            
                <div class="service">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="icon-wrap ico-bg round">
                                    <i class="icon-gears"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">Automa&ccedil;&atilde;o Industrial</h3>
                                <p>A iFocus oferece as melhores solu&ccedil;&otilde;es em Automa&ccedil;&atilde;o Industrial.</p>
                                <p>Garantimos:Maior produtividade, menor &iacute;ndice perdas e melhora na qualidade dos produtos. Atrav&eacute;s de sistemas integrados de supervis&atilde;o, controle e gerenciamento de processos industriais.</p>
                                <p>Contamos com uma equipe altamente capacitada nas seguintes &aacute;reas:</p>
                                <ul>
                                    <li>Processos de Fabrica&ccedil;&atilde;o</li>
                                    <li>Linhas de Produ&ccedil;&atilde;o</li>
                                    <li>Maquinas e Equipamentos</li>
                                    <li>Utilidades</li>
                                    <li>CIP (Clean-In-Place) &ndash; Limpeza Autom&aacute;tica de Processos e Linhas de Produ&ccedil;&atilde;o</li>
                                    <li>Desenvolvimento de Software de PLC, Aplicativos de Supervis&oacute;rio e IHM</li>
                                    <li>Configura&ccedil;&atilde;o de Redes de campo</li>
                                    <li>Banco de Dados</li>
                                    <li>Teste de Aceita&ccedil;&atilde;o em Fabrica (TAF)</li>
                                    <li>Comissionamento e Start-up</li>
                                    <li>Treinamento e Assist&ecirc;ncia T&eacute;cnica</li>
                                </ul>
                            </div>
                        </div>
                    </div>

             <?php endif; ?>

            <?php if($service == 'predial'): ?>
            
                <div class="service">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="icon-wrap ico-bg round">
                                    <i class="icon-building"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">Automa&ccedil;&atilde;o Predial</h3>
                                <p>Seguindo o Conceito de Edif&iacute;cio Verde (Edif&iacute;cio Sustent&aacute;vel), a iFocus surge como uma grande parceira no fornecimento de solu&ccedil;&otilde;es para Automa&ccedil;&atilde;o Predial, proporcionando conforto, seguran&ccedil;a e economia nestes empreendimentos, atrav&eacute;s da integra&ccedil;&atilde;o de todas as tecnologias prediais como:</p>
                                <ul>
                                    <li>Gerenciamento de Energia El&eacute;trica</li>
                                    <li>Utilidades</li>
                                    <li>Climatiza&ccedil;&atilde;o (HVAC)</li>
                                    <li>Detec&ccedil;&atilde;o e Alarme de Inc&ecirc;ndio</li>
                                    <li>Controle de Acesso</li>
                                    <li>Circuito Fechado de TV (CFTV)</li>
                                    <li>Integra&ccedil;&atilde;o</li>
                                </ul>
                            </div>
                        </div>
                    </div>

             <?php endif; ?>

             <?php if($service == 'batch'): ?>
            
                <div class="service">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="icon-wrap ico-bg round">
                                    <i class="icon-tasks"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">Gerenciamento e Controle de Batch ISA-88</h3>
                                <p>Os Sistemas de gerenciamento e controle Batch ISA-88 tem como principal objetivo a padroniza&ccedil;&atilde;o no desenvolvimento de solu&ccedil;&otilde;es para processos de produ&ccedil;&atilde;o por batelada, al&eacute;m proporcionar maior efici&ecirc;ncia, flexibilidade, variedade e qualidade dos produtos, esses sistemas registram e fornecem relat&oacute;rios das bateladas produzidas. </p>
                                <p>A iFocus integras as melhores solu&ccedil;&otilde;es do mercado e fornece consultoria nas &aacute;reas:</p>
                                <ul>
                                    <li>Defini&ccedil;&atilde;o de Processo (Modelamento)</li>
                                    <li>Defini&ccedil;&atilde;o de Units, Equipments e Phases</li>
                                    <li>Cria&ccedil;&atilde;o de Especifica&ccedil;&atilde;o Funcional do Processo</li>
                                    <li>Gerenciamento de Receitas de Produ&ccedil;&atilde;o</li>
                                    <li>Parametriza&ccedil;&atilde;o de Produ&ccedil;&atilde;o</li>
                                    <li>Flexibilidade</li>
                                    <li>Controle de Lotes</li>
                                    <li>Relat&oacute;rios de Produ&ccedil;&atilde;o</li>
                                </ul>
                            </div>
                        </div>
                    </div>

             <?php endif; ?>
             
             <?php if($service == 'mes'): ?>
            
                <div class="service">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="icon-wrap ico-bg round">
                                    <i class="icon-bar-chart"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">Sistema de Execu&ccedil;&atilde;o de Manufatura (MES)</h3>
                                <p>Sistemas MES possuem grande capacidade de coleta de dados produtivos de processos, m&aacute;quinas e equipamentos.  </p>
                                <p>S&atilde;o ferramentas poderosas que exibem as informa&ccedil;&otilde;es do ch&atilde;o de f&aacute;brica em tempo real, atrav&eacute;s de relat&oacute;rios gerenciais confi&aacute;veis, que s&atilde;o a base para a tomada de decis&atilde;o em um ambiente industrial. </p>
                                <p>A iFocus fornece solu&ccedil;&otilde;es completas que abrangem:</p>
                                <ul>
                                    <li>Coleta de Dados de ch&atilde;o de f&aacute;brica</li>
                                    <li>Mapeamento de Perdas</li>
                                    <li>Mapeamento de Paradas</li>
                                    <li>An&aacute;lise de Qualidade, Perdas, Paradas</li>
                                    <li>C&aacute;lculo de Efici&ecirc;ncia dos Equipamentos (OEE)</li>
                                    <li>Indicador Chave de Desempenho (KPI)</li>
                                    <li>Relat&oacute;rios (Hist&oacute;rico, Produ&ccedil;&atilde;o, OEE e KPI)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

             <?php endif; ?>
             
                </div>
            </div>
        </div>
<!--
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="skills">Other Services</h3>
                <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archgit, magnam aliquam quaerat voluptatem. Asunt in anim uis aute irure dolor ins. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes ser.</p>
                <section class="panel mtop30 tab">
                    <header class="panel-heading service-tab tab-bg-dark-navy-blue">
                        <ul class="nav nav-tabs nav-justified ">
                            <li class="active">
                                <a data-toggle="tab" href="#service1">
                                    service #1
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#service2">
                                    service #2
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#service3">
                                    service #3
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#service4">
                                    service #4
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#service5">
                                    service #5
                                </a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content tasi-tab">
                            <div id="service1" class="tab-pane active">
                                <div class="services">
                                    <div class="icon-wrap ico-bg round">
                                        <i class=" icon-bullhorn"></i>
                                    </div>
                                    <div class="content">
                                        <p>Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
                                            Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                                        <p>Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="service2" class="tab-pane">
                                <div class="services">
                                    <div class="icon-wrap ico-bg round">
                                        <i class="icon-tint"></i>
                                    </div>
                                    <div class="content">
                                        <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archgit, magnam aliquam quaerat voluptatem. Asunt in anim uis aute irure dolor ins. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes ser.</p>
                                        <p>Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
                                            Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                                        <p>Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="service3" class="tab-pane">
                                <div class="services">
                                    <div class="icon-wrap ico-bg round">
                                        <i class=" icon-umbrella"></i>
                                    </div>
                                    <div class="content">
                                        <p> Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
                                            Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                                        <p>Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="service4" class="tab-pane">
                                <div class="services">
                                    <div class="icon-wrap ico-bg round">
                                        <i class=" icon-suitcase"></i>
                                    </div>
                                    <div class="content">
                                        <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archgit, magnam aliquam quaerat voluptatem. Asunt in anim uis aute irure dolor ins. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes ser.</p>
                                        <p>
                                            Sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                                        <p>Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="service5" class="tab-pane">
                                <div class="services">
                                    <div class="icon-wrap ico-bg round">
                                        <i class=" icon-trophy"></i>
                                    </div>
                                    <div class="content">
                                        <p>Tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
                                            Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                                        <p>Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere. Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

-->
    <!--container end--> 