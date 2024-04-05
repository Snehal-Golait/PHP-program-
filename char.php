<html>
    <head>
        <title>Program to find substring in given string</title>

    </head>
<body> 
    <form method="post">
        Enter the string:<br>
        <input type="text" name="text1" id="no">
    <br>
    Enter the character to search in the string:<br>
    <input type="text" name="text2" id="no1">
    <input type="submit"/>
</form>
<?php  
   if($_POST)
   {
    $ipstr= $_POST['text1'];
    $search = $_POST['text2'];
    $count = 0;
    for($i="0";$i<=strlen($ipstr);$i++)
    {
        if(substr($ipstr,$i,1) == $search)
        {
            $count = $count+1;

        }
    }
    echo "The character $search appears $count times in the input string $ipstr";
    echo $count,"\n";
   }
?>
</body>
</html>