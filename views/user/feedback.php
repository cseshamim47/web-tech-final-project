<!DOCTYPE html>
<html>
<head>
  <title>Feedback System</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

<h1><a href="dashboard.php" class="username">Back</a></h1>

  <h1 align="center" >How was your experience?</h1>
  <form name="fb" method="post" action="../../controllers/submit_feedback.php" onsubmit="return validateForm()"  >
    <div class="emoji-ratings">
      <input type="radio" name="rating" value="1" id="rating1"><label for="rating1">😡</label>
      <input type="radio" name="rating" value="2" id="rating2"><label for="rating2">🙁</label>
      <input type="radio" name="rating" value="3" id="rating3"><label for="rating3">😐</label>
      <input type="radio" name="rating" value="4" id="rating4"><label for="rating4">🙂</label>
      <input type="radio" name="rating" value="5" id="rating5"><label for="rating5">😄</label>
    </div>
    
    <p id="cmt" style=" font-size: 20px;" >Add a comment:</p>
    <textarea id="comment" name="comment" placeholder="plz write your important opinion ....." ></textarea>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
<?php 
    if(isset($_REQUEST['thanks']))
    {
        echo "Thank you for your feedback!";
    }
?>
<script>
        function validateForm() {
            var text = document.fb.comment.value;
            var text2 = document.fb.rating.value;
            if (text2== null || text2 == "") {
                alert("Please provide a emoji feedback");
                return false;
            }
         
       
            if (text== null || text == "") {
                alert("Please write some thing in the comment box");
                return false;
            }
            
         
            return true;
        }
    </script>