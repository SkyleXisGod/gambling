<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TABLICE </title>
    <style>
        span{
            height: 50px;
            width: 50px;
            background-color: yellow;
            border-radius: 60%;
            border: 1px solid black;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin:20px;
            font-family: fantasy;
        }
        #input{
            width: 40px;
            height: 20px;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }
    </style>
</head>
<body style="font-size: 30px">

    <h1> T A B L I C E  </h1>

    <form action="" method="post">
        <Fieldset>
            <legend> T O T O L O T E K </legend>
            Twoje liczby ( 1 - 49 ): <br>
            <input id="input" name="l1">
            <input id="input" name="l2">
            <input id="input" name="l3">
            <input id="input" name="l4">
            <input id="input" name="l5">
            <input id="input" name="l6"><br>
            <input type="submit" value="W Y Ś L I J" name="submit">
        </Fieldset>
    </form>
    <?php 
    if(isset($_POST["submit"]))
    {
        $mylotto=[];
        $l1=$_POST['l1'];$mylotto[0]=$l1;
        $l2=$_POST['l2'];$mylotto[1]=$l2;
        $l3=$_POST['l3'];$mylotto[2]=$l3;
        $l4=$_POST['l4'];$mylotto[3]=$l4;
        $l5=$_POST['l5'];$mylotto[4]=$l5;
        $l6=$_POST['l6'];$mylotto[5]=$l6;
        $crlotto=array();
        $i = 0;

        while($i<=5)
        {
            $los=rand(1,49);
            if(!in_array($los,$crlotto))
            {
                array_push($crlotto,$los);
                $i++;
            }
        }

        echo "Liczby wylosowane: <br>";
        for($g=0;$g<=5;$g++)
        {
            echo "<span>",$crlotto[$g],"</span>";
        }
        echo "<br> Liczby użytkownika: <br>";
        for($j=0;$j<=5;$j++)
        {
            echo "<span>",$mylotto[$j],"</span>";
        }
        echo "<br> Liczby trafione: <br>";
        for($i=0;$i<=5;$i++)
        {
            if(in_array($mylotto[$i],$crlotto))
            {
                echo "<span>",$mylotto[$i],"</span>";
            }
        }

        
    }

// KACPER ZAGŁOBA 3P 09.10.2024 //

    ?>

</body>
</html>
