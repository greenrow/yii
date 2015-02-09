

//////-------------примеры запросов на jquery (POST или GET)-------------////

<script>
         $('.save_avatar').click(function(){ //событие при клике на элементе
         
                            
                            var url = "index.php?r=project/"; //здесь указывает путь к контролеру
                        //    ( в данном случае будет вызван метод action Index)//
                            
                            //далее стандартные пост запрос с атрибутами
                     var attr_img= $( '.u_avatar img').attr('src');
                     $.post(url,{
                         'filepath':attr_img
                      
                     }
                  );
          
                 // пример с указание конкретного действия контроллера
                  
                    var url = "index.php?r=project%2Faddfoto"; //  -> здесь указываем котроллер project и его action - addfoto,
                   // название действия указывается с маленькой буквы, а %2F это как я понимаю типо префикса
                    
           </script> 
           
           
           
                    
                    
                 
                    //////-------------примеры запросов на HTML методом POST или GET)-------------////
                    
                    
                  //Пример формы регистрации//
                  
                  
 <?php   use yii\helpers\Url;  //это класс помощник для более удобного указание url//
//http://www.yiiframework.com/doc-2.0/guide-helper-url.html //



<h2>Регистрация</h2>
<form action="<?php echo Url::to(['site/register/'])?>" method="POST" name="regform">  //Url::to(['site/register/'])?> - более удобная запсь пути к контроллеру и десйтвию
<table width="100%">
    
    <tr>
<td>Логин</td>
<td><input type="text" name="regform[login]" class="long_field"></td>
</tr>
<tr>
<td>Имя пользователя</td>
<td><input type="text" name="regform[name]" class="long_field" ></td>
</tr>
<tr>
<td>E-mail</td>
<td><input type="text" name="regform[email]" class="long_field" ></td>
</tr>
<tr>
<td>Пароль</td>
<td><input type="password" name="regform[passw]" class="long_field"></td>
</tr>


<tr>
<td colspan="2">
<input type="submit" value="&nbsp;Зарегистрироваться&nbsp;" />
</td>
</tr>
<tr>
    <td>
        <input type="hidden" value="<?=Yii::$app->request->getCsrfToken()?>" />
    </td>
</tr>
</table>
</form>






/--------/   а вот и сам контроллер site/register/'  ----------//

<?php
       public function actionRegister()
       {
           
   $name=$_POST['regform']['login'];  //это введенный логин
   
        $us=new User;  //это таблица  User из бд
        
    if( $us->check_login($name) ==0){  //вызываем метод который проверяет наличие логина//
    

    

         $form_info=\Yii::$app->request->post('regform');  //переменой присваиваем массив из всех полей формы регистрации//
         
         //про Yii::$app->request->post('regform') в самом низу будет ссылка на инфу по запросам//
         
         
         $us->attributes=$form_info; //метод attributes содержит все поля таблицы user и 
         //автоматически записывает в таблицу user значение введеные в форму регистрации,то есть из $form_info
         
         $us->save();  //записываем в таблицу все поля//
         /*отмечу что обращение к таблице User присходит с помощью  класса Active Record ,поэтому мы может 
         использовать методы этого класса*/
         
         //про AR  http://www.yiiframework.com/doc-2.0/yii-db-activerecord.html //
         
         
                             echo 'you register';
               }else{
                   echo 'login busy';

               };
   
}


///  ПРО ЗАПРОСЫ  POST GET //

//http://www.yiiframework.com/doc-2.0/guide-runtime-requests.html//
