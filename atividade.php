<?php

// Definição da classe base Veiculo
class Veiculo {
    protected $marca;
    protected $modelo;
    protected $ano;

    // Construtor
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // Método para exibir os detalhes do veículo
    public function exibirDetalhes() {
        return "Marca: $this->marca, Modelo: $this->modelo, Ano: $this->ano";
    }

    // Método genérico de acelerar
    public function acelerar() {
        return "Veículo acelerando...";
    }
}

// Definição da classe Carro, derivada de Veiculo
class Carro extends Veiculo {
    // Método para exibir detalhes específicos do carro
    public function exibirDetalhes() {
        return parent::exibirDetalhes() . ", Tipo: Carro";
    }

    // Sobrescrevendo o método acelerar para carros
    public function acelerar() {
        return "Carro acelerando...";
    }
}

// Definição da classe Moto, derivada de Veiculo
class Moto extends Veiculo {
    // Método para exibir detalhes específicos da moto
    public function exibirDetalhes() {
        return parent::exibirDetalhes() . ", Tipo: Moto";
    }

    // Sobrescrevendo o método acelerar para motos
    public function acelerar() {
        return "Moto acelerando...";
    }
}

// Instanciando objetos
$carro = new Carro("Ford", "Focus", 2018);
$moto = new Moto("Honda", "CBR 500", 2020);

// Exibindo detalhes dos veículos
echo "Detalhes do Carro: " . $carro->exibirDetalhes() . "\n";
echo "Detalhes da Moto: " . $moto->exibirDetalhes() . "\n";

// Testando o método acelerar
echo $carro->acelerar() . "\n";
echo $moto->acelerar() . "\n";

?>