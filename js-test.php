<!DOCTYPE html>
<html>
<body>

<button id="btn1" name="subject" type="submit" value="HTML">HTML</button>

<p>Click the "Try it" button to display the name of the "HTML" button:</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("btn1").name;
    document.getElementById("demo").innerHTML = '<input type="file" name="fileToUpload[]" id="fileToUpload"><br><br>';
}
</script>

</body>
</html>