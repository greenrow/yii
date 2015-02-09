
                    <?php foreach($ava as $key){?>  //разбираем параметр $ava(так  как результат присвоенный данной переменной в ProjectControler является массив о перебираем его с помощью foreach)
                  

                            <div  class="col-sm-6 col-md-3 "> //испольуется класс разметки из boostarp(можно просто обычный див)
                                    <div   style='height:300px;padding:0px;overflow:hidden;' class="thumbnail col-md-12 ">
                                    
                                    //здесь отображаем id проекта//
                                        <div data-index="<?php echo $key['id']?>" style='height:150px;overflow:hidden;padding:0px;' class='img_projects_div col-md-12 project_info_div'>
                                            <img  class='img-responsive' src="<?php echo $key['ava']?>" alt="...">

                                        
                                          
                                        
                                       
                                    </div>
                             
                            
                            </div>
							
						</div>
                <?php } ?>
