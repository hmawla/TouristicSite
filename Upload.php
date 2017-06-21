<!DOCTYPE html>
<html>
<body>
        
<p id="demo1"><input id ="range" type="range" min = "1" max = "5" value = "5" onchange="rangeWarning.value = value">
<output id="rangeWarning" value = "5">5</output><br><button  onclick="addUploaders()">OK</button></p>



<form action="upload-exe.php" method="post" enctype="multipart/form-data">
<p id="demo"></p>
</form>
      
<script>
    function myFunction() {
        document.getElementById("demo").innerHTML = '<input type="file" name="fileToUpload[]" id="fileToUpload"><br><br>';
    }
</script>
 <script>
    function addUploaders(){
        var i;
        var g = document.getElementById("range").value;
        document.getElementById("demo1").innerHTML = '';
        document.getElementById("demo").innerHTML += '';
        document.getElementById("demo").innerHTML += 'Select image to upload:<br>';
        for(i = 0; i<g ; i++){
            document.getElementById("demo").innerHTML += '<input type="file" name="fileToUpload[]" id="fileToUpload"><br><br>';
        }
        document.getElementById("demo").innerHTML += '<input type="submit" value="Upload Image" name="submit">';
        document.getElementById("demo").innerHTML += '';
    }
</script>

</body>
</html>
   