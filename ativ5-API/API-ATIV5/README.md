# API de Clientes (PHP + MySQL)

Este projeto consiste em uma API REST simples para gerenciamento de clientes, desenvolvida com **PHP puro** e **MySQL**, utilizando o **XAMPP** como ambiente local e **Thunder Client** para testes das requisições.

---

# Objetivo

Implementar um CRUD básico de clientes com foco em:

- Cadastro de clientes
- Consulta de clientes
- Edição de clientes

> Neste projeto, a exclusão (DELETE) não foi implementada por fins didáticos.

---

# Tecnologias utilizadas

- PHP (Programação backend)
- MySQL (Banco de dados)
- XAMPP (Servidor local Apache + MySQL)
- VS Code (Editor de código)
- Thunder Client (Testes de API)

---

# Estrutura do Projeto

api-clientes/
│
├── config/
│   └── database.php
│
├── models/
│   └── Cliente.php
│
├── controllers/
│   └── ClienteController.php
│
├── index.php

---

# Banco de Dados

## Criação do banco:

CREATE DATABASE api_clientes;
USE api_clientes;

## Criação da tabela:

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    telefone VARCHAR(20)
);

---

# ⚙️ Configuração do Ambiente

1. Instale o XAMPP
2. Inicie:
   - Apache
   - MySQL
3. Coloque o projeto dentro da pasta:

C:\xampp\htdocs\

Exemplo:

C:\xampp\htdocs\api-clientes\

---

# Como executar

A API será acessível via:

http://localhost/api-clientes/index.php

---

# Endpoints da API

## 1. Cadastro de Cliente

**Método:** POST

POST http://localhost/api-clientes/index.php

### Body (JSON):

{
  "nome": "João",
  "email": "joao@email.com",
  "telefone": "61999999999"
}

---

## 2. Listar Clientes

**Método:** GET

GET http://localhost/api-clientes/index.php

---

## 3. Atualizar Cliente

**Método:** PUT

PUT http://localhost/api-clientes/index.php

### Body (JSON):

{
  "id": 1,
  "nome": "João Silva",
  "email": "novo@email.com",
  "telefone": "61888888888"
}

---

# Arquitetura

- Config: conexão com banco
- Model: regras de acesso aos dados
- Controller: lógica de negócio
- Index: roteador (Front Controller)

---

# Conceitos aplicados

- API REST
- Métodos HTTP (GET, POST, PUT)
- JSON para comunicação
- PDO para conexão segura com banco
- Separação em camadas

---

# Autor

- Prof. Hudson Neves  
- UNICEPLAC
- Engenharia de Software

---

# Licença

Projeto livre para uso educacional.
