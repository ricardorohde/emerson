# Sistema De Estoque Simples (CRUD)

## Links

Todos os links estão setados com root chamado: 'estoque'.
Para hospedar o website deve-se alterar todos os links e colocar o domínio do website ao invés de 'estoque'.

##### Exemplo:

~~`<a href="/estoque/view.php"></a>`~~

`<a href="/https://www.mydomain.com/view.php"></a>`


## DB Info

##### Arquivo de conexão:
`inc/DB.php`

##### Nome do Banco de Dados:
`estoque`

##### Tabelas:
```
clientes (C_Id, C_Nome, C_Email, C_Fone)
pedidos	 (Pe_Id, C_Id, Pr_Id)
produtos (Pr_Id, Pr_Nome, Pr_Desc, Pr_Preco)
```

## Query MySQL

```
CREATE TABLE clientes
(
	C_Id int NOT NULL AUTO_INCREMENT,
	C_Nome varchar(60) NOT NULL,
	C_Email varchar(60) NOT NULL,
	C_Fone varchar(20) NOT NULL,
	
	PRIMARY KEY (C_Id)
)

CREATE TABLE produtos
(
	Pr_Id int NOT NULL AUTO_INCREMENT,
	Pr_Nome varchar(60) NOT NULL,
	Pr_Desc varchar(60) NOT NULL,
	Pr_Preco int NOT NULL,
	
	PRIMARY KEY (Pr_Id)
)

CREATE TABLE pedidos
(
	Pe_Id int NOT NULL AUTO_INCREMENT,
	C_Id int,
	Pr_Id int,
	
	PRIMARY KEY (Pe_Id),
	FOREIGN KEY (C_Id) REFERENCES clientes(C_Id),
	FOREIGN KEY (Pr_Id) REFERENCES produtos(Pr_Id)
)
```
