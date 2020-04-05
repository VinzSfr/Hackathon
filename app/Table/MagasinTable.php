<?php


namespace App\Table;


use Core\Table\Table;

class MagasinTable extends Table
{
	protected $table = 'Magasin';

    public static function add(){
        if(!empty($_POST)) { // Si on a demandé de modifier le contenu
            $this->checkInputForm('add');

            $result = $this->Magasin->create([
                'idMagasin' => $_POST['idMagasin'],
                'FK_Adresse' => $_POST['FK_Adresse'],
                'FK_ChaineMagasin' => $_POST['FK_ChaineMagasin'],
                'FK_Utilisateur' => $_POST['FK_Utilisateur'],
            ]);

            if ($result) // si l'insertion à la bdd s'est bien effectuée
                App::getInstance()->alert()->setAlert(App::getInstance()->alert()::POST_ADD);
        }
    }
}
?>