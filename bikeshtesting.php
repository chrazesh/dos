
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.min.css" rel="stylesheet" type="text/css"/>
<link href="/path/to/local/nepali.datepicker.min.css" rel="stylesheet" type="text/css"/>
 <title>Bikesh Testing</title>

    <style>

panel-heading {
      padding: 5px 15px;
    }

    .panel-title {
      font-weight: bold;
    }

    .InputStyle {
      /* height: 22px; */
      height: 28px;
    }

    .Language {
      height: 28px;
      /* outline: hidden; */
      /* border-color: transparent; */
      /* border-bottom: 4px dotted #a7a7a7; */
      /* background-color: #f2f2f2; */
    }

    #ContainerStyle {

      border-radius: 10px;
    }

    #rowStyle {
      margin: 10px 10px 10px 10px;
      padding: 10px;
    }

    .col {
      padding: 5px;

    }

    label {
      font-size: 12px;
      font-weight: 12px;
      font-family: 'Times New Roman', Times, serif;
    }

    .SpanStyle {
      display: flex;
      flex-direction: row;
      margin: 5px;
      align-items: center;
    }

    #SewaDetails {
      width: 97%;
      height: 300px;
      border: 2px solid black;
      padding: 10px;

    }

    .YesNo {
      display: flex;
      flex-direction: column;
    }

    .CheckBoxStyle {
      display: flex;
      flex-direction: row;
    }

    .icon {
      outline: none;
      border: none;
      background: transparent;

    }

    .save {
      background-color: #a7a7a7;
      border-radius: 5px;
      color: white;
    }

    .SaveIcon {
      height: 15px;
      width: 15px;
    }


    /* start css code for report button from  here   */
    #ReportStyle {
      text-decoration: none;
      color: white;
    }

    #BlockOpen {
      display: none;
    }

      .error
{
  color: red;
  size: 80%
}
.hidden
{
  display:none
}
    </style>
  </head>
  <body>
        <p>
            <input type="text" id="nepali-datepicker" placeholder="Select Nepali Date"/>
        </p>
  
                 <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.min.js" type="text/javascript"></script>
        
  
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
<!-- javascript code here  -->


              <script>
                    window.onload = function() {
                var mainInput = document.getElementById("nepali-datepicker");
                mainInput.nepaliDatePicker();
            };
                $(document).ready(function(){
                        // checkbox validation  js code 
      // $('input[type="checkbox"]').on('change', function () {
      //   $('input[name="' + this.name + '"]').not(this).prop('checked', false);
      //          });

            // checkbox validation  js code 
            $('.TimeChecked').on('change', function () {
        $('input[name="' + this.name + '"]').not(this).prop('checked', false);
                    });
                });

                $(".clsgender").on("click", function () {
        var id = $(this).data("rdb");
        $("#" + id).prop("checked", "checked");
        // alert("checked");


       
  // section button 
            $("#Onclick").click(function() {
            
              $("#nationality").hide();
                $(".append").append(
'<input type="text" placeholder="enter your other education.">');
            });
  
      });
                </script>
       

 

       
    <script>
      function validationForm(){

        var fullName = document.getElementById('Fullname').value;
        let Password = document.getElementById('pass1').value;
        var Email = document.getElementById('email').value;

           if(fullName == ""){
             document.getElementById('userName').innerHTML = "* Please fill the user field !";
             document.getElementById('userName').style.display = "block";
             document.getElementById('Fullname').style.border = "2px solid red";
             return false;
           }

        
           if((Password.length <= 5) || (Password.length > 20)){
            document.getElementById('userpass').innerHTML = "* password must be 5 between 5 and 20 !";
            document.getElementById('pass1').style.border = "2px solid red";
            document.getElementById('userpass').style.display = "block";
            return false;
                       }
    
      }

      console.log("An example to validate the date");
let isValidDate = Date.parse('05/11/22');
if (isNaN(isValidDate)) {
  console.log("Not a valid date format.");
}
else{
    console.log("Valid date format.");
}
    </script>
  </body>
  </html>