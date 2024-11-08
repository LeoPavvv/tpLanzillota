<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bajamateria.css">
    <title>Baja materia</title>
</head>

<body>
    <img src="chaca.jfif" alt="Imagen de la Escuela Chacabuco">

    <h1 class="title"> Baja de materia </h1>

    <h2 class="subtitle">Datos de la materia</h2>

    <form id="formMainBaja" method="POST" enctype="multipart/form-data">     
            
        <div class="form__campos">

            <label>Número de materia</label>
            <input name="numeroMateria" type="text" placeholder="Ingrese número de la materia" required maxlength="3">   

        </div>

        <div class="form__campos">

            <label>Nombre de materia</label>
            <input name="nombreMateria" type="text" placeholder="Ingrese nombre de la materia" required maxlength="50">

        </div>

        <div class="form__campos">

            <label>Logo de la materia</label>
            <input name="logoMateria" type="file" placeholder="Ingrese el logo de la materia " required>

        </div>

        <div class="form__campos">

            <label>Año</label>

            <select name="anio" id="anio">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
            </select>

        </div>

        <div class="form__campos">

            <label>División</label>

            <select name="division" id="division">
                <option value=1>1°</option>
                <option value=2>2°</option>
                <option value=3>3°</option>
                <option value=4>4°</option>
                <option value=5>5°</option>
                <option value=6>6°</option>
            </select>

        </div>

        <div class="form__campos">

            <input type="submit" name="enviar" class="dardebaja" value="Dar de baja">

        </div>

        <div class="form__campos">

            <input type="reset" class="borrardatos" id="clearInputs" value="Vaciar Inputs">

        </div>
        
    </form>

    <footer>
        <h2 class="footer--title">E.E.S.T N°6 CHACABUCO - MORÓN (7°4° año 2024)</h2>
        <p class="footer--subtitle">Proyecto de implementacion de sitios web dinamicos</p>
        <p class="foooter--parrafo">Autores: alarcon - baez - cabrera - iacobacci - cajal - cari - casagerone - castellano - corbalan - cuba - datri - dangelo - de pressa - dicerbo - dominguez - donnarumma - eiras - francisco - gallardo - garcia - iannone - ledesma - leyes - lezcano - loiacono - lucero - lujan - luque - marrapodi - matos - mosquera - pavon - portillo - postaschnik - romero - salmeron - scaramuzza - sebriano A. - sebriano E. - Speranza</p>
    </footer>

    <?php 
    include '../../funciones.php'
    ?>
</body>
</html>