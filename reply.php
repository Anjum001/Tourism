<?php 
include('includes/dbcon.php');
 if($_SESSION['is_admin'] == true) {

  } else {
    header("Location: index.php");
    exit();
  }

if(isset($_GET['id'])) {
  $comment_id = $_GET['id'];
} else {
  header("Location: comment.php");
}


if(!empty($_POST)) {
  $comment_id = $_POST['comment_id'];
     
    $comments = mysql_real_escape_string($_POST['comments']);
   


    $sql = "UPDATE comments SET reply = '{$comments}' WHERE id = '{$comment_id}'";

    $query = mysql_query($sql) or die(mysql_error());

    // test
    $inserted = mysql_affected_rows();
    // if successful

    header("Location: comment.php");
    
}
?>



<title>Comment Box</title>
<div class="comment_input">
<form action="reply.php" method="post">
    <table>
     
      <tr>
        <td>comment</td>
        <td>
          <textarea name="comments" placeholder="Leave Comments Here..." style="width:635px; height:100px;"></textarea></br></br>
        </td>
      </tr>
       <tr>
        <td></td>
        <td>
          <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>">
          <input type="submit" name="submit" value="submit" >
        </td>
      </tr>
    </table>
  </form>
</div>
</div>