<!DOCTYPE html>
<html>
<head>
<style>
.flip3D{ width:240px; height:200px; margin:10px; float:left; }
.flip3D > .front{
	position:absolute;
	transform: perspective( 600px ) rotateY( 0deg );
	background:#FC0; width:240px; height:200px; border-radius: 7px;
	backface-visibility: hidden;
	transition: transform .8s linear 0s;
}
.flip3D > .back{
	position:absolute;
	transform: perspective( 600px ) rotateY( 180deg );
	background: #80BFFF; width:240px; height:200px; border-radius: 7px;
	backface-visibility: hidden;
	transition: transform .8s linear 0s;
}
.flip3D:hover > .front{
	transform: perspective( 600px ) rotateY( -180deg );
}
.flip3D:hover > .back{
	transform: perspective( 600px ) rotateY( 0deg );
}
</style>
</head>
<body>
<div class="flip3D">
  <div class="back">Box 1 - Back</div>
  <div class="front">Box 1 - Front</div>
</div>
<div class="flip3D">
  <div class="back">Box 2 - Back</div>
  <div class="front">Box 2 - Front</div>
</div>
<div class="flip3D">
  <div class="back">Box 3 - Back</div>
  <div class="front">Box 3 - Front</div>
</div>
</body>
</html>