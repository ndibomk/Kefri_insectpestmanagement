
   
<?php
require("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEFRI INSECT PEST MANAGEMENT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
 
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
        }
        #page-header p{
            color: #000;
            font-weight: 500;
            font-size: 30px
        } 

        .contact-header {
            display:flex;
            flex-direction: row !important;
             gap: 15%;
            padding-top: 40px;
           width: 1100px;
            width: fit-content;
            margin-left: auto !important;
            margin-right: auto !important;
        }
        .details{
            width: 53%;
        }
        .map{
            width: 48%;
        }
        #contact-details{
            width: 100%;
        }
       
        #contact-details .details span,
        #form-details form span{
            font-size: 12px;
        }

        #contact-details  .details h2,
        #form-details form h2{
            font-size: 26px;
            line-height: 35px;
            padding: 20px 0;
            font-weight: bold;
        }
        #contact-details  .details h3{
            font-size: 16px;
            padding-bottom: 15px;
            font-weight: bold;
        }
        #contact-details .details li{
            list-style: none;
            display: flex;
            padding: 10px 0;
        }
        #contact-details  .details li i{
            font-size: 20px;
            padding-right: 22px;
            margin-top: 12px;

        }
        #contact-details  .details li p{
            margin-bottom: 5px;
            font-size: 20px;
            color: #000;

        }
    

        #form-details{
            display: flex;
            justify-content: space-between;
            margin: 30px;
            padding: 100px;
            border: 1px solid #000;
        } 
        
        #form-details form{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        #form-details form input,
        #form-details form textarea{
            width: 100%;
            padding: 12px 15px;
            outline: none;
            margin-bottom: 20px;
            border: 1px solid #e1e1e1;
        }
        #form-details form button{
            background-color: #228b22;
            color: #000;
            padding: 10px;
            font-size: 15px;
            border: none;
        }
        #form-details form button:hover{
            background-color: #ccffbb;
        }
    </style>



</head>

<body>
    <?php include 'header.php'; ?>

    <section id="page-header" class="about-header" style="padding-top: 230px; padding-bottom:100px" >
        <h2>#Let's Talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p> 
    </section>

    <section id="contact-details" class="section-p1">
        <div class="contact-header">
            <div class="details">
                <span>GET IN TOUCH</span>
                <h2>Visit our location or contact us today</h2>
                <h3>Head office</h3>
                <div>
                    <ul>
                        <li>
                            <ion-icon name="locate" class="ionicon"></ion-icon>
                            <p>20412-00200 Nairobi, Kenya</p>
                        </li>
                        <li>
                            <ion-icon name="mail"  class="ionicon"></ion-icon>
                            <p>director@kefri.org</p>
                        </li>
                        <li>
                            <ion-icon name="call"  class="ionicon"></ion-icon>
                            <p>+254722157414 / +254724259781</p>
                        </li>
                        <li>
                            <ion-icon name="time"  class="ionicon"></ion-icon>
                            <p>Monday-Friday: 8:00am - 5:00pm</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127645.44839422913!2d36.50157434335938!3d-1.2156859999999907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f210b888e6649%3A0xd4c8d0d5056a767f!2sKenya%20Forestry%20Research%20Institute%20(Kefri)-Head%20Office!5e0!3m2!1sen!2ske!4v1686550736420!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <section id="form-details">
        <form   action="https://formspree.io/f/xleyryyy"
  method="POST"
 id="contact-form">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your name"name="user name">
            <input type="text" placeholder="E-mail" name="user email">
            <input type="text" placeholder="Subject" name="Subject">
            <textarea cols="30" rows="10" placeholder="Your Message" name="message"></textarea>
            <button class="normal" type="submit" value="Send" onclick="emailsender()"> Submit</button>
        </form>
    </section>

    <?php include 'footer.php'; ?>

   
       

  

</body>
</html>
