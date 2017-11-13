<?php 
include("header.php");
?>

<div class="page-header margin">
    <h1 class="h1-center">Contato <img src="img/potec.png" class="img-top" /></h1>
</div>

<div class="row contato">

    <div class="col-sm-6 col-md-6">
        <h3 class="h1-title">Preencha os campos abaixo</h3>
        <form>
            <div class="form-group menu-item">

                <input type="text" class="form-control" placeholder="Nome" id="nome">
            </div>
            
            <div class="form-group menu-item">

                <input type="email" class="form-control" placeholder="E-mail" id="email">
            </div>

            <div class="form-group menu-item">

                <input type="text" class="form-control" placeholder="Assunto" id="assunto">
            </div>

            <div class="form-group menu-item">

                <textarea class="form-control" rows="5" placeholder="Digite aqui sua mensagem" id="comment"></textarea>
            </div>


            <center><button type="submit" class="btn btn-default menu-item btn-contato">Enviar</button></center>
        </form>


    </div>

    <div class="col-sm-6 col-md-6 text-center">
        <img class="text-center img-contato" src="img/brand.png" width="30px" />

        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum.</p>

    </div>

</div>
<?php
include("footer.php");
?>
    