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

## Manipulação de Arrays

Arrays são acessados mediante uma posição, como um índice numérico.  

Podemos criar um array das seguintes formas:

```php
<?php

// Primeira forma, utilizando array()

$cores = array('vermelho', 'azul', 'verde');

// Segunda forma, utilizando sintaxe resumida

$cores = ['vermelho', 'azul', 'verde'];

// Terceira forma, adicionando valores

$cores[] = 'vermelho';
$cores[] = 'azul';
$cores[] = 'verde';

```

Para acessar o array indexado, basta indicar o seu índice entre colchetes:

```php
<?php
echo $cores[0]; // resultado = vermelho
echo $cores[1]; // resultado = azul
echo $cores[2]; // resultado = verde
```

### Arrays associativos

Os arrays no PHP são associativos, pois contêm uma chave de acesso para cada posição.

Podemos criar arrays associativos das seguintes formas:

```php
<?php

// Utilizando array()

$cores = array(
    'vermelho' => 'FF0000', 
    'azul' => '0000FF',
    'verde' => '00FF00',
    );

// Utilizando sintaxe resumida e adicionando valores

$cores = [];
$cores['vermelho'] = 'FF0000';
$cores['azul'] = '0000FF';
$cores['verde'] = '00FF00';
```

Para acessar, basta indicar a sua chave entre colchetes:

```php
<?php

echo $cores['vermelho']; // resultado FF0000
echo $cores['azul']; // resultado '0000FF'
echo $cores['verde'];// resultado '00FF00';
```

### Iterações

Os arrays podem ser iterados no PHP pelo operador `foreach`, que percorre cada uma das posições do array.

Sintaxe:

```php
<?php

$frutas = array();
$frutas['cor'] = 'vermelho';
$frutas['sabor'] = 'doce';
$frutas['formato'] = 'redondo';
$frutas['nome'] = 'maçã';

foreach($frutas as $chave => $fruta) {
    echo "$chave => $fruta \n";
}
```

### Arrays multidimensionais

Arrays multidimensionais ou matrizes são arrays nos quais algumas de suas posições podem conter outros arrays.

Podemos criar arrays multidimensionais das seguintes formas:

```php
<?php

// Utilizando array()

$carros = array(
    'Palio' => array(
        'cor' => 'azul',
        'potencia' => '1.0',
        'opcionais' => 'Ar Cond.'
    ),
    'Corsa' => array(
        'cor' => 'cinza',
        'potencia' => '1.3',
        'opcionais' => 'mp3' 
    ),
    'Gol' => array(
        'cor' => 'branco',
        'potencia' => '1.0',
        'opcionais' => 'metalica' 
    )
);

echo $carros['Palio']['opcionais'];

// Utilizando sintaxe resumida e adicionando valores

$carros = [];
$carros['Palio']['cor'] = 'azul';
$carros['Palio']['potencia'] = '1.0';
$carros['Palio']['opcionais'] = 'Ar Cond.';
$carros['Corsa']['cor'] = 'cinza';
$carros['Corsa']['potencia'] = '1.3';
$carros['Corsa']['opcionais'] = 'mp3';
$carros['Gol']['potencia'] = 'branco';
$carros['Gol']['cor'] = '1.0';
$carros['Gol']['opcionais'] = 'metalica';

echo $carros['Palio']['opcionais'];
```

Para realizar iterações em um array multidimensional, é preciso observar quantos níveis ele tem.

```php
<?php

$carros = [];
$carros['Palio']['cor'] = 'azul';
$carros['Palio']['potencia'] = '1.0';
$carros['Palio']['opcionais'] = 'Ar Cond.';
$carros['Corsa']['cor'] = 'cinza';
$carros['Corsa']['potencia'] = '1.3';
$carros['Corsa']['opcionais'] = 'mp3';
$carros['Gol']['potencia'] = 'branco';
$carros['Gol']['cor'] = '1.0';
$carros['Gol']['opcionais'] = 'metalica';

foreach ($carros as $modelo => $caracteristicas) {
    echo "=> modelo $modelo\n";
    foreach ($caracteristicas as $caracteristica => $valor) {
        echo " - caracteristica $caracteristica => $valor\n";
    }
}

```

### Funções para manipulação de Arrays

#### array_merge

Mescla dois ou mais, adicionando um array ao final de outro, resultando em um novo array. Se ambos os arrays tiverem conteúdo indexado pela mesma chave, o segundo array irá se sobrepor ao primeiro.

```php
<?php
$a = ['verde', 'azul'];
$a = ['vermelho', 'amarel'];
$c = array_merge($a, $b);
var_dump($c);
```

### explode

Converte uma string em um array, quebrando os elementos por meio de um separador.

### implode

Converte um array em uma string, agrupando os elementos do array por meio de um elemento "cola".

Exemplo de implode e explode:

```php
<?php

// Explode

$string = "10/05/2015";
var_dump(explode("/", $string));

// Implode

$array = [10, 5, 2015];
var_dump(implode('/', $array));
```

## Funções

Uma função é um pedaço de código com um objetivo específico, encapsulado sob uma estrutura única que recebe um conjunto de parâmetros e retorna um dado. Uma função é declarada uma única vez, mas pode ser utilizada diversas vezes.

Sintaxe:

```php
<?php

function nomeDaFuncao (arg1, arg2, arg3)
{
    $valor = $arg1, $arg2, $arg3;
    return $valor;
}
```

Variáveis declaradas dentro do escopo de uma função são locais, ou seja, só podem ser acessadas dentro do escopo daquela função.  
Para acessar uma variável fora do escopo de uma função sem passá-la como argumento, ela deve ser criada no escopo acima ou como global.

# PHP Moderno

## Namespaces

## Autoloader

## PSR



# Criação de API Utilizando Laravel