<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kelipatan Lima</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="assets/bookIcon.png" rel="website icon">
<link href="style.css" rel="stylesheet">
</head>
<body>
<div class='input' id='input' data-aos="fade-up" data-aos-duration="1500">
    <div class='head' style="width: 500px;">
        <h2 class='title' data-aos="fade-up" data-aos-duration="2000"><big>Kelipatan Lima</big></h2>
    </div>
    <div class='form'>
        <form action="output.php" method="POST" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1300">
            <input type="number" name="input_number" placeholder='&#xF002; Masukkan Angka ' class='text' id='input_number' min="1" required data-aos="fade-up" data-aos-duration="3000"><br>
            <button type="submit" class='btn-input' data-aos="fade-up" data-aos-duration="3000" data-aos-delay="2000">Submit</button>
        </form>
    </div>
</div>
<footer>
    <p>&copy; andkstrr | 2024</p>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
