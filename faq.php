<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
   
  
  
</head>
  <body>
  <?php include 'header.php'; ?>

  <div class="accordionmain" style='padding-top: 150px;'>
  <h1 style="text-align: center; padding-bottom:30px">Frequently Asked Questions</h1>
  
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            How can I identify if my tree has a pest infestation?
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Look for signs such as abnormal leaf discoloration, wilting, 
              stunted growth, holes in leaves or trunk, presence of webs, or visible pests on the tree. </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            What are common pests that affect trees?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Common pests include aphids, scale insects, caterpillars, borers, beetles, mites, fungi, and diseases.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            How can I prevent pests from damaging my trees
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Regularly inspect your trees for signs of pests or diseases. Maintain tree health through proper watering, fertilization, 
              and pruning. Use organic pest control methods or consult a professional arborist for appropriate treatments.</div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            What should I do if I notice pests on my trees?
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Identify the specific pest and assess the level of infestation. Depending on the severity, options may include manual removal, 
              horticultural oil or soap sprays, insecticidal treatments, or seeking professional help.</div>
          </div>
        </div>
         
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            Are there any natural ways to control pests on trees?
            </button>
          </h2>
          <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Yes, there are natural methods such as introducing beneficial insects, practicing companion planting, using neem oil or insecticidal soaps, or applying organic pest control products.</div>
          </div>
        </div>
          </div>
          <?php include 'footer.php'; ?>  
          
      </div>
   
    
  </body>
</html>
  

