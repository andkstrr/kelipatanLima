<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Perpangkatan</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="assets/bookIcon.png" rel="website icon">
<style>
    /* Styling Output */
    
    body {
            font-family: Montserrat;
            min-height: 90vh;
            justify-content: center;
            align-items: center;
            background-image: url('assets/AmikadoOutput.gif'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
    }
    .output {   
            color: white;
            text-shadow: -3px 3px 10px rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(2px);
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.7), 0px 10px 20px rgba(0, 0, 0, 0.5), 0px 30px 60px 1px rgba(0, 0, 0, 0.9);
            border-radius: 8px;
            padding: 20px; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: auto; 
            margin-top: 150px;
            width: 80%;
            max-width: 800px; 
            overflow-x: auto; 
            overflow-y: auto; 
            max-height: 400px; 
    }
    .output .head {
            font-family: Montserrat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative; 
            z-index: 250; 
    }
    .output .head .title {
            font-family: Montserrat;
            font-size: 2.2em;
    }
        .output .result {
            font-family: Montserrat;
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px; 
    }
    .card {
            background-color: #696969;
            color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
    }
    .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0.8, 0.8);
    }
    .back button {
            width: 100px;
            height: 30px;
            border-radius: 0px 0px 10px 10px;
            background-color: #556B2F;
            margin-top: 82px;
    }
    .back a {
            text-decoration: none;
            color: white;
    }

        /* Responsiveness Output*/
    @media only screen and (max-width: 768px) {
            .output .result {
                grid-template-columns: repeat(2, 1fr);=
            }
            .output {
                margin-top: 100px; 
            }
    }

    @media only screen and (max-width: 480px) {
            .output .result {
                grid-template-columns: repeat(1, 1fr);
            }
            .back button {
                width: 250px
                height: 80px;
            }
            .output {
                margin-top: 350px;
            }
            body {
                background-image: url('assets/Amikado.gif');
            }
    }
</style>
</head>
<body>
<?php if(isset($_POST['input_number'])): ?>
<div class='output' data-aos="fade-up" data-aos-duration="2500">
    <div class='head'>
        <h1 class='title' data-aos="fade-up" data-aos-duration="2500">Kelipatan 5 dari <?=$_POST['input_number']?> : </h1>
    </div>
    <div class='result'  data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000">
    <?php
        $input_number = $_POST['input_number'];
        $text = 1;
        for ($i = 5; $i <= $input_number; $i += 5) {
            echo "<div class='card'>Kelipatan ke-$text adalah : $i</div>";
            $text++;
        }
    ?>
    </div>  
</div>
<?php endif; ?>
<div class="back">  
    <center>
        <button>
            <a href="index.php">Back</a>
        </button>
    </center>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
