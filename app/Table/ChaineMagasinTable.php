<?php


namespace App\Table;


use Core\Table\Table;

class ChaineMagasinTable extends Table
{
    protected $table = 'ChaineMagasin';

    public static function add()
    {
        if (!empty($_POST)) { // Si on a demandé de modifier le contenu
            $this->checkInputForm('add');

            $result = $this->ChaineMagasin->create([
                'idChaineMagasin' => $_POST['idChaineMagasin'],
                'nom' => $_POST['nom'],
                'descriptionCourte' => $_POST['descriptionCourte'],
                'description' => $_POST['description'],
                'secteur' => $_POST['secteur']
            ]);

            if ($result) // si l'insertion à la bdd s'est bien effectuée
                App::getInstance()->alert()->setAlert(App::getInstance()->alert()::POST_ADD);
        }
    }
}
?>