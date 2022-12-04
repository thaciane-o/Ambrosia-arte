var produtos = [];

produtos.forEach(function(item) {
    addOption(item)
});

function addOption(valor) {
    var option = new Option(valor, valor);
    var select = document.getElementById("mySelect");
    select.add(option);
}

/* function adicionar(valor) {
    var select = document.getElementById("mySelect");
    select.innerHTML = '<span class="produto">' + valor + '</span>';
    produtos.push(valor);
    console.log(produtos);
}

function novoProduto(nomeP, preco) {
    var divP = document.getElementById("todosP");
    divP.innerHTML = "<div class='col mb-5'> <div class='card h-100'> <img class='card-img-top' src='assets/img/tinta.webp' alt='...' /><div class='card-body p-4'><div class='text-center'><h5 class='fw-bolder'>" + nomeP + "</h5>" + preco + "</div></div><div class='card-footer p-4 pt-0 border-top-0 bg-transparent'><div class='text-center'><a class='btn btn-outline-dark mt-auto' href='#' onclick='addOption('" + nomeP + " - " + preco + "')'>Adicionar</a></div></div></div></div>";
} */