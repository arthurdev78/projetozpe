<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> SITE DO CURSO DA ZPE</h1>
    <hr>
   <form action="/pagina-processa-dados-do-form" method="post">
   
    <div>
        <label for ="nome" > Nome: </label>
        <input type="text" id ="nome"/> 
    </div>
    <div>
        <label for ="email"> E-mail:</label>
        <input type = "email" id ="email"/>
        <div class="button">
            <button type="submit">Enviar sua mensagem</button>
        </div>   
    </form>   
    
    
    
    <table border = "3">
    <tr> 
    <td> Nome</td>

    <td> SObrenome</td>
    <td> Email </td>

    </tr>    
    
    </table>
   <strong>  {{ route ('sitezinhoindex') }}
   <a href="{{ ('teste') }}" >link</a>

</body>
</html>