<?php

namespace app\models\;

class Project extends \yii\db\ActiveRecord { //здесь явно расширяем класс ActiveRecord (хотя на данный момент этот класс здесь не используется, поэтому можно было бы расширить обычный для простых запросов Query ,то есть  \yii\db\Query
    
  
    
    
//формируем запрос на выборку проектов (сдесь выбираем все опубликованные проекты)
        
                public function get_all_publish_proj(){
            
                $max = Yii::$app->db->createCommand('SELECT* FROM project WHERE publish=1')->query(); 
           return $max;
            
        }
   }
