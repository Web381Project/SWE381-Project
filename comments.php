
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

function flagComment($db){
    if(isset($_POST['commentFlag'])){
        $commentID = $_POST['commentID'];
        
        $sql ="UPDATE Comments SET flagged=1 WHERE commentID='$commentID'";
        $result = $db->query($sql);
    }
}

?>

