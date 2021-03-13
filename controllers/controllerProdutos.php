
<?php

function ListarProdutos() {
    foreach ($item as $e) {
        $id = $e['id'];
        $preco = $e['preco'];
        $produto = $e['produto'];
        echo '
        <div class="card text-center d-inline-block m-2" style="width: 16rem;">
            <img class="card-img-top" src="" alt="<?php echo $produto?>">
            <div class="card-body">
            <h4 class="card-title"><?php echo $produto?></h4>
            <p class="card-text"><?php echo $preco ?></p>
            </div>
        </div>
    ';
    }
}
    