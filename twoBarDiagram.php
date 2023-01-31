    <?php
include('db_connection.php');
$conn = connectMyDB();
$dataCol1 = bringData('experience');
$dataCol2= bringData('intrest');
function bringData($name){
    global $conn;
    switch($name){
        case 'experience':
            $sql = "SELECT DISTINCT `department_name`,COUNT(`experience`) as experience FROM servicedepartment WHERE `experience`=1 GROUP BY `department_name`;";
            $datas = get_my_Table_Data($sql);
            return build_array($datas,'department_name','experience');
            break;
        case 'intrest':
            $sql="SELECT DISTINCT `department_name`, COUNT( `interest`) as intrest FROM servicedepartment WHERE `interest`=1 GROUP BY `department_name`;";
            $datas = get_my_Table_Data($sql);
            return build_array($datas,'department_name','intrest');
            break;
    }
}
function build_array($datas,$colName_name,$colName_value){
    $count=count($datas);// echo "<br><hr>count:".$count;
    $my_values='';
    $my_datas=array();
    foreach($datas as $data){
        $data=array("label"=>$data[$colName_name], "y"=>intval($data[$colName_value]));
        array_push($my_datas,$data);
    }
    return $my_datas;
}
    
    $dataPoints1 = array(
    	array("label"=> "2010", "y"=> 36),
    	array("label"=> "2011", "y"=> 34),
    	array("label"=> "2012", "y"=> 40),
    	array("label"=> "2013", "y"=> 35),
    	array("label"=> "2014", "y"=> 39),
    	array("label"=> "2015", "y"=> 50)
    );
    $dataPoints2 = array(
    	array("label"=> "2010", "y"=> 64),
    	array("label"=> "2011", "y"=> 170),
    	array("label"=> "2012", "y"=> 72),
    	array("label"=> "2013", "y"=> 81),
    	array("label"=> "2014", "y"=> 63),
    	array("label"=> "2015", "y"=> 69)
    );
    $dataPoints1=$dataCol1;
    $dataPoints2=$dataCol2;
// echo json_encode($dataPoints1, JSON_NUMERIC_CHECK);
//     	echo "<hr>";
// echo json_encode($dataCol2, JSON_NUMERIC_CHECK);
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>  
    <script>
    window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	theme: "light2",
    	title:{
    		text: "Experience and Intrest Bar Graph"
    	},
    	axisY:{
    		includeZero: true
    	},
    	legend:{
    		cursor: "pointer",
    		verticalAlign: "center",
    		horizontalAlign: "right",
    		itemclick: toggleDataSeries
    	},
    	data: [{
    		type: "column",
    		name: "अनुभव",
    		indexLabel: "{y}",
    		yValueFormatString: "###",
    		showInLegend: true,
    		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
    	},{
    		type: "column",
    		name: "इच्छा",
    		indexLabel: "{y}",
    		yValueFormatString: "###",
    		showInLegend: true,
    		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart.render();
    
    function toggleDataSeries(e){
    	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    		e.dataSeries.visible = false;
    	}
    	else{
    		e.dataSeries.visible = true;
    	}
    	chart.render();
    }
    
    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>                              