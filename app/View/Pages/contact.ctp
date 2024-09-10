    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Contato</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contato</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--google map start-->
     <div class="contact-map">
         <div id="map-canvas" style="width: 100%; height: 400px"></div>
     </div>
     <!--google map end-->

     <!--container start-->
    <div class="container">


        <div class="row">
            <div class="col-lg-5 col-sm-5 address">
                <h4>Campinas</h4>
                <p>
                    Avenida João Batista Leone 46 <br />
                    Parque Empresarial Adelelmo Corradini - Itatiba-SP<br/>
                    CEP 13257-573.
                </p>
                <br>
                <br>
                <br>
                <p>
                    Fone <br/>
                    <span class="muted">(19) 2515-1793</span><br/>
                    Email <br/>
                    <span class="muted">comercial@ifocusautomacao.com.br</span>
                </p>
            </div>
            <div class="col-lg-7 col-sm-7 address">
                <h4>Mande sua Mensagem</h4>
                <div class="contact-form">
                    <?php echo $this->Form->create('Page', array('action' => 'send')); ?>
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <?php echo $this->Form->input('name', array('label' => false, 'maxlength' => 100, "class" => "form-control")); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <?php echo $this->Form->input('email', array('label' => false, 'maxlength' => 100, "type" => "email", "class" => "form-control")); ?>
                        </div>
                        <div class="form-group">
                            <label for="phone">Fone</label>
                            <?php echo $this->Form->input('phone', array('label' => false, 'maxlength' => 100, "class" => "form-control")); ?>
                        </div>
                        <div class="form-group">
                            <label for="phone">Mensagem</label>
                            <?php echo $this->Form->input('message', array('label' => false, 'rows' => 5, "class" => "form-control")); ?>
                        </div>
                        <?php echo $this->Form->end(array("label" => "Enviar", "class" => "btn btn-danger")); ?>
                </div>
            </div>
        </div>

    </div>
    <!--container end-->