<?php

class ClienteController {

    private $cliente;

    public function __construct($db) {
        $this->cliente = new Cliente($db);
    }

    public function create($data) {
        $this->cliente->nome = $data->nome;
        $this->cliente->email = $data->email;
        $this->cliente->telefone = $data->telefone;

        if($this->cliente->create()) {
            echo json_encode(["message" => "Cliente cadastrado"]);
        }
    }

    public function read() {
        $stmt = $this->cliente->read();
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($dados);
    }

    public function update($data) {
        $this->cliente->id = $data->id;
        $this->cliente->nome = $data->nome;
        $this->cliente->email = $data->email;
        $this->cliente->telefone = $data->telefone;

        if($this->cliente->update()) {
            echo json_encode(["message" => "Cliente atualizado"]);
        }
    }
}