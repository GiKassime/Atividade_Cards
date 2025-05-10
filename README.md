# 🎬 Gerador de Cards de Filmes com PHP

Este projeto foi desenvolvido como parte da disciplina **Linguagem de Programação para Web** do **Instituto Federal do Paraná – Campus Foz do Iguaçu**, ministrada pelo professor **Daniel Di Domenico**.

## 📚 Sobre o Projeto

A aplicação web tem como objetivo gerar **cards personalizados de filmes**, a partir dos dados fornecidos pelo usuário através de um formulário. O projeto é composto por **duas páginas principais**:

- `formulario.php`: onde o usuário preenche os dados do filme.
- `card.php`: onde os dados recebidos via `POST` são usados para exibir um card estilizado.

---

## 📄 Estrutura

├── card.php # Página que gera o card com os dados
├── index.php # Página de entrada   
├── models/Produto.php # Classe para manipulação de dados

---

## 🧾 Campos do Formulário

O formulário solicita pelo menos **3 informações** obrigatórias do usuário:

- 🎥 Nome do Filme  
- 📝 Descrição  
- 🌟 Avaliação (0 a 5 estrelas)  
- 🖼️ Link da Imagem (opcional)

---
### 🎞️ Exemplo Card:
![Card de Exemplo 2](img/exemplo_Catalogo.png)


## 🛠️ Tecnologias Utilizadas

- `PHP` para back-end e envio dos dados
- `HTML` + `TailwindCSS` para layout responsivo e estilização dos cards
- (opcional) `Font Awesome` para exibir estrelas da avaliação

---

## 💡 Exemplo de Card

Ao preencher o formulário, o usuário verá um card semelhante a este:

### 🎞️ Formulário:
![Formulário](img/formulario.png)

---

## ✅ Objetivos da Atividade

- Praticar manipulação de formulários com `POST` em PHP  
- Trabalhar com classes e objetos  
- Utilizar conceitos de componentização com métodos PHP  
- Aplicar HTML/CSS de forma criativa e semântica

---

## 🙋‍♂️ Autor

**Kassime**  
Estudante do IFPR – Foz do Iguaçu  
