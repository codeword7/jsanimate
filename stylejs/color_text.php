<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Color Text</title>
</head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
<body>
   <div style="text-align:center; margin-top:0px;">
       <canvas id="myCanvas" style="margin-top:0px;"></canvas>
   </div>
    <script type="text/javascript" src="js/bubble.js"></script>
<script type="text/javascript">
    var myName = "About Us";
    var red = [0, 100, 63];
    var orange = [40, 100, 60];
    var green = [75, 100, 40];
    var blue = [196, 77, 55];
    var purple = [280, 50, 60];
    
    var letterColors = [red, orange, green, blue, purple];
    drawName(myName, letterColors);
    if(10<3){
        bubbleShape = 'square';
    }else{
        bubbleShape = 'circle';
    }        
    bounceBubbles();
</script>    
</body>
</html>