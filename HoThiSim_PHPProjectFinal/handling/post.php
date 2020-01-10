<?php
         
               
         require_once '../database/connection.php';
         $idUser=$_SESSION['ID'];
                    if(isset($_POST['ok'])){
                      
                        $content =$_POST['postContent'];
                        $img='';
                        if(isset($_POST['imageInsert'])){
                        $img=$_POST['imageInsert'];}
                        $stmInsert ='INSERT INTO notification(not_content,user_id,notification_image) 
                        VALUES("'.$content.'",'.$idUser.',"'.$img.'")';
                        
                        if($connection->query($stmInsert)){
                    
                        }else{
                            echo "can't insert!";
                        }
                        ;
                    }




   
    $stm ='SELECT * FROM notification ';
    $data= $connection->query($stm)->fetch_all();
   
    if($data){
        for($i=count($data)-1;$i>=0;$i--){
            $userAvatar=$connection->query('SELECT user_avatar,user_name,user_id from user where user_id='.$data[$i][3])->fetch_all();
            echo '<div class="card">';
            echo '<div style="display: flex; flex-direction: row;">';
           
                echo '<img style="width: 70px"  class="card-img-top" src="../database/UserImg/'.$userAvatar[0][2].'/'.$userAvatar[0][0].'" alt="">';
              
            echo '  <h5 style=" margin-top: 30px">'.$userAvatar[0][1].'</h5>';
            echo '</div>';
            echo '<p>'.$data[$i][1].'</p>';
            if($data[$i][4]!=''){
                echo '<img style="width: 1000px; height: 500px;margin: 10px auto;" 
                class="card-img-top" src="'.$data[$i][4].'" alt="">';
            }
            echo '<div style=" display: flex;justify-content: space-between; ">';
            echo '<div style="display: flex;flex-direction: row; ">';
    
            echo '<h6 style=" margin-top: 30px">Hi and 700 people loved </h6>';
            echo ' </div >';
            echo '<h6 style=" margin-top: 30px">Nam Anh and 800 people commented</h6>';
            echo '<h6 style=" margin-top: 30px">Nguyen Ha Lam and 10000 people shared</h6>';
            echo '</div> ';
            echo '<div class="card-body" style="display: flex; justify-content: space-between;">';
            echo '<button type="submit" style="width:300px" class="btn btn-primary">
                  <i class="fa fa-thumbs-up" aria-hidden="true"></i>Like</button>';
            echo '<button type="submit" style="width:300px" class="btn btn-primary">
                 <i class="fa fa-comment" aria-hidden="true"></i> Comment</button>';
            echo '<button type="submit" style="width:300px" class="btn btn-primary">
                 <i class="fa fa-share" aria-hidden="true"></i>Share</button>';
            echo '</div>';
            echo '</div>';
        }
    
}

                ?>