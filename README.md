# recrutamento-developer
Material para realização da Avaliação de recrutamento developer

## Documento de Diretivas de Avaliação
Recrutamento de Desenvolvedores SOMADev 2019

## Objetivos
* Avaliar a capacidade de solução de problemas do candidato;
* Avaliar a capacidade de descrição da solução de um problema;
* Avaliar a aptidão técnica para a solução de um problema.

## Escopo Técnico da Avaliação

Será necessário que o candidato esteja confortável com os seguintes conhecimentos para a avaliação:

1. Interpretação de texto;
2. Capacidade de descrever, por escrito, uma sequência de passos para a obtenção de um resultado;
3. Estruturar e configurar Workflow para início do trabalho utilizando GIT, SQL, Apache, PHP e WordPress.
4. Conhecimentos na linguagem de programação PHP/WordPress que o permita:
	* Escrever um de código PHP/WordPress e entender o que ele faz;
	* Implementar um Query que retorne conteúdo de acordo com as especificações;
	* Utilizar funções da linguagem que manipulem texto;
	* Utilizar loops (e.g. for) e percorrer vetores/matrizes;
	* Noção básica de Orientação a Objetos;
5. Executar tarefas seguindo escopo abaixo a fim de atingir o objetivo final que é a construção de uma listagem de posts seguindo front-end já criado.

## Avaliação

Siga as etapas abaixo para realizar a avaliação e chegar no objetivo final.

1. Acesse a pasta raiz do localhost do seu servidor e crie um diretório chamado "avaliacao" e realize o clone do projeto.

```

git@github.com:agenciasoma/recrutamento-developer.git

```

2. Crie um novo branch com seu nome para iniciar os trabalhos.
3. Realize o download do WordPress e adicionei no diretório criado.
4. Após realizar o download do WordPress crie um banco de dados MySQL e importe o DUMP que se encontra na pasta BD na raiz do projeto.
5. Com o banco de dados criado e importado, realize a instalação do WordPress com o banco de dados importado.
6. Utilizei o Usuário abaixo para logar no WordPress:
```
Usuário: suporte
Senha: recrutamento
```
7. Realize o clone(link abaixo) e a instalação do tema.
```
git@github.com:agenciasoma/somadev-theme.git
```
8. Com o WordPress e o Tema instalado ative as URLs amigáveis utilizando o arquivo .htaccess
9. Depois do WorkFlow rodando crie uma Query na home do site onde:
* Retorne os posts da categoria BLOG
* Apenas os Posts que foram publicados entre a data 10/09/2019 até 20/09/2019
* Que esteja setado o campo personalizado "status" como "free"
10. Com o conteúdo sendo retornado do banco, exiba a informação de acordo com a estrutura html/css já criada no arquivo index.php e disponível na home do tema conforme layout.
11. Após realizar todas as tarefas acima, crie um DUMP do banco com seu nome e adicione na pasta BD.
12. Faça o commit e envie o novo branch criado para o repositório no github.
13. Com o novo branch enviado faça um Pull Request descrevendo o que foi realizado.
14. Com tudo finalizado escreva um email para (djalma@somadev.com.br) com poucas linha descrevendo o trabalho que foi executado.

## Agradecimento

*Obrigado por realizar o teste e pelo interesse em trabalhar com a SOMADev.<br>
Espero que consiga alcançar os objetivos e que você faça parte da nossa equipe.<br>
Sucesso!!!*


