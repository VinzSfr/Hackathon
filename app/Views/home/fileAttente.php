<div id="wait-title" class="text-white animated fadeIn">
	<div id="wait-block">

        <?php if(isset($_SESSION['file'])): ?>

        <h1 class="display-4 text-white">Vous êtes dans la file d'attente en possition</h1>
        <span class="count display-3 text-white">
			<?= $_POST['numero']; ?>
		</span>

        <?php endif; if(!isset($_SESSION['file'])): ?>

            <h1 class="display-4 text-white">Vous devez d'abord vous enregistrer dans la file d'attente ! (tit con va)</h1>

        <?php endif; ?>

	</div>
</div>

</center>
<table class="table table-striped bg-light">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    $obj = json_decode($jsonobj);
    foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
    }
    <?php
    $obj = json_decode($jsonobj);
    foreach ($obj as $key => $value){
        ?>
    <tr>
        <th scope="row"><?= ;?></th>
        <td><?= $value ;?></td>
        <td><?= $value ;?></td>
        <td><?= $value ;?></td>
        <td><?= $value ;?></td>
    </tr>
    <?php
    } ?>
    </tbody>
</table>
</header>