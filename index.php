<?php include 'includes/layout/footer.php'; ?>
<div class="contenedor-barra">
    <h1> AGENDA DE CONTACTOS<h1>
</div>

<div class="bg-amarillo contenedor sombra">
    <form id="contacto" action="#">
        <legend>Añade un contacto <span> Todos los campos son obligatorios </span> </legend>
        
        <div class="datos">
            <div class="campo">
                <label for="nombre"> Nombre: </label>
                <input type="text" placeholder="nombre de contacto" id="nombre">
            </div>
            <div class="campo">
                <label for="empresa"> Empresa: </label>
                <input type="text" placeholder="nombre empresa" id="empresa">
            </div>
            <div class="campo">
                <label for="telefono"> Telefono: </label>
                <input type="tel" placeholder="numero de telefono" id="numero">
            </div>
        </div>
            <div class="campo enviar">
                <input type="submit" value="AÑADIR">
            </div>
    </form>
</div>

<div class="bg-blanco contenedor sombra contactos">
    <div class="contenedor-contactos">
        <h2>contactos</h2>
        <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar Contactos">
        <p class="total-contactos"><span>2</span>Contactos</p>
    <div class="contenedor-tabla">
        <table id="listado-contactos">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Empresa</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <td>Fer</td>
            <td>Kaysen</td>
            <td>12344567</td>
            <td>
                <a href="#"></a>
            </td>
            </tbody>
        </table>
    </div>
    </div>
</div>


<?php include 'includes/layout/header.php'; ?>


