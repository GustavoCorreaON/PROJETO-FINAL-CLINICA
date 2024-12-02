<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Médicos</title>
</head>
<body>
    <h1>Médicos Cadastrados</h1>

    <?php if (empty($medicos)): ?>
        <p>Nenhum médico cadastrado.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Completo</th>
                    <th>CRM</th>
                    <th>Especialização</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Data de Nascimento</th>
                    <th>Email para Clínica</th>
                    <th>Senha para Clínica</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($medicos as $medico): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($medico['id_medico']); ?></td>
                        <td><?php echo htmlspecialchars($medico['nome_completo']); ?></td>
                        <td><?php echo htmlspecialchars($medico['crm']); ?></td>
                        <td><?php echo htmlspecialchars($medico['especializacao']); ?></td>
                        <td><?php echo htmlspecialchars($medico['cpf']); ?></td>
                        <td><?php echo htmlspecialchars($medico['email']); ?></td>
                        <td><?php echo htmlspecialchars($medico['senha']); ?></td>
                        <td><?php echo htmlspecialchars($medico['data_nascimento']); ?></td>
                        <td><?php echo htmlspecialchars($medico['email_clinica']); ?></td>
                        <td><?php echo htmlspecialchars($medico['senha_clinica']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="/">Cadastrar novo médico</a>
</body>
</html>