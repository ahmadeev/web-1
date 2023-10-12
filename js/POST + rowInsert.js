function insert(data) {
    var obj = JSON.parse(data);
    var table = document.getElementById('resultTable')
    if (stringCounter == 16) {table.deleteRow(1); stringCounter -= 1};
    var tableRow = document.getElementById('resultTable').insertRow(stringCounter);


    var xValue = tableRow.insertCell(0);
	var yValue = tableRow.insertCell(1);
    var RValue = tableRow.insertCell(2);
    var isHit = tableRow.insertCell(3);
    var currentTime = tableRow.insertCell(4);
    var scriptExecutionTime = tableRow.insertCell(5);
    xValue.innerHTML = obj.x;
    yValue.innerHTML = obj.y;
    RValue.innerHTML = obj.R;
    isHit.innerHTML = obj.isHit;
    currentTime.innerHTML = obj.currentTime;
    scriptExecutionTime.innerHTML = obj.scriptTime;

    stringCounter += 1    
}

stringCounter = 1;
$("#form").on("submit", function(){
    event.preventDefault();
	$.ajax({
		url: 'server/validate.php',
		method: 'post',
		dataType: 'html',
		data: $(this).serialize(),
		success: function(data){
            insert(data)        
		}
	});
});