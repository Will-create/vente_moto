


<?php $i=1; ?>
<div class="sect-niv nivi">
<table class="table table-bordered" >
      <thead>
      
            <th scope="col" class="vert">Numero </th>
            <th scope="col" class="vert">Nom de la marque</th>
            <th scope="col" class="vert">DETAILS</th>
            
      
      </thead>
      <tbody>
<?php foreach ($marques as $marque) : ?>
    <tr>
            <td> <?php echo ' [   '. $i++.'    ]'; ?></td>
            <td> <?= $marque['Nom_de_la_marque_'] ?></td>
            
            <td><a href="/detail?id=<?= $marque['id_marque'] ?>">DETAILS</a></td>
            
    </tr>
   
    



      

<?php endforeach ?>
</tbody>
</table>
<br>
<br>

<div>
<button type="button" class="btn btn-outline-primary sbouton2"><a href="enregistrement.php">Nouveau Patient</a></button>

</div>
<br>
<br>
</div>




</div>




