<?php
    $txt = $dTranslated = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $txt = $_POST['txt'];
        $txt = strtolower($txt);
        $split_it = str_split($txt);
        $finalRe = "";
        for ($i = 0; $i < strlen($txt); $i++){
            switch ($split_it[$i]){
                case "a":
                    $split_it[$i] = "1";
                    break;
                case "e":
                    $split_it[$i] = "2";
                    break;
                case "i":
                    $split_it[$i] = "3";
                    break;
                case "o":
                    $split_it[$i] = "4";
                    break;
                case "u":
                    $split_it[$i] = "5";
                    break;
                case " ":
                    $split_it[$i] = " ";
                    break;
                 case ".":
                    $split_it[$i] = ".";
                    break;
                case ",":
                    $split_it[$i] = ",";
                    break;
                case ":":
                    $split_it[$i] = ":";
                    break;
                case "-":
                    $split_it[$i] = "-";
                    break;
                case "!":
                    $split_it[$i] = "!";
                    break;
                case "\"":
                    $split_it[$i] = "\"";
                    break;
                case "\'":
                    $split_it[$i] = "\'";
                    break;
                case "\;":
                    $split_it[$i] = "\;";
                    break;
                default:
                   $split_it[$i] .= "a";
                    break;
            }
            $finalRe .= $split_it[$i];
        }
    }
?>
    <!DOCTYPE html>
    <html>

    <head>
    </head>

    <body>
        <form method="post">
            <input type="text" name="txt">
            <button type="submit">Translate</button>
            <input type="text" name="dTranslated" value="<?php echo $finalRe?>">
        </form>
    </body>

    </html>
