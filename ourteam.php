
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title>Document</title>
</head>
<style>
    .ourstaff{
    display: flex;
    flex-direction: row;
    width: 100%;
    justify-content: space-evenly;
    flex-wrap: wrap;
    }
                
    #page-header{ 
        /* background-image: url(images/background.jpg); */
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


</style>


<body>
<?php include 'header.php'; ?>
   <div id='addmoredetailss' >

    <section id="page-header" class="about-header" style="background-image:none !important" >

        <h2>#Our Tree  Doctors</h2>
        <p>Get to know the faces behind Kefri pest insect pest management system</p>

    </section>

    <div class="body">


            <div class="ourstaff">
            <div class="card" style="  margin-top: 10px;">
                    <div class="staffimage">
                    <img  src="./images/J Njunguna.jpg" alt="Image">
                </div>
                    <div class="description">
                    <p class="name"> Dr Madam Jane Njenga </p>
                    <p class="position">The ceo</p>
                    <p class="story">The administration of organizations, 
                        whether they are a business, a nonprofit organization, 
                        or a government body through business administration,
                        nonprofit management, 
                        or the political science sub-field of public administration respectively.</p>
                    
                    </div>
                </div>
            </div>

   <div class='otherpeople'>
   <div class="card">
        <div class="staffimage">
        <img  src="./images/J Njunguna.jpg" alt="Image">
    </div>
        <div class="description">
        <p class="name"> Dr Madam Jane Njenga </p>
         <p class="position">The ceo</p>
         <p class="story">The administration of organizations, 
            whether they are a business.</p>
         
        </div>
    </div>
    <div class="card">
        <div class="staffimage">
        <img  src="././images/J Njunguna.jpg" alt="Image">
    </div>
        <div class="description">
        <p class="name"> Dr Madam Jane Njenga </p>
         <p class="position">The ceo</p>
         <p class="story">The administration of organizations, 
            whether they are a business.</p>
         
        </div>
    </div>
    <div class="card">
        <div class="staffimage">
        <img  src="./images/J Njunguna.jpg" alt="Image">
    </div>
        <div class="description">
        <p class="name"> Dr Madam Jane Njenga </p>
         <p class="position">The ceo</p>
         <p class="story">The administration of organizations, 
            whether they are a business.</p>
         
        </div>
    </div>
    <div class="card">
        <div class="staffimage">
        <img  src="./images/J Njunguna.jpg" alt="image">
    </div>
        <div class="description">
        <p class="name"> Dr Madam Jane Njenga </p>
         <p class="position">The ceo</p>
         <p class="story">The administration of organizations, 
            whether they are a business.</p>
         
        </div>
    </div>
    </div>

    </div>
   </div>
  
    <?php include 'footer.php'; ?>

</body>
</html>