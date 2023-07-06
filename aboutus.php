<?php
require('connection.php');

$query = "SELECT * FROM insects";
$results = mysqli_query($dbconnect, $query);
$row_count = mysqli_num_rows($results);

// Check if the search form is submitted
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "SELECT * FROM insects WHERE 
        category LIKE '%$search%' OR 
        species LIKE '%$search%' OR 
        genus LIKE '%$search%' OR 
        theorder LIKE '%$search%' OR 
        family LIKE '%$search%' OR 
        symptoms LIKE '%$search%' OR 
        biology LIKE '%$search%'";
    $results = mysqli_query($dbconnect, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF=8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KEFRI INSECT PEST MANAGEMENT</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    </head>

    <body>

    <style>

        #page-header{ 
            background-image: url(images/background.jpg);
            background-size: cover;
            width: 100%;
            height: 40vh;
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            padding: 15px;
        }
        #page-header h2{
            color: #000;
            font-size: 70px;
            margin-bottom: 10px;
        }
        #page-header p{
            color: #000;
            font-weight: 500;
            font-size: 30px;
            margin-top: 0px;
        }

        #about-video {
        width: 100%;
        }

        .video-background {
        width: 100%;
        height: 100%;
        }


        #about-us{
        background-color: #ccffbb;
        padding: 50px;
        }

        .about-us-header {
        text-align: center;
        margin-bottom: 30px;
        }

        .about-us-header h2 {
        font-size: 32px;
        color: #000;
        }

        .about-us-content {
        font-size: 18px;
        line-height: 1.6;
        color: #000;
        }

        .about-us-content h3 {
        font-size: 24px;
        color: #000;
        margin-top: 30px;
        margin-bottom: 15px;
        }

        .about-us-content ul {
        list-style-type: disc;
        margin-left: 20px;
        }

        .about-us-content p {
        margin-bottom: 15px;
        color: #000;
        font-size: 18px;
        }

        .about-us-content a {
        color: #000;
        text-decoration: none;
        background-color: #228b22;
        padding: 10px;
        border: none;
        border-radius: 4px;
        }

        .about-us-content a:hover {
        background-color: #ccffbb;
        }


    </style>

<?php include 'header.php'; ?>

        
        <section id="page-header" class="about-header">
           
            <h2>#Know Us</h2>
            <p>We are passionate about what we do and committed to providing the best for our customers.</p>
            
            
        </section>


        <section id="about-video">
            <video class="video-background" src="images/kefri.mp4" autoplay loop muted></video>
        </section>


        <section id="about-us">
            <div class="about-us-header">
                <h2>About Us</h2>
            </div>
            <div class="about-us-content">
                <p>Welcome to the Insect Pest Management System, your trusted solution for effective pest control and management. We specialize in providing comprehensive services to help you combat and prevent insect pests in various settings.</p>
                
                <h3>Our Expertise</h3>
                <p>With years of experience in the field, our team of pest management experts is well-equipped to handle a wide range of insect pests. We have in-depth knowledge of the behavior, habits, and biology of different pests, allowing us to devise effective strategies for their control and elimination.</p>
                
                <h3>Eco-Friendly Approach</h3>
                <p>At the Insect Pest Management System, we prioritize the safety of our clients and the environment. We employ environmentally-friendly practices and use eco-friendly products in our pest control treatments. Our goal is to minimize the impact on the ecosystem while effectively managing insect pests.</p>
                
                <h3>Customized Solutions</h3>
                <p>We understand that every pest infestation is unique, and therefore, we offer customized solutions tailored to your specific needs. Our team will conduct a thorough inspection of your premises to identify the pests and assess the extent of the infestation. Based on our findings, we will develop a personalized pest management plan to address your specific situation.</p>
                
                <h3>Comprehensive Services</h3>
                <p>We provide a wide range of pest management services to suit various residential, commercial, and industrial settings. Our services include:</p>
                <ul>
                <li>Initial pest inspection and assessment</li>
                <li>Pest identification and monitoring</li>
                <li>Pest control treatments, including targeted pest elimination methods</li>
                <li>Preventive measures to minimize future infestations</li>
                <li>Ongoing pest monitoring and maintenance</li>
                </ul>
                
                <h3>Customer Satisfaction</h3>
                <p>Customer satisfaction is at the core of our business. We strive to provide exceptional service, prompt responses, and effective results. Our team of professionals is dedicated to delivering personalized attention and excellent customer care. We value your feedback and continuously work to improve our services to meet your expectations.</p>
                
                <h3>Contact Us</h3>
                <p>Contact us today to learn more about our services and how we can assist you in managing insect pests. Our team is ready to provide you with expert advice, reliable solutions, and a pest-free environment. Together, let's create a safer and healthier space for you, your family, or your business.</p>
                <a href="contact.php">Contact us</a>
            </div>
        </section>


        <?php include 'footer.php'; ?>


       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

