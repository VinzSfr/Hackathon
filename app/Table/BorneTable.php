<?php


namespace App\Table;


use Core\Table\Table;

class BorneTable extends Table
{
    protected $table = 'Borne';

    public static function add()
    {
        if (!empty($_POST)) { // Si on a demandé de modifier le contenu
            $this->checkInputForm('add');

            $result = $this->Borne->create([
                'idBorne' => $_POST['idBorne'],
                'numero' => $_POST['numero'],
                'FK_Magasin' => $_POST['FK_Magasin']
            ]);

            if ($result) // si l'insertion à la bdd s'est bien effectuée
                App::getInstance()->alert()->setAlert(App::getInstance()->alert()::POST_ADD);
        }
    }

}
?>