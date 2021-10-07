## 🚀 Começando

# Crud de Noticias
Projeto de criação de um CRUD de noticias Com gerenciamento dos Usuarios

### 📋 Pré-requisitos


LARAVEL , PHP, XAMP, BOOTSTRAP

### 🔧 Instalação

Lembrando de importar o arquivo SQL para seu POSTGRESS,
Abrir o servidor Artisan e verificar de que a instalação esta correta com o bdd

Caso os dados estejam todos corretos, basta utilizar


Ex: apos Executar o php artisan server , abrir na porta gerada  e verificar se esta tudo abrindo igual


## 📦 Desenvolvimento

Os conteudos CSS / JavaScript estão armazenados na pasta public : utilizados para estilização e funcionalidade front na pagina
Foram desenvolvidas VIEWS para cada uma das paginas do Projeto - RESOURCES - VIEWS,
NOSSAS ROUTES INCLUEM 

*CRIAÇÃO:
Atraves dos dados que são inseridos nos imputs do Formulario de Criação de noticia executamos um create na Tabela Noticias atribuindo os dados a cada coluna
```php
  Route::post('/cad-new' ,function (Request $request) {
    Noticias::create([
        'titulo'=>$request->titulo,
        'descricao'=>$request->descricao,
        'autor'=>$request->autor,
        ]);
    return view('end');
});
```  
VISUALIZAÇÃO:
  Atribuimos os dados de nossa tabela em um Formulario e passos ela para nossa pagina onde executamos um FOREACH Nos dados da Tabela e apresentamos para o usuario
 ```php
  Route::get('/ver-noticia/{id}' ,function ($id) {
      $noticias = Noticias::all();
      return view('verNoticia',['noticias'=> $noticias]);
  });
``` 
EDIÇÃO : 
A edição é feita atraves do id da Noticia que a retorna de volta a tela de edição e Faz um novo Create com os dados atualizados
```php Route::get('/edit-noticia/{id}' ,function ($id) {
          $noticias = Noticias::find($id);
          return view('edit',['noticias' =>$noticias]);
        }); 
 ```     
 ATUALIZAÇÃO
        * APOS OS DADOS SAIREM DA ROUTE edi-noticia É CHAMADO o Route editar-noticia , QUE ATRAVES DO METODO POST FAZ UM CREATE COM OS DADOS INSERIDOS NA JANELA ANTERIOR :
 ```php   
    Route::post('/editar-noticia/{id}' ,function (Request $request, $id) {
               $noticias = Noticias::find($id);
               $noticias->update([
                  'titulo' =>$request->titulo,
                  'descricao' =>$request->descricao,
                  'autor' =>$request->autor
               ]);
            return view('end');
   ```    
REMOÇÃO
*A Remoção tambem é feita atraves do ID *
```php
  Route::get('/excluir-noticia/{id}' ,function ($id) {
    $noticias = Noticias::find($id);
    $noticias->delete();
    return view('end');
});
```
## 🛠️ Construído com


* Laravel
* PHP
* JAVASCRIPT
* Bootstrap
* CSS
* HTML


## ✒️ Autor

* - *Trabalho  -(https://github.com/antonioarieiro)

--
⌨️ com ❤️ por (https://github.com/antonioarieiro) 😊
