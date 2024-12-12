CREATE TABLE IF NOT EXISTS contatos (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome TEXT NOT NULL,
    logradouro TEXT,
    numero TEXT,
    bairro TEXT,
    cidade TEXT,
    estado TEXT,
    email TEXT,
    celular TEXT,
    status BOOLEAN DEFAULT 1
);
