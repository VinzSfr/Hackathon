<div id="wait-title" class="text-white animated fadeIn">
	<div id="wait-block">

        <?php if(isset($_SESSION['file'])): ?>

        <h1 class="display-4 text-white">Vous êtes dans la file d'attente en possition</h1>
        <span class="count display-3 text-white">
			<?= (string)$NumeroTicket;?>
		</span>

        <?php endif; if(!isset($_SESSION['file'])): ?>

            <h1 class="display-4 text-white">Vous devez d'abord vous enregistrer dans la file d'attente ! (tit con va)</h1>

        <?php endif; ?>

	</div>
</div>

</center>
</header>
<table class="table table-striped bg-light">
    <thead>
    <tr>
        <th scope="col">Numéro</th>
        <th scope="col">Utilisateur</th>
        <th scope="col">Entrée</th>
        <th scope="col">Sorti</th>
    </tr>
    </thead>
    <tbody>

    <?php

    $obj = json_decode($results);
    foreach ($obj as $key => $value):
	    $heureConfirme = date("H:i:s", strtotime($value->{'estConfirme'}));
	    $heureSorti = date("H:i:s", strtotime($value->{'estSorti'}));
        ?>

    <tr>
        <td scope="row"><?= $value->{'idTicket'}; ?></td>
        <td><?= $value->{'fkUser'}; ?></td>
        <td><?= $heureConfirme; ?></td>
        <td><?= $heureSorti; ?></td>
    </tr>

    <?php endforeach; ?>
    </tbody>
</table>