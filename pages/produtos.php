<?php
foreach ($item as $e) {
    $id = $e['id'];
    $preco = $e['preco'];
    $produto = $e['produto'];
    $img = $e['img'];
    echo '
    <div class="card text-center d-inline-block m-2" style="width: 16rem;">
        <img class="card-img-top" src="'.$img.'" alt="'.$produto.'">
        <div class="card-body">
        <h4 class="card-title">'.$produto.'</h4>
        <p class="card-text">'.$preco.'</p>
        </div>
    </div>
    ';
}