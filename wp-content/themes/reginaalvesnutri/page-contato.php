<?php get_header(); ?>

    <div class="contato-box">
        <div class="col-lg-4 col-md-4">
            <h1 style="color: white">Natureza do Ser</h1></br>
            <h4 class="contato" style="margin-top: -10px">Alameda Uananá, 200 - Moema</br>
            São Paulo - SP</br>
            F. 11 5084-3568</br>
            C. 11 97278-9146 | 19 98174-6538</br>
            <a href="mailto:regina@reginaalvesnutri.com.br">regina@reginaalvesnutri.com.br</a></h4>
        </div>

        <div class="col-lg-offset-4 col-md-offset-5 contato-form">
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" role="form" method="post">
                <div class="form-group">
                    <input type="nome" class="form-control" id="form-name" name="form-name" placeholder="Seu nome">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Seu email">
                </div>
                <div class="form-group">
                <textarea class="form-control" rows="3" id="form-mensagem" name="form-mensagem" placeholder="Sua mensagem"></textarea>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    
<?php get_footer(); ?>