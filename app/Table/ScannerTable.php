<?php


namespace App\Table;


use Core\Table\Table;

class ScannerTable extends Table
{
    protected $table = 'Scanner';

    public static function add()
    {
        if (!empty($_POST)) { // Si on a demandé de modifier le contenu
            $this->checkInputForm('add');

            $result = $this->Scanner->create([
                'idScanner' => $_POST['idScanner'],
                'dateTimeDebut' => $_POST['dateTimeDebut'],
                'dateTimeFin' => $_POST['dateTimeFin'],
                'estConfirme' => $_POST['estConfirme'],
                'FK_CarteDeFidelite' => $_POST['FK_CarteDeFidelite']
            ]);

            if ($result) // si l'insertion à la bdd s'est bien effectuée
                App::getInstance()->alert()->setAlert(App::getInstance()->alert()::POST_ADD);
        }
    }
}
?>