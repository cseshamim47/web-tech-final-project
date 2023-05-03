<?php
// Establishing connection with the database
$conn = mysqli_connect("localhost", "root", "", "project");

// Initializing variables
$question = $answer = "";
$question_err = $answer_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validating question
    if(empty(trim($_POST["question"]))){
        $question_err = "Please enter a question.";
    } else{
        $question = trim($_POST["question"]);
    }
    
    // Validating answer
    if(empty(trim($_POST["answer"]))){
        $answer_err = "Please enter an answer.";
    } else{
        $answer = trim($_POST["answer"]);
    }
    
    // Checking input errors before inserting in database
    if(empty($question_err) && empty($answer_err)){
        
        // Preparing an insert statement
        $sql = "INSERT INTO faq (question, answer) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Binding variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_question, $param_answer);
            
            // Setting parameters
            $param_question = $question;
            $param_answer = $answer;
            
            // Attempting to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirecting to the user FAQ page
                
                // echo '<script type="text/javascript">alert("FAQ has been posted!");</script>';
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Closing statement
        mysqli_stmt_close($stmt);
    }
    
    // Closing connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin FAQ</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1><a href="admin_dashboard.php" class="username">Back</a></h1>
<h1>Admin FAQ</h1>
		
<style>
 fieldset {
    position: relative;
    top: 50%;
    transform: translateY(50%);
    width: 50%;
    margin: auto;
    border: 2px solid #ccc;
    border-radius: 5px;
    padding: 20px;
  }
</style>
    <fieldset>
        <legend>Admin FAQ</legend>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label>Question:</label>
                <input type="text" name="question" value="<?php echo $question; ?>">
                <span><?php
               
                 echo $question_err; 
                 ?></span>
            </div>
            <br>
            <div>
                <label>Answer:</label>
                <textarea name="answer"><?php echo $answer; ?></textarea>
                <span><?php
                 echo $answer_err;
                  ?></span>
            </div>
            <br>
            <div>
                <input type="submit" value="Post FAQ">
            </div>
        </form>
        <br>
        <div>
            <a href="faq_user.php">View All Posted FAQ</a>
        </div>
    </fieldset>
</body>
</html>
