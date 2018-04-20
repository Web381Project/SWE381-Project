
<?php
  

function printCategories($db){
    $sql = "SELECT * FROM Categories";
    $result = $db->query($sql);

    while($row = mysqli_fetch_assoc($result)){
        echo "<p>". $row['category']."</p><br>";
    
    }
    
}





function getUserId($db){
    
    if(isset($_SESSION['id'])){
        return $_SESSION['id'];
    } else {
        return "Anonymous";
    }   
    
}
// 
//
//
// COMMENTS SECTION 
//
//
//

    function setComments($db) {
    if(isset($_POST['commentSubmit'])) {
        $userID = $_POST['userID'];
        $date = $_POST['date'];
        $comment = $_POST['comment'];

        $sql = "INSERT INTO Comments (userID,date,comment) VALUES ('$userID','$date','$comment')";
        $result = $db->query($sql);
    }
}

function getComments($db){
    $sql = "SELECT * FROM Comments order by date DESC";
    $result = $db->query($sql);


    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='comment-box'><p>";
        echo $row['userID']."<br>";
        echo $row['date']."<br><br>";
        echo nl2br($row['comment'])."<br>";
        echo "</p>
            <form class='flag-form' method='POST' action='".flagComment($db)."'>
            <input type='hidden' name='commentID' value='".$row['commentID']."'>
            <button type='submit' name='commentFlag'><i class='fa fa-flag'></i></button>
            </form>
        
        </div>";
    }
    
}

 function getFlaggedComments($db){
     
  $sql = "SELECT * FROM Comments WHERE flagged=1";
    $result = $db->query($sql);
     
     
      if (!$result)
    {
        
     echo "<p>There's No Flagged Comments!</p>";
        
    } else {
     
     
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='comment-box'><p>";
        echo $row['userID']."<br>";
        echo $row['date']."<br><br>";
        echo nl2br($row['comment'])."<br>";
        echo "</p>
            <form class='flag-form' method='POST' action='".commentDelete($db)."'>
            <input type='hidden' name='commentID' value='".$row['commentID']."'>
            <button type='submit' name='commentDelete'>Delete</button>
            </form>
        
        </div>";
        
    }       
      }
        
    }

function commentDelete($db){
    if(isset($_POST['commentDelete'])){
        $commentID = $_POST['commentID'];
        
        $sql ="DELETE FROM Comments WHERE commentID='$commentID'";
        $result = $db->query($sql);
    }
}
function flagComment($db){
    if(isset($_POST['commentFlag'])){
        $commentID = $_POST['commentID'];
        
        $sql ="UPDATE Comments SET flagged=1 WHERE commentID='$commentID'";
        $result = $db->query($sql);
    }
}



//
//
// GET PRODUCTS
//
//

function getProducts($db){
    $sql = "SELECT * FROM Products";
    $result = $db->query($sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<p>Product Name:".$row['title'];
        echo "<p>Product Name:".$row['rating'];
             
    }
}


//
//
// GET RATING
//
//

function UpdateProductRating($db){
    
    
}



function checkUserRate($db){
    
    
}


function setRate($db){
    
    
if(isset($_POST['Rate'])){
$selected_val = (int)$_POST['rating'];  // Storing Selected Value In Variable    
echo "You have selected :".$selected_val;  // Displaying Selected Value
 
$sql = "INSERT INTO Products (rating) VALUES ('$selected_val')";
$result = $db->query($sql);
    
 } 
    
}

function rating($db){

    
}




?>

