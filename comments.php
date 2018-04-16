<?php
    
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
    $sql = "SELECT * FROM Comments";
    $result = $db->query($sql);
    while($row = mysqli_fetch_assoc($result)){
        echo $row['userID']."<br>";
        echo $row['date']."<br>";
        echo $row['comment']."<br>";
       
        
    }
}

?>

