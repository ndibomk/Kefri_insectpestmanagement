<?php

require("connection.php");
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF=8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KEFRI INSECT PEST MANAGEMENT</title>
        <link rel="stylesheet" href="style.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <script>
       function logout() {
         window.location.replace("index.php");
           }
       console.log("haha");
    </script>
    </head>
    

    <body>

    <head>
  <style>
   .navbar-nav {
    gap: 3%;
   } 
  </style>
</head>
    
<?php include 'adminheader.php'; ?>
  

        <section id="hero">  
        </section>

        <section id="details">
            <div  class="about">
                <h1 style="color:#ffffff;">About us</h1>
                <p style="color: #ffffff;">The Kefri insect pest management system is a software application designed to assist in efficiently monitoring, preventing, and controlling insect pests in various environments. It facilitates the collection and analysis of pest-related data, including population densities, species identification, and environmental conditions. By providing risk assessments and pest control recommendations, the system aids users in making informed decisions regarding the most effective pest management strategies. Additionally, it offers features such as notifications, recordkeeping, reporting, and integration with external data sources to enhance monitoring capabilities. The system promotes collaboration, enables mobile functionality for field use, and ultimately helps mitigate the negative impact of insect pests on agriculture, urban areas, and public health.</p>
                <a href="mainpage.php"><button style="margin-top: 30px;"  class="btnshowmore">Show more</button></a>
            </div>

            <div class="manuals">
               <h1 class="manualname"  >Manuals</h1>
               <div style="display: flex; flex-direction: row;" class="manualdiv">
                    <h4 class="manualheading">Research manual</h4>
                    <a href="./inventorykefri.xlsx" download>
                    <button class="btnmanualdownload">Download Manual</button>
                    </a>
                </div>
                <div style="display: flex; flex-direction: row;" class="manualdiv">
                    <h4 class="manualheading">Research manual</h4>
                    <a href="./inventorykefri.xlsx" download>
                    <button class="btnmanualdownload">Download Manual</button>
                    </a>
                </div>
                <div style="display: flex; flex-direction: row;" class="manualdiv">
                    <h4 class="manualheading">Research manual</h4>
                    <a href="./inventorykefri.xlsx" download>
                    <button class="btnmanualdownload">Download Manual</button>
                    </a>
                </div>
                <div style="display: flex; flex-direction: row;" class="manualdiv">
                    <h4 class="manualheading">Research manual</h4>
                    <a href="./inventorykefri.xlsx" download>
                    <button class="btnmanualdownload">Download Manual</button>
                    </a>
                </div>
            </div>
        </section>


        <?php include 'footer.php'; ?>
     
               

      
    </body>
</html>