<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
    <link rel="stylesheet" href="../views/css/buscarA.css">
</head>
<body>



    <h1>.</h1>

    <?php if (empty($pacientes)): ?>
        <p>Nenhum paciente cadastrado.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Responsável</th>
                    <th>CPF do Responsável</th>
                    <th>Contato do Responsável</th>
                    <th>Email do Responsável</th>
                    <th>Data de Nascimento do Responsável</th>
                    <th>Nome da Criança</th>
                    <th>CPF da Criança</th>
                    <th>Data de Nascimento da Criança</th>
                    <th>Sexo da Criança</th>
                    <th>Carteirinha</th>
                    <th>Plano</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pacientes as $paciente): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($paciente['id']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['nome_responsavel']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['cpf_responsavel']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['contato_responsavel']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['email_responsavel']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['data_nascimento_responsavel']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['nome_completo_crianca']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['cpf_crianca']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['data_nascimento_crianca']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['sexo_crianca']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['numero_carteirinha']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['plano_crianca']); ?></td>
                        <td>
            <!-- Link para atualizar o pac -->
            <a href="/Projeto_SP_Medical_Group_Final/siteOf-main/Cpaciente_update/<?php echo $paciente['id']; ?>">Atualizar</a>
            <!-- Formulário para deletar o pac -->
            <form action="/Projeto_SP_Medical_Group_Final/siteOf-main/delete-paciente" method="POST" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $paciente['id']; ?>">
                <button type="submit">Excluir</button>
            </form>
        </td>   
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="/Projeto_SP_Medical_Group_Final/siteOf-main/public/CadasP">Cadastrar novo paciente</a>

    <a href="/Projeto_SP_Medical_Group_Final/siteOf-main/public/HomeAdministrador"><div id="voltar"><p>voltar</p></div></a>
</body>
</html>