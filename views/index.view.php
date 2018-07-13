<?php require('partials/head.php'); ?>

<center>
    <h1><img src="lul.png" alt="RIP" width = "50px" height="50px">Olá <img src="lul.png" alt="RIP" width = "50px" height="50px"></h1>

    <h2>Second Try</h2>

    <h3> Cadastrando Nomes </h3>


    <form method = "POST" action="/names">
        Nome do Cliente:<br>
        <input type="text" name="nome"><br>

        <button type = "submit">go</button>
    </form>


    <br>
        <?php foreach($clientes as $cliente) : ?>

        <li>
    
            <?= $cliente->nome ?>
    
        </li>

        <?php endforeach ?>

    
</center>



<?php require('partials/footer.php'); ?>
