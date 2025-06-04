<style>
table {
  width: 100%;         /* La tabla ocupa todo el ancho disponible */
  border-collapse: collapse;
  font-size: 22px;          /* Letras grandes */
}
th, td {
  border: 1.5px solid #000;
  padding: 16px;            /* Más espacio en las celdas */
  text-align: center;
  vertical-align: middle;        /* Altura fija para las celdas */
}
th {
  background-color: #f2f2f2;
}
td.id {
  width: 10%;
}
td.apellidos {
  width: 40%;
  
}
td.nombres {
  width: 40%;
}
</style>
<div>
  <h1>Lista de Propietarios</h1>
  <table>
    <thead>
      <tr>
        <th class="id">ID</th>
        <th class="apellidos">Apellidos</th>
        <th class="nombres">Nombres</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listaPropietarios as $propietario): ?>
        <tr>
          <td class="id"><?php echo $propietario['idpropietario']; ?></td>
          <td class="apellidos"><?php echo $propietario['apellidos']; ?></td>
          <td class="nombres"><?php echo $propietario['nombres']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>