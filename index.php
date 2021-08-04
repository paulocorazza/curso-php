Skip to content
Pulls
Issues
Marketplace
Explore
@paulocorazza
paulocorazza /
curso-php

1
0

0

Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights

More
curso-php/index.php /
@paulocorazza
paulocorazza fim includes
Latest commit d36da91 9 days ago
History
1 contributor
379 lines (373 sloc) 15.6 KB
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>1.Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>2.Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                                Tipo Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                                Tipo Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                Op. Aritméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedendia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
                                Tipo Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">
                                Conversões
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>3.Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                                Desafio
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                                Variáveis variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">
                                Desafio variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                                Valor e Referência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">
                                Constantes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>4.Estruturas de Controle</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=estruturas_controle&file=if_else">
                                Estruturas de controle
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas_controle&file=operadores_relacionais">
                                Operadores relacionais
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas_controle&file=desafio_pi">
                                Desafio PI
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas_controle&file=operadores_logicos">
                                Operadores Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas_controle&file=desafio_operadores_logicos">
                                Desafio Operadores Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas_controle&file=ternario">
                                Operador Ternário
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas_controle&file=switch">
                                Switch
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas_controle&file=desafio_switch">
                                Desafio Switch
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>Repetições</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=for">
                                For
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_for">
                                Desafio For
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=foreach">
                                Foreach
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=break_continue">
                                Break & Continue
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_impressao">
                                Desafio Impressão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=do_do_while">
                                Do & DoWhile
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_tabela">
                                Desafio Tabela
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_tabela2">
                                Desafio Tabela 2
                            </a>
                        </li>


                    </ul>

                </div>
                <div class="modulo vermelho-escuro">
                    <h3>7.Funções</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=escopo">
                                Escopo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=args_retorno">
                                Argumentos e parâmetros de retorno
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=palindromo">
                                Desafio Palíndrono
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=args_variaveis">
                                Argumentos variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=args_padroes">
                                Argumentos padrões
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=tipos">
                                Tipos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=anonima">
                                Funções Anônimas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=closure_callable">
                                Closure e Callable
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=recursividade">
                                Recursividade
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=desafio_recursividade">
                                Desafio Recursividade
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=retorno_funcao">
                                Retorno função
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=map_filter">
                                Map & Filter
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>8. Orientação à objetos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=OO&file=classe">
                                Classe
                            </a>
                            <a href="exercicio.php?dir=OO&file=desafio_data">
                                Desafio Data
                            </a>
                            <a href="exercicio.php?dir=OO&file=construtor_destrutor">
                                Construtor e Destrutor
                            </a>
                            <a href="exercicio.php?dir=OO&file=heranca">
                                Herança
                            </a>
                            <a href="exercicio.php?dir=OO&file=visibilidade">
                                Visibilidade
                            </a>
                            <a href="exercicio.php?dir=OO&file=static">
                                Static
                            </a>
                            <a href="exercicio.php?dir=OO&file=interface">
                                Interface
                            </a>
                            <a href="exercicio.php?dir=OO&file=abstract">
                                Classe Abstrata
                            </a>
                            <a href="exercicio.php?dir=OO&file=desafio_erro">
                                Desafio erro
                            </a>
                            <a href="exercicio.php?dir=OO&file=final">
                                Final
                            </a>
                            <a href="exercicio.php?dir=OO&file=trait01">
                                Traits
                            </a>
                            <a href="exercicio.php?dir=OO&file=trait02">
                                Traits 2
                            </a>
                            <a href="exercicio.php?dir=OO&file=magic_methods">
                                Métodos mágicos
                            </a>
                            <a href="exercicio.php?dir=OO&file=polimorfismo">
                                Polimorfismo
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo-escuro">
                    <h3>9. Includes</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include">
                                Includes
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include_funcao">
                                Includes com função
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include_require">
                                Include vs require
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=require_return">
                                Require e return
                            </a>
                        </li>
                    </ul>
                </div>



                <div class="modulo laranja">
                    <h3>10. Namespace</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=basico">
                                Exemplo Básico
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=sub_namespaces">
                                Sub-Namespaces
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=use_as">
                                Use/As
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="modulo verde">
                    <h3>11. Trat. de Erro</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tratamento_erro&file=try_catch">
                                Try/Catch
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tratamento_erro&file=erros_personalizados">
                                Erros Personalizados
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tratamento_erro&file=desafio_intdiv_teste">
                                Desafio intdiv
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tratamento_erro&file=gerenciador_erro">
                                Error Handler
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>12. Sessão</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=sessao&file=basico_sessao">
                                Sessão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=sessao&file=gerenciando_sessao">
                                Gerenciando Sessão
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>13. API</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=api&file=datas_01">
                                Datas #01
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=datas_02">
                                Datas #02
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=escrever_arquivo">
                                Escrever Arquivo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=ler_arquivo">
                                Ler Arquivo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=upload">
                                Upload
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=download">
                                Download
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=imagens">
                                Imagens
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>14. Formulário</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=formulario&file=formulario">
                                Formulário
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>15. BD</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=db&file=criar_banco">
                                Criar Banco
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=db&file=criar_tabela">
                                Criar Tabela
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=db&file=inserir_1">
                                Inserir Registro #01
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=db&file=consultar">
                                Consultar Registros
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=db&file=excluir_1">
                                Excluir Registro #01
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=db&file=excluir_2">
                                Excluir Registro #02
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=db&file=inserir_2">
                                Inserir Registro #02
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=db&file=alterar">
                                Alterar Registro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=db&file=inserir_pdo">
                                PDO: Inserir
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=db&file=consultar_pdo">
                                PDO: Consultar
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=db&file=excluir_pdo">
                                PDO: Excluir
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=db&file=alterar_pdo">
                                PDO: Alterar
                            </a>
                        </li>
                    </ul>
                </div>


            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y');   ?>
    </footer>
</body>

</html>