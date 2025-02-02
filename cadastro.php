<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bibliteca</title>
    <link rel="stylesheet" href="perfil.css" />
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
 
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <h3 class="title has-text-grey"><a  target="_blank">Aluno</a></h3>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      
                    </div>
                    
                    <div class="box">
                                             <form action="cadastro.php" method="POST">

                            <div class="field">
                                <div class="control">
                                    <center><input name="aluno" type="aluno" class="input is-large" placeholder="aluno"></center>
                                </div>
                            </div>
                               <div class="field">
                                <div class="control">
                                    <center><input name="sobrenome" class="input is-large" type="sobrenome" placeholder="sobrenome"></center>
                                </div>
                            </div>
                             <div class="field">
                                <div class="control">
                                    <center><input name="telefone" class="input is-large" type="telefone" placeholder="telefone"></center>
                                </div>
                            </div> 
                                
                             <div class="field">
                                <div class="control">
                                    <center><input name="cpf" class="input is-large" type="cpf" placeholder="cpf"></center>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <center><input name="email" class="input is-large" type="email" placeholder="email"></center>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <center><input name="senha" class="input is-large" type="senha" placeholder="senha"></center>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>
