<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medical group</title>
    <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../views/css/cadastroA.css">
    <style>
      @font-face {
          font-family: 'anticslab';
          src: url(../outros/MonoSpatial[1]\ \(1\).ttf)
          format('truetype');
        }</style>

<div id="bola1">
    </div>
        <a href="/Projeto_SP_Medical_Group_Final/siteOf-main/public/CadasG"><div id="voltar">
            <p>voltar</p>
        </div></a>
        <div id="M"><p> Admistrador </p> </div>
    <div id="bola2"></h5></div>
    <div id="informa"><table>
       </table></div>

</head>        
<body>
    
<form action="/Projeto_SP_Medical_Group_Final/siteOf-main/Cadmistrador" method= "POST" >

        <input type="submit" value="Salvar" id="salvar">

           <p id="nc" name="nomecompleto">Nome completo:</p>
           <input id="nci" name="nome_completo" type="text" placeholder="">
           <p id="cpf" name="cpf">CPF:</p>
           <input id="cpfi" type="text" name="cpf" placeholder="Apenas números">
           <p id="email" name="email">Email:</p>
           <input id="emaili" name="email" type="text" placeholder="">
           <p id="cremail" name="emailclinica">Crie um email para clínica:</p>
           <input id="cremaili" name="email_clinica" type="text" placeholder="">
           <p id="coema" name="confirmeemailclinica">Crie uma senha para clinica:</p>
           <input id="coemai"  name="senha_clinica" type="password" placeholder="">
           <p id="dtna" name="datanascimento">Data de nascimento:</p>
            <input id="dtnai" name="data_nascimento" type="date">
       </form>
       
</body>
</html>