
# Título do Projeto

Uma breve descrição sobre o que esse projeto faz e para quem ele é


## Documentação da API

#### Retorna todos os usuarios

```http
  GET /usuarios
```

#### Retorna um usuario pelo id

```http
  GET /usuarios/{id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `int` | **Obrigatório**. O ID do item que você quer buscar |

```http
  POST /usuarios
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `name`      | `string` | **Obrigatório**. O nome de usuario |
| `email`      | `string` | **Obrigatório**. O nome de email |
| `birthday`      | `string` | **Obrigatório**. Date padrao mysql 2004-01-24 |

```http
  DELETE /usuarios/{id} 
```
| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `int` | **Obrigatório**. O ID do item que você quer excluir |



  




## Instalação

Na pasta raiz do projeto rodar o comando

```bash
    docker-compose up -d
    docker exec -it php_desafio bash
    php artisan migrate
    php -S 0.0.0.0:8000 -t public

```

Importe o Insomnia, e configure o variavel base_url para a seu localhost.
    
## Autores

- [LinkedIn](https://www.linkedin.com/in/brunohdiaz)

