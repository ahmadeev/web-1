<!DOCTYPE html>
<html lang="en" translate="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web practice #1</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/icon.png" type="image/png">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- <script src="js/validate.js"></script> -->
</head>

<body bgcolor="24190f">
<div id="container">
    <div id="header">
        <h2>Ahmadeev Danis P3209 #28457</h2>
    </div>
    <div class="mainContent">
        <div id="contentLeft">
            
            <form method="post" id="form">
                <div class="formLine"><label>x value:</label></div>
                <div class="formLine">
                    
                    <label><input type="radio" onchange="pupu()" class="radio1" name="xType" value="-3" />-3</label>
                    <label><input type="radio" onchange="pupu()" class="radio2" name="xType" value=" 0" />0</label>
                    <label><input type="radio" onchange="pupu()" class="radio3" name="xType" value="3" />3</label>
                    
                          
                </div>
                <div class="formLine">
                    <label><input type="radio" onchange="pupu()" class="radio1" name="xType" value="-2" />-2</label>
                    <label><input type="radio" onchange="pupu()" class="radio2" name="xType" value=" 1" />1</label>
                    <label><input type="radio" onchange="pupu()" class="radio3" name="xType" value="4" />4</label>
                    
                          
                </div>
                <div class="formLine">
                    <label><input type="radio" onchange="pupu()" class="radio1" name="xType" value="-1" />-1</label>  
                    <label><input type="radio" onchange="pupu()" class="radio2" name="xType" value=" 2" />2</label>  
                    <label><input type="radio" onchange="pupu()" class="radio3" name="xType" value="5" />5</label> 
                    
                    
                                  
                </div>
                <div class="formLine"><label>y value:</label></div>
                <div class="formLine">

                    <input type="textbox" id="textingtext" name="yType" placeholder="-5 to 3" autocomplete="off">
                </div>
                <div class="formLine"><label>R value:</label></div>
                <div class="formLine">
                    
                    <input type="checkbox" onchange="pupu()" name="RType" value="1">
                    <label for="checkbox1">1</label>
                    <input type="checkbox" onchange="pupu()" name="RType" value="2">
                    <label for="checkbox2">2</label>
                    <input type="checkbox" onchange="pupu()" name="RType" value="3">
                    <label for="checkbox3">3</label>
                    <input type="checkbox" onchange="pupu()" name="RType" value="4">
                    <label for="checkbox4">4</label>
                    <input type="checkbox" onchange="pupu()" name="RType" value="5">
                    <label for="checkbox5">5</label>
                </div>
                <div class="formLine">
                    <button type="submit" disabled="" id="submitButton" name="submitButton">Submit</button>
                    <button type="reset" id="resetButton" name="resetButton">Reset</button>
                </div>
            </form>  
            
        </div>
        <div id="contentRight">
            <img src="assets/img/img.png" id="img">
              
        </div>
            
    </div>
    <div id="contentCenter">
        <table align="center" id="resultTable">
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

    
</div>
<!-- <div id="contentBottom"></div> -->

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