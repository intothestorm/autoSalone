<?php ob_start(); ?>
<table>
      <tr>
        <th>Marca</th>
        <th>Motore</th>
        <th>Potenza</th>
      </tr>
      <?php echo $elencoAuto ?>
</table>
<?php ob_get_clean(); ?>
