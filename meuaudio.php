<!DOCTYPE html>
<html>
<body>

<audio id="myAudio" controls>
  
  <source src="https://plataformactea.com.br/atendimento/campainha.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<p>Click the button to find out if the audio has ended.</p>

<p><strong>Tip:</strong> Press play on the audio and click the "Try it" button at the beginning and at the end of the audio.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
  var x = document.getElementById("myAudio").ended;
  document.getElementById("demo").innerHTML = x;
  play();
}
</script>

</body>
</html>