<?php
//session part
//session part
session_start();
if (isset($_SESSION['username'])) {
    //   echo $_SESSION['username'];
}
 else if ($_SESSION['username'] == '') {
     echo "no sesssion";
    echo"<script>window.location.href='index.php';</script>";
 }
 //session part
 //session part
 
  include 'db_connection.php';
  $conn = connectMyDB();
  $sql = "SELECT `rProvince`,COUNT(`rProvince`)as countTotal FROM permanentaddress GROUP BY `rProvince`;";
  $req = mysqli_query($conn, $sql);
  $dataPoints='';
  if($req){
  $province_1 = 0;
  $madesh = 0;
  $bagmati = 0;
  $gandaki = 0;
  $lumbini = 0;
  $karnali = 0;
  $sudurpaschim = 0;
    while($data = mysqli_fetch_assoc($req)){
    // echo $data['rProvince'] . "has ".$data['countTotal'] ."<br>";
    switch($data['rProvince']){
      case 'Province 1':
        $province_1 = $data['countTotal'] ;
        break;
      case 'Madesh':
        $madesh = $data['countTotal'] ;
        break;
      case 'Bagmati':
        $bagmati = $data['countTotal'] ;
        break;
      case 'Gandaki':
        $gandaki = $data['countTotal'] ;
        break;
      case 'Lumbini':
        $lumbini = $data['countTotal'] ;
        break;
      case 'Karnali':
        $karnali = $data['countTotal'] ;
        break;
      case 'Sudurpaschim':
        $sudurpaschim = $data['countTotal'] ;
        break;
    }
    }
    $dataPoints = array(
      array("label" => "Province 1", "y" => $province_1),
      array("label" => "Madesh", "y" => $madesh),
      array("label" => "Bagmati", "y" => $bagmati),
      array("label" => "Gandaki", "y" => $gandaki),
      array("label" => "Lumbini", "y" => $lumbini),
      array("label" => "Karnali", "y" => $karnali),
      array("label" => "Sudurpaschim", "y" => $sudurpaschim)
    );
  }else{
    $dataPoints = array(
      array("label" => "Chrome", "y" => 64.02),
      array("label" => "Firefox", "y" => 12.55),
      array("label" => "IE", "y" => 8.47),
      array("label" => "Safari", "y" => 6.08),
      array("label" => "Edge", "y" => 4.29),
      array("label" => "Others", "y" => 4.59)
    );
  }

  // Show no of eductional field in pie chat
  $edu_sql = "SELECT `rEducation`,COUNT(`rEducation`)as countTotal FROM introductiondetails GROUP BY `rEducation`;";
  $edu_req = mysqli_query($conn, $edu_sql);
  $dataPoints1='';
  if($edu_req){
  $Literate = 0;
  $Below = 0;
  $SEE = 0;
  $twelveclear = 0;
  $Graduate = 0;
  $Postgraduate = 0;
  $Doctorate = 0; 
  $Other = 0; 
  while($data = mysqli_fetch_assoc($edu_req)){
    // echo $data['rProvince'] . "has ".$data['countTotal'] ."<br>";
    switch($data['rEducation']){
      case 'Literate साक्षर':
        $Literate = $data['countTotal'] ;
        break;
      case 'Below SEE साक्षरता':
        $Below = $data['countTotal'] ;
        break;
      case 'SEE एस.इ.इ.':
        $SEE = $data['countTotal'] ;
        break;
      case '10+2 or PCL प्लस टु वा प्रविणता प्रमाणपत्र तह':
        $twelveclear = $data['countTotal'] ;
        break;
      case 'Graduate स्नातक':
        $Graduate = $data['countTotal'] ;
        break;
      case 'Postgraduate स्नाकोत्तर':
        $Postgraduate = $data['countTotal'] ;
        break;
      case 'Doctorate पि.एज.डि.':
        $Doctorate = $data['countTotal'] ;
        break;
        case 'Other अन्य Specify.....':
          $Other = $data['countTotal'] ;
          break;
    }
    }
    $dataPoints1 = array(
      array("label" => "Literate साक्षर", "y" => $Literate),
      array("label" => "Below SEE साक्षरता", "y" => $Below),
      array("label" => "SEE एस.इ.इ.", "y" => $SEE),
      array("label" => "10+2 or PCL प्लस टु वा प्रविणता प्रमाणपत्र तह", "y" => $twelveclear),
      array("label" => "Graduate स्नातक", "y" => $Graduate),
      array("label" => "Postgraduate स्नाकोत्तर", "y" => $Postgraduate),
      array("label" => "Doctorate पि.एज.डि.", "y" => $Doctorate),
      array("label" => "Other अन्य Specify.....", "y" => $Other)
    );
  }else{
    $dataPoints1 = array(
      array("label" => "Chrome", "y" => 64.02),
      array("label" => "Firefox", "y" => 12.55),
      array("label" => "IE", "y" => 8.47),
      array("label" => "Safari", "y" => 6.08),
      array("label" => "Edge", "y" => 4.29),
      array("label" => "Others", "y" => 4.59)
    );
  }

  // No of Genders in pie chart 
  $gen_sql = "SELECT `rGender`,COUNT(`rGender`)as countTotal FROM introductiondetails GROUP BY `rGender`;";
  $gen_req = mysqli_query($conn, $gen_sql);
  $dataPoints2='';
  if($req){
  $male = 0;
  $female = 0;
  $other = 0;
    while($data = mysqli_fetch_assoc($gen_req)){
    // echo $data['rProvince'] . "has ".$data['countTotal'] ."<br>";
    switch($data['rGender']){
      case 'पुरुष':
        $male = $data['countTotal'] ;
        break;
      case 'महिला':
        $female = $data['countTotal'] ;
        break;
      case 'अन्य':
        $other = $data['countTotal'] ;
        break;
    }
    }
    $dataPoints2 = array(
      array("label" => "पुरुष ", "y" => $male),
      array("label" => "महिला", "y" => $female),
      array("label" => "अन्य", "y" => $other)
    );
  }else{
    $dataPoints2 = array(
      array("label" => "Chrome", "y" => 64.02),
      array("label" => "Firefox", "y" => 12.55),
      array("label" => "IE", "y" => 8.47),
      array("label" => "Safari", "y" => 6.08),
      array("label" => "Edge", "y" => 4.29),
      array("label" => "Others", "y" => 4.59)
    );
  }
  
// age
 $sql = "SELECT
    SUM(IF(`rAge` < 10,1,0)) as '0-10',
    SUM(IF(`rAge` BETWEEN 10 and 19,1,0)) as '10 - 19',
    SUM(IF(`rAge` BETWEEN 20 and 29,1,0)) as '20 - 29',
    SUM(IF(`rAge` BETWEEN 30 and 39,1,0)) as '30 - 39',
    SUM(IF(`rAge` BETWEEN 40 and 49,1,0)) as '40 - 49',
    SUM(IF(`rAge` BETWEEN 40 and 49,1,0)) as '50 - 59',
    SUM(IF(`rAge` BETWEEN 40 and 49,1,0)) as '60 - 69',
    SUM(IF(`rAge` BETWEEN 40 and 49,1,0)) as '70 - 79',
    SUM(IF(`rAge` BETWEEN 40 and 49,1,0)) as '80 - 89',
    SUM(IF(`rAge` BETWEEN 40 and 49,1,0)) as '90 - 100'
 	FROM introductiondetails;";
  $req = mysqli_query($conn, $sql);
  $dataPointsage='';
  if($req){
      $rAge =0;
      $values[]='';
    while($data = mysqli_fetch_assoc($req)){

        // $rAge = $data['Age'] ;
        $starter=0;$ender=10;
        $i=1;
        foreach($data as $value){
        $values[$i] = $value;
        $i++;
        }
        // echo "Total values : ".count($values);
    }
    $dataPointsage = array(
      array("label" => "0-10", "y" => $values['1']),
      array("label" => "10-20", "y" => $values['2']),
      array("label" => "20-30", "y" =>$values['3']),
      array("label" => "30-40", "y" => $values['4']),
      array("label" => "40-50", "y" => $values['5']),
      array("label" => "50-60", "y" => $values['6']),
      array("label" => "60-70", "y" => $values['7']),
      array("label" => "70-80", "y" => $values['8']),
      array("label" => "80-90", "y" => $values['9']),
      array("label" => "90-100", "y" => $values['10'])
    );
  }else{
    $dataPointsage = array(
      array("label" => "Chrome", "y" => 64.02),
      array("label" => "Firefox", "y" => 12.55),
      array("label" => "IE", "y" => 8.47),
      array("label" => "Safari", "y" => 6.08),
      array("label" => "Edge", "y" => 4.29),
      array("label" => "Others", "y" => 4.59)
    );
  }
//   another
//   another


 // No of department in pie chart 
  $gen_sql = "SELECT `rGender`,COUNT(`rGender`)as countTotal FROM introductiondetails GROUP BY `rGender`;";
  $gen_req = mysqli_query($conn, $gen_sql);
  $dataPoints2='';
  if($req){
  $male = 0;
  $female = 0;
  $other = 0;
    while($data = mysqli_fetch_assoc($gen_req)){
    // echo $data['rProvince'] . "has ".$data['countTotal'] ."<br>";
    switch($data['rGender']){
      case 'पुरुष':
        $male = $data['countTotal'] ;
        break;
      case 'महिला':
        $female = $data['countTotal'] ;
        break;
      case 'अन्य':
        $other = $data['countTotal'] ;
        break;
    }
    }
    $dataPoints2 = array(
      array("label" => "पुरुष ", "y" => $male),
      array("label" => "महिला", "y" => $female),
      array("label" => "अन्य", "y" => $other)
    );
  }else{
    $dataPoints2 = array(
      array("label" => "Chrome", "y" => 64.02),
      array("label" => "Firefox", "y" => 12.55),
      array("label" => "IE", "y" => 8.47),
      array("label" => "Safari", "y" => 6.08),
      array("label" => "Edge", "y" => 4.29),
      array("label" => "Others", "y" => 4.59)
    );
  }
// two bar wala data
// two bar wala data
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
// two bar wala data
// two bar wala data


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
 <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://kit.fontawesome.com/9a86d78b3d.js"></script>
 <script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "No of people according to province"
	},
	subtitles: [{
		text: "January 2023"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
 
 //no of people age in piechart
var chart2 = new CanvasJS.Chart("chartContainerNo2", {
	animationEnabled: true,
	title: {
		text: "No of people according to age group"
	},
	subtitles: [{
		text: "January 2023"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPointsage, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();


//department
var chart2 = new CanvasJS.Chart("chartContainerNo3", {
	animationEnabled: true,
	title: {
		text: "No of people according department"
	},
	subtitles: [{
		text: "January 2023"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPointsage, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

// no of education in pie chart 
var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title: {
		text: "No of people according to Education"
	},
	subtitles: [{
		text: "January 2023"
	}],
	data: [{
		type: "bar",
		yValueFormatString: "#,##0\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

// no of gender in pie chart 
var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title: {
		text: "No of people according to Gender"
	},
	subtitles: [{
		text: "January 2023"
	}],
	data: [{
		type: "line",
		yValueFormatString: "#,##0\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var chartTwoBar = new CanvasJS.Chart("chartContainerNo3", {
    	animationEnabled: true,
    	theme: "light2",
    	title:{
    		text: "Experience And Intrest on Various Department"
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
    		dataPoints: <?php echo json_encode($dataCol1, JSON_NUMERIC_CHECK); ?>
    	},{
    		type: "column",
    		name: "इच्छा",
    		indexLabel: "{y}",
    		yValueFormatString: "###",
    		showInLegend: true,
    		dataPoints: <?php echo json_encode($dataCol2, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chartTwoBar.render();
    
    function toggleDataSeries(e){
    	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    		e.dataSeries.visible = false;
    	}
    	else{
    		e.dataSeries.visible = true;
    	}
    	chartTwoBar.render();
    }
}

// window.onload = function (){

// }
</script>
</head>
<body style="overflow-x: hidden;">


 <nav class="navbar navbar-expand-lg" style="background-color: #e1e1e1;">
  <div class="container-fluid">
    <a class="navbar-brand text-dark fw-bold fs-2" href="index_dashboard.php">DOS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <!--<span class="navbar-toggler-icon"></span>-->
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-dark fw-bold" aria-current="page" href="entry.php">Entery</a>
        <a class="nav-link text-dark fw-bold" href="index1.php">Report</a>
        <a class="nav-link text-dark fw-bold" href="new_user.php">User</a>
      </div>
    </div>
          <div style="display:flex; justify-content: center;">
              <a href="logout.php" style="color:black; text-decoration:none;">Logout &nbsp; <i class="fa-solid fa-right-from-bracket mt-2"></i></a>
      </div>
  </div>
</nav> 
        <div class="row ps-3" style="padding: 5px;">
          <div class="col-md-4 mb-4">
          <div id="chartContainer" style="height: 300px; width: 90%;"></div>
          </div>
          <div class="col-md-4 mb-2">
            <div id="chartContainerNo2" style="height: 300px; width: 90%;"></div>
          </div>
                    <div class="col-md-4 mb-2" name="image_3">
          <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
          </div>
          <div class="col-md-12 mb-4">
          <div id="chartContainer1" style="height: 300px; width: 100%;"></div>
          </div>

          <div class="col-md-12 mb-2">
            <div id="chartContainerNo3" style="height: 300px; width: 100%;"></div>
          </div>
        </div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>


