# INSTALAÇÃO
#### Baixe o repositório: 
```$ git clone https://github.com/heraclitothiago/challenge-estagio```
#### Instale as dependências
Navegue até o diretório do projeto baixado na sua máquina e execute a linha de comando a seguir:
```$ composer install```
#### Altere as configurações do projeto
Renomeie o arquivo /source/Application/Config-cp.php para Config.php
1. qualificar o endereço do projeto conforme o caminho baixado na sua máquina
```http://localhost/path/to/dir/challenge-estagio```
2. acesse a url do projeto no seu navegador de preferência

## Otimizações que eu gostaria de ter feito
- Nas views, ter usado códigos de lógica blocos php e não ter inserido um script <?php ... ?>
- Aplicações corretas das tags html para adequação do seo;
- Usar paginação de resultados para não haver muitas informações na view home/listar
- Rotina de pesquisa de posts com ajax e jquery
- inserir uma view de erros nas rotas e tratar melhor os erros
- Melhorar a User Interface

## Melhorias desejadas
- Principalmente a Classe ModelEmulate deve ser melhorada, incluindo métodos os pointer, offset, search com regex
- Refatorar alguns trechos de códigos e comentar melhor as classes e métodos;

