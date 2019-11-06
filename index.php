
<!DOCTYPE html>
<html>
<head>
    <title>Weather</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1"/>
    <!-- Bootstrap4 CDN CSS File -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- style -->
    <style>
    @media (min-width: 576px) {
        .container {
        max-width: 100%;
        }
    }
        html , body {
            height: 100%;
        }
    .container {
        background-image:url("background.jpg"); 
        margin: 0;
        height: 100%;
        width: 100%;
        background-size:cover;
        background-position:center;
    }
    .centerForm {
        margin: 150px auto 0;
        text-align: center;
    }
    .centerText {
        text-align: center;
    }
    .white {
        color: white;
    }
    .buttonFind {
        margin-top: 16px;
    }
    .ResultBtn {
        margin:30px 40px;
        display: none;
        
    }
   


    </style>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 centerForm">
                <h1 class="centerText white">Weather Predictor</h1>
                <p class="lead centerText white">Enter Your City Below to get a forecase Weather.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" id="city"placeholder="Ex.London,Paris,San Francisco..."/>
                        <button id="findMyCity" class="btn btn-success btn-lg buttonFind">Find My Weather</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="success" class="alert alert-success centerText ResultBtn">Success</div>
        <div id="fail" class="alert alert-danger centerText ResultBtn">Could not Weather data For that City. Please try agin.</div>
        <div id="noCity" class="alert alert-danger centerText ResultBtn">Please enter a City</div>
    </div>
        <!-- Bootstrp CDN JS & Juqary Files -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <!-- Ajax Script -->
<script>
    /*
    $(document).ready(function(){
        $("#findMyCity").click(function(event){
            event.preventDefault();
            if ($("#city").val()!=""{
                $.get("scraper.php?city="+$("#city").val() , function($weather){
                alert($weather);
                });
            } else {
                alert("Please Enter a City");
            )};
        });
    });
    */
    $(document).ready(function(){
        $("#findMyCity").click(function(event){
            event.preventDefault();
            $(".alert").hide();
            if($("#city").val()!="") {
                $.get("scraper.php?city="+$("#city").val() , function(data) {
                    if (data=="") {
                        $("#fail").fadeIn();
                    } else {
                        $("#success").html(data).fadeIn();
                    }
                    
                });
                } else {
                    $("#noCity").fadeIn();
                }
        });
    });
    
</script>

</body>
</html>


