<div id="wait-title" class="text-white animated fadeIn">
    <div id="wait-block">

        <?php if(empty($_POST)): ?>

            <!-- Ici il y a le code pour rejoindre la file d'attente -->
            <div class="container">
                <form class="mr-3 ml-3" method="post">
                    <input type="id_client" class="form-control" placeholder="N° de carte" id="id_client" name="numero">
                    <br>
                    <button type="submit" class="btn btn-primary pl-5 pr-5">Soumettre</button>
                </form>
            </div>

        <?php endif; if(!empty($_POST)): ?>

        <!-- Ici il y a le code pour afficher la possition dans la file d'attente -->
        <h1 class="display-4 text-white">Vous êtes le numéro : </h1>

        <a class="count display-3 text-white">
			<?= $_POST['numero']; ?>
        </a>
            <div>
                <a href="?p=home.fileAttente"><button type="submit" class="btn btn-primary pl-5 pr-5">OK</button></a>
            </div>


        <?php endif;?>

    </div>
</div>

</center>
</header>
