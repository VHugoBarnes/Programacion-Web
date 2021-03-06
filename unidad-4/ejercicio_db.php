<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos9.css">
    <title>Ejercicio 9</title>
</head>
<body>
    <!-- https://developer.mozilla.org/es/docs/Web/HTML/Element/form -->
    <div class="container">
        <h1>Ingeniería en Sistemas Computacionales</h1>
        <form action="visitantes.php" method="POST">
                <label for="nombre">Nombre</label>
                <input 
                    type="text" 
                    name="nombre" 
                    id="nombreInput" 
                    autocomplete="off"
                    placeholder="Ej. Víctor Hugo"
                >
                
                <label for="apellidos">Apellidos</label> 
                <input 
                    type="text" 
                    name="apellidos" 
                    id="apellidosInput" 
                    autocomplete="off"
                    placeholder="Ej. Vázquez Gómez"
                >
                
                <label for="direccion">Dirección</label> 
                <input 
                    type="text" 
                    name="direccion" 
                    id="direccionInput" 
                    autocomplete="off"
                    placeholder="Calle #55 Colonia"
                >
                
                <label for="email">E-Mail</label> 
                <input 
                    type="email" 
                    name="email" 
                    id="emailInput" 
                    autocomplete="off"
                    placeholder="correo@dominio.com"
                >
                
                <label for="telefono">Teléfono</label>
                <input 
                    type="tel" 
                    name="telefono" 
                    id="telefonoInput" 
                    autocomplete="off"
                    placeholder="17260628"
                >
                
                <label for="sexo" class="sexo">Sexo</label>
                <div>
                    <input type="radio" name="sexo" id="Hombre" value="Hombre" class="radio"> 
                    <label for="Hombre" >Hombre</label>
                </div>
                <div>
                    <input type="radio" name="sexo" id="Mujer" value="Mujer" class="radio">
                    <label for="Mujer" >Mujer</label>
                </div>
            
            <input type="submit" value="Enviar">
            <input type="reset" value="Reset">
        </form>
    </div>
</body>
</html>