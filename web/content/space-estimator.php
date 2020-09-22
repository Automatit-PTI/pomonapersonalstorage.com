<?php
$title = "Space Estimator";
$description = "Pomona Self storage is pleased to provide a tool for determining your space requirements.";
require 'header.php';
?>
    
	<div id="PageMiddle">  
        
        <div id="PageMiddleBackground">
        
            <div id="GreenTrapezoid">
            	<div></div>
            </div>        
            
            <div id="MiddleContent">
                    
				<div class="ColFull">
                	<br>
                	<?=file_get_contents('http://tools.automatit.net/common-pages/space-calculator/?color1=254d14&color2=5d8035&link=601177')?>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>	
              
            </div>
            
      	</div>

	</div>
    
<?php
include 'footer.php';
?>
