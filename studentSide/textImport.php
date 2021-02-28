<!DOCTYPE html>

<head>
<?php 
$connection = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");
mysqli_select_db($connection,"retentionapp_login");
$importedrow = "Select * from quizStrings where id = 1";
$importedtext = mysqli_query($connection, $importedrow);
$importCheck = mysqli_num_rows($importedtext);
if ($importCheck > 0) {
    while ($row = mysqli_fetch_assoc($importedtext)) {
        $testest = $row['quiztext'];
 //echo $testest;
    }
}
?>
</head>
<body>
<input type="hidden" id="myPhpValue" value="<?php echo $testest ?>" />


<script src="studentQuiz.js">

</script>
<script>
   testdisplay()




    </script>

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