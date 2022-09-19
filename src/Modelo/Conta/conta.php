<?php

namespace Alura\Banco\Modelo\Conta;

/* Classe Conta */

//Essas variáveis são chamadas de atributos da Conta ou objetos
//-> Esse simbolo significa que estou acessando um atributo
//public :: Significa que este dado será publico
//Classe é a forma do bolo e objeto é bolo feito.
//É uma boa pratica colocar as propriedades sempre privadas e os metodos publicos


class Conta                 
{
    private $titular;                 
    private $saldo;            
    private static $numeroDeContas = 0;                                      //Membros estáticos. São membros da classe em si, e não de cada instância (objeto).
    private $tipo;                                                           //tipo 1 -> conta corrente, tipo 2 -> conta poupanca.

    public function __construct(Titular $titular, int $tipo)                           //Utilizado para qualquer inicialização que o objeto necessite antes de ser utilizado.
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;
        
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        if (self::$numeroDeContas > 2){
            echo "Há mais de uma conta ativa!";
        }
    }

    public function sacar (float $valorASacar): void                                //Uma função que está dentro de uma classe é chamada de método
    {
        if ($this->tipo === 1){
            $tarifaSaque = $valorASacar * 0.05;    
        }else{
            $tarifaSaque = $valorASacar * 0.03;    
        }
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo){
            echo "Saldo indisponivel";
            return; 
        }
        
        $this->saldo -= $valorSaque;
    }

    public function depositar (float $valorADepositar) : void                  //void: esse metodo nao devolve nada pra gente nao tem retorno
    {
        if ($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;                                                             //return :: quando o metodo chegar no return ele para a execução
        }
        
        $this->saldo += $valorADepositar;  
    }

    public function transferir (float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo Indisponivel!";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo(): float                                        //Criando metodos para acessar as propriedades.
    {
        return $this->saldo;
    }

    public function recuperarNomeTitular(): string
    {
        return  $this->titular->recuperaNome();
    }

    public function recuperarCpfTitular(): string
    {
        return  $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}

