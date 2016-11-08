<!doctype html>
<!--[if IE 7]> <html class="no-js ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8" lang="pt-br"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="pt-br"> <![endif]-->
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Contact | UIKIT</title>
    <?php include "build/in/meta.php"; ?>
    <?php include "build/in/estilos.php"; ?>
</head>
<body>
    <!-- Header -->
    <?php include "build/in/header.php"; ?>

    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-header">
                   <h1>Contact</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <form action="thanks.php">
                        <div class="form-group">
                            <label for="inputName">Nome</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="inputSubject">Assunto</label>
                            <input type="text" class="form-control" id="inputSubject" placeholder="Assunto">
                        </div>
                        <div class="form-group">
                            <label for="textMessage">Mensagem:</label>
                            <textarea name="textMessage" id="inputMessage" class="form-control" cols="100" rows="8"></textarea>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Aceito receber novidades do site
                            </label>
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg" value="Enviar mensagem">
                    </form>
                </div>
                <div class="col-md-4">
                   <div class="location">
                        <address>
                            <strong>SEDE</strong><br>
                            Rua Doutor Costa Junior, 465<br>
                            São Paulo, SP - 05002-000<br>
                            <abbr title="Phone">P:</abbr> +55 (11) 4321-1234
                        </address>
                        
                        <p><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Localização</a></p>
                   </div>
                   <hr>
                    <div class="contact-email">
                        <address>
                            <strong>New Business</strong><br>
                            <a href="mailto:#">newbiz@example.com</a>
                        </address>

                        <address>
                            <strong>Marketing</strong><br>
                            <a href="mailto:#">mkt@example.com</a>
                        </address>
                        
                         <address>
                            <strong>PR</strong><br>
                            <a href="mailto:#">pr@example.com</a>
                        </address>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include "build/in/footer.php"; ?>

</body>
</html>

