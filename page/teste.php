<?php
$produtos = $pdo->query("SELECT top 10 * FROM dbo.produtos")->fetchAll();

foreach ($produtos as $produto) {
    echo $produto['produto'];
}
