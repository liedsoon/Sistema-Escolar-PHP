# 📚 Sistema de Cadastro de Alunos (PHP + MySQL)

Este projeto é um sistema simples de cadastro de alunos, com inserção de dados em banco de dados MySQL utilizando PHP. O usuário pode cadastrar nome, matrícula e duas notas, e o sistema calcula automaticamente a média.

✍️ Autor  
Desenvolvido por **José Liedson** – Projeto da disciplina de **Programação Web P1**, 2022.

---

## 🔧 Tecnologias Utilizadas

- PHP (7.x ou 8.x)
- MySQL
- HTML5 + CSS3
- Servidor Apache (via XAMPP, Laragon, MAMP ou similar)

---

## ⚙️ Configuração do Banco de Dados

1. Acesse o **phpMyAdmin** ou use outro cliente MySQL.
2. Execute os seguintes comandos SQL:

```sql
CREATE DATABASE escola;

USE escola;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    matricula INT NOT NULL,
    nota1 FLOAT NOT NULL,
    nota2 FLOAT NOT NULL,
    media FLOAT NOT NULL
);
```

---

## 🚀 Como Executar

1. Instale e inicie o **XAMPP** (ou outro servidor PHP/MySQL).
2. Coloque os arquivos do projeto em:

```
C:\xampp\htdocs\projeto
```

3. Acesse no navegador:

```
http://localhost/projeto/formularioArq.php
```

---

## ✅ Funcionalidades

- Cadastro de alunos com nome, matrícula e duas notas.
- Cálculo automático da média.
- Validação básica dos campos (notas devem ser números).
- Mensagem de sucesso ou erro usando sessões.

---

<div align="center">
<img src="https://github.com/user-attachments/assets/65b0e991-cd97-4175-8bff-e938078a31dc" width="1000px" />
<img src="https://github.com/user-attachments/assets/404df024-7dff-42c3-882a-b4e30e91bb34" width="1000px" />
</div>
