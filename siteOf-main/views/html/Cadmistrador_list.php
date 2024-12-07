<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Admistradores</title>
    <link rel="stylesheet" href="../views/css/buscarA.css"> 
</head>
<body>
    <h1>.</h1>

    <?php if (empty($admistradores)): ?>
        <p>Nenhum Admistrador cadastrado.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Completo</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Data de Nascimento</th>
                    <th>Email para Clínica</th>
                    <th>Senha para Clínica</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admistradores as $admistrador): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($admistrador['id_admistrador']); ?></td>
                        <td><?php echo htmlspecialchars($admistrador['nome_completo']); ?></td>
                        <td><?php echo htmlspecialchars($admistrador['cpf']); ?></td>
                        <td><?php echo htmlspecialchars($admistrador['email']); ?></td>
                        <td><?php echo htmlspecialchars($admistrador['data_nascimento']); ?></td>
                        <td><?php echo htmlspecialchars($admistrador['email_clinica']); ?></td>
                        <td><?php echo htmlspecialchars($admistrador['senha_clinica']); ?></td>
                        <td>
            <!-- Link para atualizar o adm -->
            <a href="/Projeto_SP_Medical_Group_Final/siteOf-main/Cadmistrador_update/<?php echo $admistrador['id_admistrador']; ?>">Atualizar</a>
            <!-- Formulário para deletar o adm -->
            <form action="/Projeto_SP_Medical_Group_Final/siteOf-main/delete-adm" method="POST" style="display:inline;">
                <input type="hidden" name="id_admistrador" value="<?php echo $admistrador['id_admistrador']; ?>">
                <button type="submit">Excluir</button>
            </form>
        </td>   
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="/Projeto_SP_Medical_Group_Final/siteOf-main/public/CadasADM">Cadastrar novo Admistrador</a>

    
    <a href="/Projeto_SP_Medical_Group_Final/siteOf-main/public/HomeAdministrador"><div id="voltar"><p>voltar</p></div></a>
</body>
</html>