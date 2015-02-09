
<?php
namespace controllers;
use Yii;
use yii\web\Controller; //основной класс для Контроллеров
use app\models\Project; //база Project


class ProjectsController extends Controller
{
public $layout = 'main'; //определяем слой по умолчанию

public function actionIndex(){  //действие для индекснй страницы

$proj= new Project; //создаем обьект класс Project
$ava= $proj->get_project_files(); //вызываем его метод (выводит спсиок всех активных проектов//
return $this->render('index',['ava'=>$ava]); //подключаем шаблон index и передаем в него параметр ava,котрый содержит резултата выова метода
}


