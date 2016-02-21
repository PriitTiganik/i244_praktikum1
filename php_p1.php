<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>tere maailm</title>
    <script src="myscript.js"></script> <!-- laeb skripti sisse kuskilt-->
    <script src="time.js"></script>
</head>
<body onload="startTime()">
    <h1>Esimese praktikumi HTML</h1>
    <p>disainitud tekst</p>
    <img src= "https://media.cyberduck.io/img/cyberduck-icon-384.png" alt ="nunnu part"/>
    <br>

    <p2>oled lehel viibinud:</p2>
    <br>
    <label id="minutes">00</label>:<label id="seconds">00</label>

    <br>
    <p.normal>sinu arvuti kell on:</p.normal><br>
    <div id="txt"></div>

    <?php
    //siia saab kirjutda PHP koodi
        include("counter.php");
    ?>


    <script type="text/javascript"> //skript kohe htmli sees
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        var totalSeconds = 0;
        setInterval(setTime, 1000);

        function setTime()
        {
            ++totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds%60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
        }

        function pad(val)
        {
            var valString = val + "";
            if(valString.length < 2)
            {
                return "0" + valString;
            }
            else
            {
                return valString;
            }
        }
    </script>

</body>
</html>