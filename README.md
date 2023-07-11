
# Recrutamento Web Developer PHP Jr.

Material para realização de teste prático de recrutamento para desenvolvedor web Jr.

## Documento de Diretivas de Avaliação

Recrutamento de desenvolvedores SOMADev

## Objetivos

- Avaliar a capacidade de solução de problemas do candidato;
- Avaliar a capacidade de descrição da solução de um problema;
- Avaliar a aptidão técnica para a solução de um problema.
- Avaliar a capacidade de pedir ajuda aos seu gestores

## Escopo Técnico da Avaliação

Será necessário que o candidato esteja confortável com os seguintes conhecimentos para a avaliação:

1. Interpretação de texto;
2. Capacidade de descrever, por escrito, uma sequência de passos para a obtenção de um resultado;
3. Estruturar e configurar um ambiente de desenvolvimento local utilizando Git, MySQL, Apache ou Nginx, PHP e WordPress;
4. Conhecimentos na linguagem de programação PHP e no CMS WordPress que o permitam:
    - Escrever um código PHP/WordPress e entender o que ele faz;
    - Implementar uma Query que retorne conteúdo de acordo com as especificações;
    - Utilizar funções da linguagem que manipulem texto;
    - Utilizar loops (e.g. foreach) e percorrer vetores/matrizes;
    - Noção básica de orientação a objetos;
5. Executar tarefas seguindo escopo abaixo a fim de atingir o objetivo final que é a construção de uma listagem de posts seguindo front-end já criado.

## Avaliação

Siga as etapas abaixo para realizar a avaliação e chegar ao objetivo final.

1. Em seu ambiente de desenvolvimento, crie um diretório chamado "avaliacao".
2. Realize o download do WordPress e adicione no diretório criado.
3. Faça um fork <a href="https://github.com/agenciasoma/recrutamento-developer" title="Repositório">deste repositório</a>.
4. Dentro da pasta themes do WordPress faça o clone do repositório forkeado.
2. Crie uma nova branch com seu nome para iniciar os trabalhos.
4. Crie um banco de dados MySQL, importe o DUMP que se encontra na pasta *BD*.
5. Com o banco de dados criado e importado, realize a instalação do WordPress. Lembrando que o prefixo da tabela do banco é "egddy_".
6. Acesse o painel do wordpress para certificar se está conectando com o banco de dados que foi importado. Lembrando que WP armazena a url no banco, então não esqueça de verificar se a url está de acordo com a sua instalação.
7. Utilize o usuário abaixo para se autenticar no painel administrativo do WordPress:
```
Usuário: suporte
Senha: recrutamento
```
8. Faça a instalação e ativação do tema (Tema SOMA Dev) baixado neste repositório.
9. Verifique se o tema está sendo exibido corretamente acessando o projeto no navegador. Se o tema (Tema SOMA Dev) estiver instalado e ativado, ao acessar a home do site vai visualizar a página com esse [layout](https://prnt.sc/A4I5ItEbpZ0b).
10. Depois que o projeto estiver sendo executado corretamente crie uma Query na home do site onde:
    - Retorne os posts da categoria BLOG
    - Apenas os Posts que foram publicados entre a data 10/09/2019 até 20/09/2019
    - Posts onde o campo personalizado "status" esteja definido como "free"
11. Com o conteúdo sendo retornado do banco, exiba a informação de acordo com a estrutura html/css já criada no arquivo index.php e disponível na home do tema conforme [layout](https://prnt.sc/A4I5ItEbpZ0b);
12. Após realizar todas as tarefas acima, crie um DUMP do banco de dados com seu nome e adicione na pasta BD.
13. Faça o commit e envie a nova branch criado para o repositório no github.
14. Com a nova branch enviado faça um Pull Request descrevendo o que foi realizado. Para mais dicas sobre como criar o pull request acesse [este link](https://juliobitencourt.dev/como-criar-um-pull-request-perfeito/)

## Agradecimentos

*Obrigado por realizar o teste e pelo interesse em trabalhar com a SOMADev.
Esperamos que você consiga alcançar os objetivos e que você faça parte da nossa equipe.
Sucesso!!!*
