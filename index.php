<!DOCTYPE>
<html lang="pt-br">
    <head>
        <title>Página Inicial</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>USUARIO</td>
                    <td>SENHA</td>
                    <td>PERFIL</td>
                    <td>STATUS</td>
                </tr>
                <?php
                    include_once('db/conexao.php');
                    $sql = $pdo->prepare("select * from user");
                    $sql->execute();
                    $resultset = $sql->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach($resultset as $line) {
                ?>
                <tr>
                    <td><?php echo $line['id_user']; ?></td>        
                    <td><?php echo $line['login_user']; ?></td>        
                    <td><?php echo $line['password_user']; ?></td>      
                    <td><?php echo $line['id_type']; ?></td>        
                    <td><?php echo $line['status_user']; ?></td>        
                </tr>
                <?php
                    }
                
                echo md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
                ?>
            </table>
        </div>
    </body>
</html>