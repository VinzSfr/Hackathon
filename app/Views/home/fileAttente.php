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
</header>