// JavaScript Document
<script type="text/javascript">
<!--
//variable that will increment through the images
var step=1
function slideit(){
//if browser does not support the image object, exit.
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
if (step<3)
step++
else
step=1
//call function "slideit()" every 2.5 seconds, change the 2500 to change the time
setTimeout("slideit()",2500)
}
//slideit()
//-->
</script>