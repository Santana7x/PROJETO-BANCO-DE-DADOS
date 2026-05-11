-- ============================================
-- BANCO DE DADOS: CONTROLE DE VENDAS
-- ============================================

CREATE DATABASE IF NOT EXISTS controle_vendas;
USE controle_vendas;

-- ============================================
-- TABELA DE PRODUTOS
-- ============================================

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL
);

-- ============================================
-- TABELA DE CLIENTES
-- ============================================

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20)
);

-- ============================================
-- TABELA DE VENDAS
-- ============================================

CREATE TABLE vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    produto_id INT NOT NULL,
    quantidade INT NOT NULL,
    total DECIMAL(10,2) NOT NULL,

    CONSTRAINT fk_cliente
        FOREIGN KEY (cliente_id)
        REFERENCES clientes(id),

    CONSTRAINT fk_produto
        FOREIGN KEY (produto_id)
        REFERENCES produtos(id)
);

-- ============================================
-- INSERINDO PRODUTOS
-- ============================================

INSERT INTO produtos (nome, preco, quantidade) VALUES
('Arroz 5kg', 25.00, 50),
('Feijão 1kg', 8.50, 100),
('Macarrão', 4.99, 80),
('Óleo de Soja', 7.80, 40),
('Açúcar 1kg', 5.20, 60);

-- ============================================
-- INSERINDO CLIENTES
-- ============================================

INSERT INTO clientes (nome, telefone) VALUES
('João Silva', '99999-9999'),
('Maria Oliveira', '98888-8888'),
('Carlos Souza', '97777-7777');

-- ============================================
-- INSERINDO VENDAS
-- ============================================

INSERT INTO vendas (cliente_id, produto_id, quantidade, total) VALUES
(1, 1, 2, 50.00),
(2, 3, 5, 24.95),
(3, 2, 3, 25.50),
(1, 4, 1, 7.80);

-- ============================================
-- CONSULTA COMPLEXA (JOIN)
-- ============================================

SELECT 
    clientes.nome AS cliente,
    produtos.nome AS produto,
    vendas.quantidade,
    vendas.total
FROM vendas
JOIN clientes 
    ON vendas.cliente_id = clientes.id
JOIN produtos 
    ON vendas.produto_id = produtos.id;
