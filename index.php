<?php
$txt = $dTranslated = $finalRe = "";
$display = "none";

if (isset($_POST['send'])){
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
            case "?":
                $split_it[$i] = "?";
                break;
            case "!":
                $split_it[$i] = "!";
                break;
            case "\"":
                $split_it[$i] = "\"";
                break;
            case "\n":
                $split_it[$i] = "\n";
                break;
            case "'":
                $split_it[$i] = "'";
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
        $display = "";
        $finalRe .= $split_it[$i];
    }
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="assests/css/materialize.min.css" media="screen,projection" />

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <style>
            .mainDiv {
                width: 600px;
                height: 830px;
                background: url(assests/img/MainBG2.png);
                background-repeat: repeat;
            }
            
            .chatBoxl {
                width: auto;
                height: auto;
                color: black;
                background-color: white;
                padding: 8px;
                margin-left: 8px;
                margin-right: 80px;
                border-radius: 15px;
                margin-bottom: 20px;
            }
            
            .chatBoxr {
                width: auto;
                height: auto;
                color: black;
                background-color: cornsilk;
                padding: 8px;
                margin-right: 8px;
                margin-left: 80px;
                border-radius: 15px;
                margin-bottom: 20px;
            }
            
            .txtBox {
                position: relative;
                border-radius: 20px;
                font-size: 18px;
                padding: 15px;
                top: 400px;
                height: 60px;
                margin-right: 10px;
                width: 85%;
                outline: none;
                background-color: white;
                resize: none;
                display: inline;
            }

        </style>
    </head>

    <body>
        <div class="container-fluid">
            <form method="post">
                <div class="row">
                    <div class="col l5 offset-l4">
                        <div class="mainDiv">
                            <center>
                                <div class="card teal white-text" style="padding:15px 0 15px 0; border-radius:0px">
                                    <i class="material-icons" style="display:inline; margin-right:20px">chat</i>
                                    <h5 style="font-family:ABeeZee; letter-spacing:2px; display:inline">
                                        ChatEncryp
                                    </h5>
                                </div>
                            </center>
                            <br>
                            <div class="chatBoxl left z-depth-1">
                                <h6 style="font-size:20px;">Hi! I can translate any English word(s) or sentence(s) to Jeoy's Cryptic Language.</h6>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="chatBoxr right z-depth-1" style="display:<?php echo $display?>">
                                <h6 style="font-size:20px">
                                    <?php echo $txt?>
                                </h6>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="chatBoxl left z-depth-1" style="display:<?php echo $display?>">
                                <h6 style="font-size:20px;">
                                    <?php echo $finalRe?>
                                </h6>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="chatBoxl left z-depth-1" style="display:<?php echo $display?>">
                                <h6 style="font-size:20px">
                                    You can copy your translated text, Thank You!
                                </h6>
                            </div>

                            <div style="padding:0 10px 0 10px">
                                <textarea name="txt" class="browser-default txtBox" autofocus placeholder="Type any word/sentences to Translate"></textarea>
                                <button name="send" href="" class="black-text" style="position:relative; top: 400px; display:inline; background-color:transparent; border:0"><i class="material-icons medium">send</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assests/js/materialize.min.js"></script>
    </body>

    </html>
