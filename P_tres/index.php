<?php
include('funcoes.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <main class="container-fluid bg-light gap-3">
        <div class=" row justify-content-center">
            <h1 class="text-center h1 m-4 ">Entrega DSI-1 - P3</h1>
            <section class="ExercicioUm col-5 border border-black m-2 object-fit-none border rounded">
                <h2 class="display-6 text-center m-2">Exercício 1</h2>
                <div>
                    <p>Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".
                    </p>
                </div>
                <form action="processar.php" method="post" class="col mt-3">
                    <input type="hidden" name="acao" value="ExercicioUm">
                    <div class="col-auto">
                        <label class="col-form-label" for="numero">Numero</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="numero"><br><br>
                    </div>

                    <div class="row justify-content-center mb-2">
                        <button type="submit" class=" col-2 btn btn-outline-dark">Enviar</button>
                    </div>
                </form>
            </section>

            <section class="ExercicioDois col-5 border border-black m-2 object-fit-none border rounded">
                <h2 class="display-6 text-center m-2">Exercício 2</h2>
                <div class="mb-4">
                    <p>Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5". Dica, utilizem concatenação.
                    </p>
                </div>
                <form action="processar.php" method="post" class="col mt-2">
                    <input type="hidden" name="acao" value="ExercicioDois">
                    <div class="col-auto">
                        <label class="col-form-label " for="numero">Numero 1</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="numeroA"><br><br>
                    </div>
                    <div class="col-auto">
                        <label class="col-form-label" for="numero">Numero 2</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="numeroB"><br><br>
                    </div>

                    <div class="row justify-content-center mb-2">
                        <button type="submit" class=" col-2 btn btn-outline-dark">Enviar</button>
                    </div>
                </form>
            </section>
        </div>
        <div class="row justify-content-center">
            <section class="ExercicioTres col-5 border border-black m-2 object-fit-none border rounded">
                <h2 class="display-6 text-center m-2">Exercício 3</h2>
                <div>
                    <p>Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada. Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado].
                    </p>
                </div>
                <form action="processar.php" method="post" class="col mt-3">
                    <input type="hidden" name="acao" value="ExercicioTres">
                    <div class="col-auto mt-5">
                        <label for="numero">Nota P1</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="nota1"><br><br>
                    </div>

                    <div class="col-">
                        <label for="numero">Nota P2</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="nota2"><br><br>
                    </div>

                    <div class="col-auto">
                        <label for="numero">Nota P3</label>
                    </div>
                    <div class="col-auto ">
                        <input class="form-control border border-dark" type="text" name="nota3"><br><br>
                    </div>

                    <div class="row justify-content-center mb-3">
                        <button type="submit" class=" col-2 btn btn-outline-dark">enviar</button>
                    </div>
                </form>
            </section>

            <section class="ExercicioQuatro col-5 border border-black m-2 object-fit-none border rounded">
                <h2 class="display-6 text-center m-2">Exercício 4</h2>
                <div>
                    <p>Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número. Exigência, resolva esse exercício utilizando array.
                        Observação: Crie as soluções a seguir utilizando a estrutura switch case.
                    </p>
                </div>
                <br>
                <br>
                <form action="processar.php" method="post" class="col">
                    <input type="hidden" name="acao" value="ExercicioQuatro">
                    <div class="col-auto">
                        <label for="numero">Numero do Mês</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="numeroMes"><br><br>
                    </div>

                    <div class="row justify-content-center">
                        <button type="submit" class=" col-2 btn btn-outline-dark">enviar</button>
                    </div>
                </form>
            </section>
        </div>

        <div class="row justify-content-center">
            <section class="ExercicioCinco col-5 border border-black m-2 object-fit-none border rounded">
                <h2 class="display-6 text-center m-2">Exercício 5</h2>
                <div>
                    <p>
                        Elabore um algoritmo que leia dois valores do usuário e a operação que ele deseja executar (Operações: soma, subtração, divisão, multiplicação). Execute a operação desejada e mostre o resultado.
                    </p>
                </div>
                <form action="processar.php" method="post" class="col mt-5">
                    <input type="hidden" name="acao" value="ExercicioCinco">
                    <div class="col-auto">
                        <label for="numero">Insira um número</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="numeroUm"><br><br>
                    </div>

                    <div class="col-auto">
                        <label for="numero">Insira outro número</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="numeroDois"><br><br>
                    </div>

                    <div class="col-auto">
                        <label>Operação</label>
                    </div>
                    <div>
                        <select class="form-select form-select-sm border border-dark" name="operador">
                            <option value="+">Adição (+)</option>
                            <option value="-">Subtração (-)</option>
                            <option value="*">Multiplicação (*)</option>
                            <option value="/">Divisão (/)</option>
                        </select>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <button type="submit" class=" col-2 btn btn-outline-dark mb-3">enviar</button>
                    </div>
                </form>
            </section>

            <section class="ExercicioSeis col-5 border border-black m-2 object-fit-none border rounded">
                <h2 class="display-6 text-center m-2">Exercício 6</h2>
                <div>
                    <p>
                        Faça um algoritmo que aborde a seguinte situação: Uma loja fornece 10% de desconto para funcionários e 5% de desconto para clientes vips. Faça um programa que calcule o valor total a ser pago por uma pessoa. O script deverá ler o valor total da compra e um código que identifique se o comprador é um cliente comum (1), funcionário (2) ou vip (3).
                    </p>
                </div>
                <form action="processar.php" method="post" class="col mt-5">
                    <input type="hidden" name="acao" value="ExercicioSeis">
                    <div class="col-auto">
                        <label for="numero">Insira o total da compra</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="totalCompra"><br><br>
                    </div>

                    <div class="col-auto">
                        <label>Desconto</label>
                    </div>
                    <select class="form-select form-select-sm border border-dark" name="codigoCompra" class="mb-3">
                        <option value="1">Sem desconto</option>
                        <option value="3">Desconto Cliente VIP</option>
                        <option value="2">Desconto Funcionário</option>
                    </select>
                    <div class="row justify-content-center mt-3">
                        <button type="submit" class=" col-2 btn btn-outline-dark">enviar</button>
                    </div>
                </form>
            </section>
        </div>

        <div class="row justify-content-center">
            <section class="col-5 border border-black m-2 object-fit-none border rounded">
                <h2 class="display-6 text-center m-2">Exercício 7</h2>
                <div>
                    <p>
                        Faça um algoritmo PHP que calcule e imprima o salário reajustado de um funcionário de acordo com a seguinte regra:
                        • salários até 300, reajuste de 50%
                        • salários maiores que 300, reajuste de 30%.
                        Observação: Crie as soluções abaixo utilizando estruturas de repetição de acordo com sua escolha:
                    </p>
                </div>
                <form action="processar.php" method="post" class="col mt-5">
                    <input type="hidden" name="acao" value="ExercicioSete">
                    <div class="col-auto">
                        <label for="salario">Insira o salário do Funcionário</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="salario"><br><br>
                    </div>

                    <div class="row justify-content-center">
                        <button type="submit" class=" col-2 btn btn-outline-dark mb-3">enviar</button>
                    </div>
                </form>
            </section>

            <section class="ExercicioOito col-5 border border-black m-2 object-fit-none border rounded">
                <h2 class="display-6 text-center m-2">Exercício 8</h2>
                <div>
                    <p>
                        Faça um algoritmo em PHP que receba um valor qualquer e imprima os valores de 0 até o valor recebido, exemplo:
                        - Valor recebido = 9
                        - Impressão do programa = 0 1 2 3 4 5 6 7 8 9.
                    </p>
                </div>
                <form action="processar.php" method="post" class="col mt-5">
                    <input type="hidden" name="acao" value="ExercicioOito">
                    <div class="col-auto">
                        <label for="numero">Insira um numero inteiro.</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="numero"><br><br>
                    </div>

                    <div class="row justify-content-center">
                        <button type="submit" class=" col-2 btn btn-outline-dark mt-5">enviar</button>
                    </div>
                </form>
            </section>
        </div>

        <div class="row justify-content-center">
            <section class="ExercicioNove col-5 border border-black m-2 object-fit-none border rounded">
                <h2 class="display-6 text-center m-2">Exercício 9</h2>
                <div>
                    <p>
                        Faça um algoritmo PHP que receba um valor qualquer e calcule o seu fatorial (!), sabendo que fatorial de um número é: 7! = 7*6*5*4*3*2*1 4! = 4*3*2*1
                    </p>
                </div>
                <form action="processar.php" method="post" class="col mt-3">
                    <input type="hidden" name="acao" value="ExercicioNove">
                    <div class="col-auto">
                        <label class="mt-4" for="numero">Insira um numero inteiro.</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="numero"><br><br>
                    </div>

                    <div class="row justify-content-center mb-3">
                        <button type="submit" class=" col-2 btn btn-outline-dark">enviar</button>
                    </div>
                </form>
            </section>

            <section class="ExercicioDez col-5 border border-black m-2 object-fit-none border rounded">
                <h2 class="display-6 text-center m-2">Exercício 10</h2>
                <div>
                    <p>
                        Faça um algoritmo PHP que receba dois valores quaisquer e imprime todos os valores intermediários a ele, veja exemplo: Primeiro Valor = 5 Segundo Valor = 15 Imprime: 6 7 8 9 10 11 12 13 14.
                    </p>
                </div>
                <form action="processar.php" method="post" class="col mt-5">
                    <input type="hidden" name="acao" value="ExercicioDez">
                    <div class="col-auto">
                        <label for="numero">Insira um numero inteiro.</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="numeroUm"><br><br>
                    </div>

                    <div class="col-auto">
                        <label for="numero">Insira outro numero inteiro.</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="numeroDois"><br><br>
                    </div>

                    <div class="row justify-content-center mb-3">
                        <button type="submit" class=" col-2 btn btn-outline-dark">enviar</button>
                    </div>
                </form>
            </section>
        </div>
        <div class="row justify-content-center">
            <section class="col-6 border border-black m-2 object-fit-none border rounded">
                <h2 class="display-6 text-center m-2">Exercício 11</h2>
                <div>
                    <p>
                        Pesquise. Faça um algoritmo PHP que receba uma string, encontre o número total de caracteres desta e imprima todos os números que existem entre 0 e o número total, exemplo:
                        * string = “Gil Eduardo de Andrade”
                        * total_caracter = 22
                        Imprime: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21.
                    </p> 
                </div>
                <form action="processar.php" method="post" class="col mt-5">
                    <input type="hidden" name="acao" value="ExercicioOnze">
                    <div class="col-auto">
                        <label for="numero">Insira uma palavra.</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control border border-dark" type="text" name="string">
                    </div>

                    <div class="row justify-content-center mb-3">
                        <button type="submit" class=" col-2 btn btn-outline-dark mt-3">enviar</button>
                    </div>
                </form>
            </section>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>