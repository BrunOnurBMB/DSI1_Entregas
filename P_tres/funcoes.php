<?php
/*
Exercícios P3

1 - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".
*/
function ExercicioUm($numero)
{
    try {
        //validando se o valor da variavel $numero é um valor numérico.
        if (!is_numeric($numero)) {
            return "Erro: Insira um número inteiro!";
        }

        //Realizando um if else como operador ternário para verificar se é postivo, negativo ou igual a 0 
        $mensagem = ($numero > 0) ? "É Positivo" : (($numero < 0) ? "É Negativo" : "Igual a 0");
        //Retornando mensagem trata pelo operador ternário
        return $mensagem;
    } catch (Exception $e) {
        return "Algo inesperador aconteceu " . $e->getMessage();
    }
}

/*
2 - Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5". Dica, utilizem concatenação.
*/
function ExercicioDois($numeroA, $numeroB)
{
    try {
        //validando se o valor da variavel $numeroA ou $numeroB é um valor numérico.
        if (!is_numeric($numeroA) || !is_numeric($numeroB)) {
            return "Erro: Insira algum valor numérico para comparação";
        }

        //Validando se o valor da variavel $numeroA é maior ou menor que a $numeroB.
        $retorno = ($numeroA > $numeroB) ? "$numeroB $numeroA" : "$numeroA $numeroB";
        //Retornando a mensagem tratada acima
        return $retorno;

    } catch (\Exception $e) {
        return "Algo inesperador aconteceu " . $e->getMessage();
    }
}

/*
3 - Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada. Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado].
*/
function ExercicioTres($notas)
{
    try {
        //verificando se o array é um array e se a quantidade de items dentro do array é igual á 3
         if (!is_array($notas) || count($notas) !== 3) {
            return "ERRO: É necessário inserir o valor das três provas.";
        }

        //percorre o array notas verificando se cada valor é um valor numerico e se é maior que 0
        foreach ($notas as $nota) {
            if (!is_numeric($nota) || $nota < 0) {
                return "Erro: Insira um valor numérico positivo!";
            }
        }

        //calcula á média e retorna uma mensagem de acordo com o tratamento na estrutura ternária if
        $mediaGeral = array_sum($notas) / count($notas);
        $mensagem = ($mediaGeral >= 6) ? "Aprovado" : "Reprovado!";
        return "$mensagem. Média final: " . number_format($mediaGeral, 2);
    } catch (Exception $e) {
        return "Algo inesperador aconteceu " . $e->getMessage();
    }
}

/*
4 - Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número. Exigência, resolva esse exercício utilizando array.
Observação: Crie as soluções a seguir utilizando a estrutura switch case:
*/
function ExercicioQuatro($numeroMes)
{
    try {
        //Array preenchido a mão com valores chave de 1 á 12 e os meses referentes.
        $meses = [
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        ];

        //Utilizando a estrutura switch case é verficado a chave do array e retornado valor da chave.
        switch (true) {
            case isset($meses[$numeroMes]):
                return ("O Mês referente ao número $numeroMes é <br> " . $meses[$numeroMes]);
            //Caso seja inserido algum valor que não esteja no range de 1 - 12 está mensagem é enviada.
            default:
                return ("Valor inválido! Digite um valor entre 1 e 12.");

        }
    } catch (Exception $e) {
        return "Algo inesperador aconteceu " . $e->getMessage();
    }
}

/*
5 - Elabore um algoritmo que leia dois valores do usuário e a operação que ele deseja executar (Operações: soma, subtração, divisão, multiplicação). Execute a operação desejada e mostre o resultado;
*/
function ExercicioCinco($numeroUm, $numeroDois, $operador)
{
    try {
        //verificando se a variavel $numeroUm e $numeroDois são valores numéricos
        if (!is_numeric($numeroUm) || !is_numeric($numeroDois)) {
            return "Erro: Insira um valor numérico!";
        }

        //Utilizei a estrutura de decisão if else para de acordo com valor recebido na variavel $operador
        //realizar o retrno com a mensagem de calculo e o resultado.
        if ($operador == "+") {
            return ("$numeroUm + $numeroDois = " . $numeroUm + $numeroDois);
        } elseif ($operador == "-") {
            return ("$numeroUm - $numeroDois = " . $numeroUm - $numeroDois);
        } elseif ($operador == "*") {
            return ("$numeroUm * $numeroDois = " . $numeroUm * $numeroDois);
        } elseif ($numeroDois == 0) {
            return ("Erro: Divisão por zero não é possivel.");
        } else {
            return ("$numeroUm / $numeroDois = " . $numeroUm / $numeroDois);
        }
    } catch (Exception $e) {
        return "Algo inesperador aconteceu " . $e->getMessage();
    }
}

/*
6 - Faça um algoritmo que aborde a seguinte situação: Uma loja fornece 10% de desconto para funcionários e 5% de desconto para clientes vips. Faça um programa que calcule o valor total a ser pago por uma pessoa. O script deverá ler o valor total da compra e um código que identifique se o comprador é um cliente comum (1), funcionário (2) ou vip (3);
*/
function ExercicioSeis($codigoCompra, $totalCompra)
{
    try {
        //verificando se a variavel $totalCompra é um valor numérico 
        if (!is_numeric($totalCompra) || $totalCompra <= 0 ) {
            return "Erro: Insira um número inteiro positivo!";
        }
        //Definindo uma variavel para atribuir o desconto de acordo com categoria
        //Sem deixar números mágicos pelo código
        $descontoFuncionario = 10;
        $descontoClienteVip = 5;

        //Utilizando a estrutura de decisão if para verificar qual o código da compra 
        // e para definir qual método de desconto que deve ser aplicado
        if ($codigoCompra == 1) {
            return ("Total da compra (cod-1 - Cliente Comum) = " . $totalCompra);
        } elseif ($codigoCompra == 2) {
            return ("Total da compra (cod-2 - Funcionário) = " . $totalCompra - (($totalCompra * $descontoFuncionario) / 100));
        } else {
            return ("Total da compra (cod-3 - Cliente VIP) = " . $totalCompra - (($totalCompra * $descontoClienteVip) / 100));
        }
    } catch (Exception $e) {
        return "Algo inesperador aconteceu " . $e->getMessage();
    }
}

/*
7 - Faça um algoritmo PHP que calcule e imprima o salário reajustado de um funcionário de acordo com a seguinte regra:
• salários até 300, reajuste de 50%
• salários maiores que 300, reajuste de 30%.
Observação: Crie as soluções abaixo utilizando estruturas de repetição de acordo com sua escolha:
*/
function ExercicioSete($salario)
{
    try {
        //verificando se a variavel $salario é um valor numérico positivo
        if (!is_numeric($salario) || $salario < 0) {
            return "Erro: Insira um valor válido!";
        }

        //Utilizando variáveis para armazenar valores de reajuste evitando informação sem contexto no codigo "numeros magicos" 
        $reajusteAbaixo = 50;
        $reajusteAcima = 30;

        //Utilizando o operador ternário é realizado a validaão se o salaário é inferior ou igual a 300 e realizado o calculo de ajuste
        $novoSalario = ($salario <= 300) ? $salario + (($salario * $reajusteAbaixo) / 100)
                                         : $salario + (($salario * $reajusteAcima) / 100);
        //Retorna uma mensagem informando o valor do salário passado e o valor do salário atualziado.
        return "Salário anterior: $salario | Salário atualizado: " . number_format($novoSalario, 2, ",", "."); 
    } catch (Exception $e) {
        return "Algo inesperador aconteceu " . $e->getMessage();
    }
}

/*
8 - Faça um algoritmo em PHP que receba um valor qualquer e imprima os valores de 0 até o valor recebido, exemplo:
- Valor recebido = 9
- Impressão do programa – 0 1 2 3 4 5 6 7 8 9
*/
function ExercicioOito($numero)
{
    try {
        //verificando se a variavel $numero é um valor numérico inteiro
        if (!is_numeric($numero) || floor($numero) != $numero) {
            return "Erro: Insira um número inteiro positivo!";
        }

        //Criando a variavel $resultado e atribuindo "" á ela
        $resultado = "";
        //Utilizando a estrutura de controle if para saber se $numero é positivo ou negativo, após isso 
        //ele cai na estrutura de repetição for e a variavel $resultado recebe o valor dela mesma + o valor da
        //variavel $i com " " um espaço.
        if ($numero > 0) {
            for ($i = 0; $i <= $numero; $i++) {
                $resultado .= $i . " ";
            }
        } else {
            for ($i = 0; $i >= $numero; $i--) {
                $resultado .= $i . " ";
            }
        }

        //Aqui é retornada a mensagem $resultado
        return trim($resultado);
    } catch (Exception $e) {
        return "Algo inesperador aconteceu " . $e->getMessage();
    }
}

/*
9 - Faça um algoritmo PHP que receba um valor qualquer e calcule o seu fatorial (!), sabendo que fatorial de um número é: 7! = 7*6*5*4*3*2*1 4! = 4*3*2*1
*/
function ExercicioNove($numero)
{
    try {
        //verificando se a variavel $numero é um valor numérico inteiro e positivo.
        if (!is_numeric($numero) || $numero < 0 || floor($numero) != $numero) {
            return "Erro: Insira um número inteiro positivo!";
        }

        //incializando a variavel $retorno com uma mensagem prédefinida.
        $retorno = "O fatorial do número $numero! é: " . $numero;
        //Realizando o laço de repetição for para que na variavel $retorno seja incrementado o que se espera.
        for ($i = 1; $i < $numero; $i++) {
            $retorno .= " * " . ($numero - $i);
        }
        $retorno .= " <br> ";

        $resultado = 1;
        for ($i = $numero; $i >= 1; $i--) { 
            $resultado *= $i;
        }

        $retorno .= "Resultado = " . $resultado;
        //Após a finalização da construção da mensagem armazena na variavel $retorno ela é retornada.
        return trim($retorno);
    } catch (Exception $e) {
        return "Algo inesperador aconteceu " . $e->getMessage();
    }
}

/*
10 - Faça um algoritmo PHP que receba dois valores quaisquer e imprime todos os valores intermediários a ele, veja exemplo: Primeiro Valor = 5 Segundo Valor = 15 Imprime: 6 7 8 9 10 11 12 13 14
*/
function ExercicioDez($numeroUm, $numeroDois)
{
    try {
        //inicializando variaveis com valor 0
        $maiorNumero = 0;
        $menorNumero = 0;

        //verificando se a variavel $numeroUm e $numeroDois são numéricas.
        if (!is_numeric($numeroUm) || !is_numeric($numeroDois)) {
            return "Erro: Insira apenas valores numéricos!";
        }

        //Inicializadno a variavel $retorno como String vazia.
        $retorno = "";

        //verificando se ambas as variavéis possuem o mesmo valor
        if ($numeroUm == $numeroDois) {
            $retorno = ("Números iguáis, não possui intervalo.");
        } elseif ($numeroUm > $numeroDois) {
            //Verificando se a variavel $numeroUm é maior que a Dois e armazenando o maior valor na 
            //variavel $maiorNumero e o menor valor na variavel $menorNumero.
            $maiorNumero = $numeroUm;
            $menorNumero = $numeroDois;

            //Estrutura repetitiva while que enquanto a variavel $menorNumero for menor que a 
            //variavel $maiorNumero o valor do loop é armzenado na variavel $retorno concatenando 
            //com o valor que ela já possuia após isso a varivel $menorNumero é incrementada em mais um.
            while ($menorNumero < $maiorNumero) {
                $retorno .= $menorNumero . " ";
                $menorNumero++;
            }
        } else {
            $maiorNumero = $numeroDois;
            $menorNumero = $numeroUm;
            while ($menorNumero < $maiorNumero) {

                $retorno .= $menorNumero . " ";
                $menorNumero++;
            }
        }
        //Retornando a string $retorno retirando espaços que contenham no início ou fim.
        return trim($retorno);
    } catch (Exception $e) {
        return "Algo inesperador aconteceu " . $e->getMessage();
    }
}

/*
11- Pesquise. Faça um algoritmo PHP que receba uma string, encontre o número total de caracteres desta e imprima todos os números que existem entre 0 e o número total, exemplo:
* string = “Gil Eduardo de Andrade”
* total_caracter = 22
Imprime: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21
*/
function ExercicioOnze($string)
{
    try {
        //Recebe o valor da variavel $string pelo parâmetro da função e armazena sua quantidade 
        //total de caracteres contando com espaços entre as palavras na variavel $totalCaracteres.
        $totalCaracteres = strlen($string);
        $retorno = "";
        $retorno .= ("Total de caracteres = $totalCaracteres <br>");
        $retorno .= ("Imprime: ");
        for ($i = 0; $i < $totalCaracteres; $i++) {
            $retorno .= ("$i ");
        }
        //Retorna a string final mostrando o total de caracteres na String e imprime o numero
        //chave de cada caracter, começando em 0.
        return trim($retorno);
    } catch (Exception $e) {
        return "Algo inesperador aconteceu " . $e->getMessage();
    }
}

//Função destinada a receber o valor da variavel $ação por meio do metodo $_POST que entrega o value descrito na tag input dentro de cada tag form no arquivo index.php.
//Está função é chamada no arquivo processar.php e lá a varaivel $acao recebe o value do input 
//por meio do método $_POST.
function processar($acao){
    try {
    //Em cada case do switch é retornado a chamada de cada uma das funções acima da primeira até a decima priemira.
    switch ($acao) {
        case 'ExercicioUm':
            $numero = $_POST['numero'];
            return $resultado = ExercicioUm($numero);

        case 'ExercicioDois':
            $numeroA = $_POST['numeroA'];
            $numeroB = $_POST['numeroB'];
            return $resultado = ExercicioDois($numeroA, $numeroB);

        case 'ExercicioTres':
            $notas = [
                $_POST['nota1'],
                $_POST['nota2'],
                $_POST['nota3']
            ];
            return $resultado = ExercicioTres($notas);

        case 'ExercicioQuatro':
            $numeroMes = $_POST['numeroMes'];
            return $resultado = ExercicioQuatro($numeroMes);

        case 'ExercicioCinco':
            $numeroUm = $_POST['numeroUm'];
            $numeroDois = $_POST['numeroDois'];
            $operador = $_POST['operador'];
            return $resultado = ExercicioCinco($numeroUm, $numeroDois, $operador);

        case 'ExercicioSeis':
            $codigoCompra = $_POST['codigoCompra'];
            $totalCompra = $_POST['totalCompra'];
            return $resultado = ExercicioSeis($codigoCompra, $totalCompra);

        case 'ExercicioSete':
            $salario = $_POST['salario'];
            return $resultado = ExercicioSete($salario);

        case 'ExercicioOito':
            $numero = $_POST['numero'];
            return $resultado = ExercicioOito($numero);

        case 'ExercicioNove':
            $numero = $_POST['numero'];
            return $resultado = ExercicioNove($numero);

        case 'ExercicioDez':
            $numeroUm = $_POST['numeroUm'];
            $numeroDois = $_POST['numeroDois'];
            return $resultado = ExercicioDez($numeroUm, $numeroDois);

        case 'ExercicioOnze':
            $string = $_POST['string'];
            return $resultado = ExercicioOnze($string);
    }
} catch (Exception $e) {
    return "Algo inesperador aconteceu " . $e->getMessage();
}
}