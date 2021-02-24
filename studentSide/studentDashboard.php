<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/template.css">
        <link rel="stylesheet" href="../CSS/pages.css">
        <script src="studentQuiz.js">
        </script>
        <?php
        session_start();

        if ( isset( $_SESSION['user_id'])) {
        }
        else {
            header("Location: ../login/studentLogin.html")
        }
        ?>
    </head>
<meta charset= "UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="templateheader">
  <ul>
    <li><a href="#RetentionApp" class="Homebutton"><div class="buttontext">RetentionApp</div></a></li>
    
    <li><a href="login/login.html" class="Login"><div class="buttontext">Login</div></a></li>
</ul>
</nav>

<body>
    <br>
    <br>
    <br>
    <br>
    <p class="topHeader">Quiz Testing</p>
    <p class="subHeader">WIP</p>

    <p id="question"></p>
    <p id="after"></p>
    
    <button onclick="button()">Click here to answer</button>
    <form>
        <label for="studentAnswer">Submission</label>
        <br>
        <input type="text" id="studentAnswer" name="studentAnswer">
        <br>
    </form>

    <button onclick="previous()">previous</button>
    <button onclick="next()">next</button>
    <br>
    <button onclick="submit()">submit</button>

    <p id="score"></p>
    <p id="test"></p>
    <p id="score"></p>
    
    <script src="studentQuiz.js">
    </script>
    
</body>
</html>
