<?php
namespace App\Table;

use Core\Table\Table;

class Adresse extends Table {
	protected $table = 'Adresse';

    public static function add(){
        if(!empty($_POST)) { // Si on a demandé de modifier le contenu
            $this->checkInputForm('add');

            $result = $this->Adresse->create([
                'idAdresse' => $_POST['idAdresse'],
                'numero' => $_POST['numero'],
                'rue' => $_POST['rue'],
                'codepostal' => $_POST['codepostal'],
                'pays' => $_POST['pays']
            ]);

            if ($result) // si l'insertion à la bdd s'est bien effectuée
                App::getInstance()->alert()->setAlert(App::getInstance()->alert()::POST_ADD);
        }
    }
}
?>