
function criarHTML(idLivro){

    let nomeLivro = document.querySelector("#"+idLivro).value;

    let article = document.createElement("article");
    let divImagem = document.createElement("div");
    let divDetalhes = document.createElement("div");
    let divMarcadores = document.createElement("div");

    let img = document.createElement("img");

    let hTitulo = document.createElement("h3");
    let hPaginas = document.createElement("h3");
    let hAutores = document.createElement("h3");
    let spanTitulo = document.createElement("span");
    let spanPaginas = document.createElement("span");
    let spanAutores = document.createElement("span");

    let marcadorLido = criarMarcador("book", 0);
    let marcadorFavorito = criarMarcador("favorite", 0);

    img.setAttribute("src", "img/book.webp");
    img.setAttribute("alt", "Imagem do livro: " + nomeLivro);

    divDetalhes.setAttribute("class", "detalhes");
    hTitulo.innerHTML = "Livro: ";
    hPaginas.innerHTML = "Paginas: ";
    hAutores.innerHTML = "Autor/a/as/es: ";

    spanTitulo.innerHTML = nomeLivro;
    spanPaginas.innerHTML = "???";
    spanAutores.innerHTML = "???";

    divImagem.appendChild(img);

    hTitulo.appendChild(spanTitulo);
    hPaginas.appendChild(spanPaginas);
    hAutores.appendChild(spanAutores);

    divDetalhes.appendChild(hTitulo);
    divDetalhes.appendChild(hPaginas);
    divDetalhes.appendChild(hAutores);

    divMarcadores.appendChild(marcadorLido);
    divMarcadores.appendChild(marcadorFavorito);

    article.appendChild(divImagem);
    article.appendChild(divDetalhes);
    article.appendChild(divMarcadores);
    document.querySelector("#sectionLivros").appendChild(article);
}

function criarMarcador(icone, numero){
    let div = document.createElement("div");
    let spanIcone = document.createElement("span");
    let spanNumero = document.createElement("span");

    div.setAttribute("class", "marcadores");
    spanIcone.setAttribute("class", "material-icons");
    spanNumero.setAttribute("class", "contador rounded-circle");

    spanIcone.innerHTML = icone;
    spanNumero.innerHTML = numero;

    div.appendChild(spanIcone);
    div.appendChild(spanNumero);

    return div;
}
