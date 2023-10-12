<!DOCTYPE html>
<html lang="en" translate="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web practice #1</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/icon.png" type="image/png">
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<body bgcolor="24190f">
<div id="container">
    <div id="header">
        <h2>Ahmadeev Danis P3209 #28457</h2>
    </div>

    <div id="contentLeft">
        
        <form method="post" id="form">
            <div id="inputValues">
                
                <table width="180">
                    <tr><label>x value:</label></tr>
                    <tr>
                        <td><input type="radio" onchange="pupu()" id="rB_3" name="xType" value="-3" />
                        <label for="rB_3">-3</label></td>
                        <td><input type="radio" onchange="pupu()" id="rB_2" name="xType" value="-2" />
                        <label for="rB_2">-2</label></td>
                        <td><input type="radio" onchange="pupu()" id="rB_1" name="xType" value="-1" />
                        <label for="rB_1">-1</label></td>
                    </tr>
                    <tr>
                        <td><input type="radio" onchange="pupu()" id="rB0" name="xType" value="0" />
                        <label for="rB0">0</label></td>
                        <td><input type="radio" onchange="pupu()" id="rB1" name="xType" value="1" />
                        <label for="rB1">1</label></td>
                        <td><input type="radio" onchange="pupu()" id="rB2" name="xType" value="2" />
                        <label for="rB2">2</label></td>
                    </tr>
                    <tr>
                        <td><input type="radio" onchange="pupu()" id="rB3" name="xType" value="3" />
                        <label for="rB3">3</label></td>
                        <td><input type="radio" onchange="pupu()" id="rB4" name="xType" value="4" />
                        <label for="rB4">4</label></td>
                        <td><input type="radio" onchange="pupu()" id="rB5" name="xType" value="5" />
                        <label for="rB5">5</label></td>
                    </tr>
                </table>

                <table width="180">
                    <tr><td><label>y value:</label></td></tr>
                    <tr><td><input type="textbox" onchange="pupu()" id="textingtext" name="yType" placeholder="-5 to 3" autocomplete="off"></td></tr>
                </table>

                <table width="190">
                    <tr><label>R value:</label></tr>
                    <td><input type="checkbox" onchange="pupu()" id="checkbox1" name="RType" value="1">
                    <label for="checkbox1">1</label></td>
                    <td><input type="checkbox" onchange="pupu()" id="checkbox2" name="RType" value="2">
                    <label for="checkbox2">2</label></td>
                    <td><input type="checkbox" onchange="pupu()" id="checkbox3" name="RType" value="3">
                    <label for="checkbox3">3</label></td>
                    <td><input type="checkbox" onchange="pupu()" id="checkbox4" name="RType" value="4">
                    <label for="checkbox4">4</label></td>
                    <td><input type="checkbox" onchange="pupu()" id="checkbox5" name="RType" value="5">
                    <label for="checkbox5">5</label></td>
                </table>

                <button type="submit" disabled="" id="submitButton" name="submitButton">Submit</button>
                <button type="reset" id="resetButton" name="resetButton">Reset</button>
            </div>
        </form>
        
    </div>
    <div id="contentRight">
        <img src="assets/img/img.png" id="img">
    </div>
    
    <div id="contentCenter">
        <table align="center" border="1" id="resultTable">
            <thead>
            <tr>
                <th style="width:20px">x</th>
                <th style="width:20px">y</th>
                <th style="width:20px">R</th>
                <th style="width:40px">Hit</th>
                <th style="width:100px">currentTime</th>
                <th style="width:100px">scriptTime</th>
            </tr>
            </thead>
        </table>
    </div>

    <div id="contentBottom">

    </div>
</div>

<script src="js/POST + rowInsert.js"></script>
<script src="js/checkboxes.js"></script>

<script>
    function pupu() {
        var submitButton = form.querySelector('#submitButton');
        var xInput = form.querySelector('input[name="xType"]:checked').value;
        var yInput = form.querySelector('[name="yType"]').value;
        var RInput = form.querySelector('input[name="RType"]:checked').value;

        if (parseInt(yInput) <= 3 && parseInt(yInput) >= -5 && parseInt(yInput) != null && parseInt(xInput) != null && parseInt(RInput) != null) {
            submitButton.removeAttribute("disabled");
            
        } else {
            submitButton.setAttribute("disabled", "");
        }
        
    }
</script>

</body>
</html>