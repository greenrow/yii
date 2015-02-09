<?php

namespace app\controllers;

use Yii;

use yii\web\Controller; //основной класс для Контроллеров

use app\models\art\Project; //база Project



class ProjectsController extends Controller

{
  

    public $layout = 'main'; //слой по умолчанию
  

   
public function actionIndex(){   
    
    
                    $proj= new Project;         //создаем обьект класс Project 
                    


                  $ava= $proj->get_project_files();  //вызываем его метод (выводит спсиок всех актиных проектов//


                   return $this->render('index',['ava'=>$ava]); //подеключаем шаблон index  и передаем в него параметр ava
    
           
}
