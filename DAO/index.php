<?php
require "config.php";
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();

?>

<a href="adicionar.php">ADICIONAR USUÁRIO</a><br/><br/>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?php $usuario->getId();?></td>
            <td><?php $usuario->getId();?></td>
            <td><?php $usuario->getId();?></td>
            <td>
                <a href="editar.php?id=<?php $usuario->getId();?>">[ Editar ]</a>
                <a href="excluir.php?id=<?php $usuario->getId();?>" onclick="return confirm('Tem certeza que deseja excluir este cadastro ?')">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>