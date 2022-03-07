# Introdução ao PHP

PHP é uma linguagem de programação que foi criada em 1995 por Rasmus Lerdof.  
Ela é considerada uma linguagem interpretada e dinamicamente tipada.

## Variáveis

Para declararmos variáveis no PHP usamos a seguinte sintaxe: `$variavel`.

### Tipo inteiro

Um inteiro é um número do conjunto Z={..., -2, -1, 0, 1, 2, ...}.  

Sintaxe: `$a = 1234;`

### Tipo ponto flutuante

Números de ponto flutuantes são os números reais, ou seja um conjunto que engloba aos números positivos, negativos, decimais, fracionários, zero, além das dízimas periódicas e não periódicas.

Sintaxe: `$a = 1.234;`

### Tipo string

Uma string é uma série de carácteres, onde um caractere é o mesmo que um byte.  

Sintaxe: `$a = 'String com aspas simples';`  
`$b = "String com aspas duplas";`

### Tipo array

Array é uma lista de valores armazenados na memória, os quais podem ser de tipos diferentes (números, strings, objetos) e podem ser acessados a qualquer momento, pois cada valor é relacionado a uma chave. Um array também pode crescer dinamicamente com adição de novos itens.

Sintaxe: `$a = array('Luiz', 'Raíssa', 'Donnie');`  
`$b = ['Luiz', 'Raíssa', 'Donnie'];`

Observação: No PHP, arrays iniciam na posição 0.

## Tipo Objeto

Um objeto é uma entidade com um determinado comportamento definido por seus métodos (ações) e propriedades (dados). Para instanciar um objeto deve-se utilizar o operador `new`.

Sintaxe:

```php
<?php

class Carro
{
    $modelo;
    function $darPartida()
    {
        echo "Dando partida no carro modelo $this->modelo...";
    }
}

$obj = new Carro;
$obj->modelo = "Palio";
$obj->darPartida();

```

### Null

O valor especial `null` representa uma variável sem valor. `null` é o único valor possível do tipo `null`.  

A variável é considerada `null` se:
- Foi atribuída a constante `null`;
- Ainda não recebeu nenhum valor;
- Foi apagada com `unset()`.

### Tipo booleano

Um tipo booleano expressa somente um valor de verdade. Ele pode ser `true` ou `false`.  
Por ser dinamicamente tipado, qualquer valor será convertido automaticamente se um operador, função ou estrutura de controle requerer um argumento bool. 

Ao converter para bool, os seguintes valores são considerados `false`:
- O próprio booleano `false`;
- O interno 0;
- Os pontos flutuantes 0.0 e -0.0;
- Uma string vazia e a string `"0"`;
- Um array sem elementos;
- O tipo especial `null`;

Observação: o tipo -1 é considerado `true`, como qualquer outro número que não seja zero, tanto negativo quanto positivos.

Sintaxe: `$a = true;`

`$b = false;`

## Operadores

Um operador é algo que recebe um ou mais valores (ou expressões, no jargão de programação) e que devolve outro valor.

### Atribuição

Um operador de atribuição é utilizado para definir uma variável atribuindo-lhe um valor.  
O operador básico de atribuição é `=`.

Sintaxe:

```php
<?php
$a = 10; // Atribui 10 em $a
$a += 5; // Soma 5 em $a
$a -= 5; // Subtrai 5 em $a
$a *= 5; // Multiplica $a por 5
$a /= 5; // Divide $a por 5
```

### **Aritmético**

Operadores artméticos são utilizados para realizações de cálculos matemáticos.  

| Operador | Operação                     |
|----------|------------------------------|
| +        | Adição                       |
| -        | Subtração                    |
| *        | Multiplicação                |
| /        | Divisão                      |
| %        | Módulo, ou resto, da divisão |

Observação: O PHP segue a ordem de operaçõs matemáticas para cálculos complexos.

Sintaxe:
```php
<?php
$a = 3 + 4; // Resultado 7
$b = 2 - 1; // Resultado 1
$c = 2 * 2; // Resultado 4
$d = 6 / 3; // REsultado 2
$e = 7 % 2; // Resultado 1
```

### Relacionais

Operadores relacionais são utilizados para realizar comparações entre valores ou expressòes, resultando sempre em um valor booleano.

| Operador | Operação       |
|----------|----------------|
| ==       | Igual          |
| ===      | Idêntico       |
| !=       | Diferente      |
| <        | Menor          |
| >        | Maior          |
| <=       | Menor ou igual |
| >=       | Maior ou igual |

### Lógicos

Operadores lógicos são utilizados para combinar expressões lógicas entre si, agrupando testes condicionais.

| Operador   | Operação    | Resultado                                                    |
|------------|-------------|--------------------------------------------------------------|
| $a and $b  | AND/E       | Verdade se tanto $a quanto $b forem verdadeiros              |
| $a or $b   | OR/OU       | Verdade se $a ou $b forem verdadeiros                        |
| $a xor $b  | XOR         | Verdadeiro se $a ou $b forem verdadeiros, de forma exclusiva |
| !$a        | NOT/Negação | Verdadeiro se $a for false                                   |
| $a && $b   | AND/E       | Verdade se tanto $a quanto $b forem verdadeiros              |
| $a \|\| $b | OU/OU       | Verdade se $a ou $b forem verdadeiros                        |

Observação: `or` e `and` têm precedência menor que `&&` ou `||`.

## Estruturas de Controle

Uma estrutura de controle é um bloco de programação que analisa variáveis e escolhe uma direção para seguir baseada em parâmetros pré-definidos.

### Estruturas de seleção

#### IF

Sintaxe:

```php
<?php
if(expressão1) {
    // comandos se a expressão é verdadeira
} else if(expressão2) {
    // comandos se a expressão2 for verdadeira
} else {
    // comandos se expressão 1 e 2 forem falsas
}
```

O `else if` é utilizado caso queira realizar mais verificações e será executado somente se o bloco anterior for falso.

### SWITCH

Sintaxe:

```php
<?php
switch($variavel) {
    case valor1:
        // comandos
        break;
    case valor2:
        // comandos
        break;
    default:
        // comandos
}
```

Observações: o comando default será executado somente se nenhuma das verficações retornarem falso.

### Estruturas de repetição

Estrutura que permite executar mais de uma vez o mesmo comando ou conjunto de comandos, de acordo com uma condição ou com um contador.

#### FOR

Sintaxe:

```php
<?php
for(expr1; expr2; expr3) {
    // comandos
}
```
expr1: Valor inicial da variável contadora.  
expr2: Condição de execução. Enquanto for verdade o bloco de comandos será executado.  
expr3: Valor a ser incrementado após cada execução.  

Exemplo:

```php
<?php
for($i = 0; $i <= 10; $i++>) {
    echo $i .PHP_EOL;
}

```

#### WHILE

Sintaxe:

```php
<?php
while(expr1) {
    // comandos
}
```
expr1: Expressão que deverá ser verdade para execução do bloco.

Exemplo:

```php
<?php
$i = 0;
while($i <= 10>) {
    echo $i . PHP_EOL;
    $i++;
}
```

## Arrays



## Funções

# PHP Moderno

## Namespaces

## Autoloader

## PSR



# Criação de API Utilizando Laravel