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
    $sql = "SELECT * FROM Comments order by date DESC";
    $result = $db->query($sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='comment-box'><p>";
        echo $row['userID']."<br>";
        echo $row['date']."<br>";
        echo nl2br($row['comment'])."<br>";
        echo "</p></div>";
        
    }
}

?>

