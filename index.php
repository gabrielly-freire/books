<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/criar-livro.js" defer></script>
</head>
<body>
    <header>
        <aside>
            <form action="">
                <div class="form-group">
                    <label for="txt_email">e-mail</label><input type="email" name="txt_email" id="txt_email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txt_senha">senha</label><input type="password" name="txt_senha" id="txt_senha" class="form-control">
                </div>
                <a href="#">Esqueci a senha</a>
                <div>
                    <input type="submit" value="Login" class="btn btn-primary">
                    <a href="#" class="btn btn-primary">Cadastre-se</a>
                </div>
            </form>
        </aside>
        <h1>
            <?= "Books" ?>
        </h1>
        <h2>
            <?php 
            echo "os mais temidos";
            ?>
        </h2>
    </header>
    <main>
        <form action="" class="form-inline">
            <div class="form-group">
                <input type="text" name="txt_livro" id="txt_livro" class="form-control">
                <input type="button" value="Salvar" class="btn btn-primary" onclick="criarHTML('txt_livro')">
            </div>
        </form>
        <section id="sectionLivros">
            <?php 
            require_once "model/Conexao.php";

            $sql = "select * from book;";

            if(!Conexao::execWithReturn($sql)){
                 echo Conexao::getErro();
                 exit(1);
            }
            //print_r(Conexao::getData());
            $dados = Conexao::getData();
            //foreach($dados as $livro){
            foreach($dados as $livro):

            ?>
            <article>
                <div>
                    <img src="img/book.webp" alt="imagem do livro">
                </div>
                <div class="detalhes">
                    <h3>Livro: <span>
                        <?= $livro["nome"]; ?>
                    </span></h3>
                    <h3>Páginas: <span>
                    <?= $livro["paginas"]; ?>
                    </span></h3>
                    <h3>Autor/a/as/es: <span>
                        <?= $livro["autor"]; ?></span></h3>
                </div>
                <div>
                    <div class="marcadores">
                        <span class="material-icons">
                            book
                        </span>
                        <span class="contador rounded-circle">
                            12
                        </span>
                    </div>
                    
                    <div class="marcadores"> 
                        <span class="material-icons">
                            favorite
                        </span>
                        <span class="contador rounded-circle">
                            15
                        </span>
                    </div>
                </div>
            </article>
            <?php
            //}//foreach
            endforeach;
            ?>
        </section>
    </main>
    
</body>
</html>