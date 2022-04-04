# Crud Loja Laravel

    Pela interface dar para fazer o CRUD normalmente, porém abaixo estou listando alguns exemplos de rotas.

## Configurando banco
- .env
```sh
DB_CONNECTION=seu_banco
DB_HOST=localhost
DB_DATABASE=seu_db
DB_USERNAME=seu_username
DB_PASSWORD=sua_senha
```

### Rodando
- Startando serve
```sh
 php artisan serve
```

#### Rotas
- Home
```sh
  acessar no seu navegador localhost/home
```
- Todos os Clientes
```sh
  acessar no seu navegador localhost/clientes/ver/all
```
- Criar pedido
```sh
  acessar no seu navegador localhost/pedido/novo
  Obs: Quando for criar pedido, colocar id do usuário e id do produto para que possa ser feito o relacionamento
```
- Editar Produto
```sh
  acessar no seu navegador localhost/produto/editar/{id}
```

