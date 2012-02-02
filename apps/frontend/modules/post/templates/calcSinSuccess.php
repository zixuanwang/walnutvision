<?php use_javascript('test.js')?>
<form action="/post/calcSin" method="post">
Input Value:
<input type="text" id="val" name="origVal"
onkeyup="calcSin(this.value)">
</form>
<p>Suggestions: <span id="sinValText"></span></p>
