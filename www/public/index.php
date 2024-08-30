<!doctype html>
<html>
<head lang="sv"></head>

<body>
<h1>Matematik-test</h1>
<form action="evaluate.php" method="post">
   <fieldset>
       <legend>Frågor</legend>
       <label>Ditt namn:</label>
       <input type="text" name="namn">
       <br>
       <label>4 + 5 = </label>
       <input type="text" name="q1">
       <br>
       <label>3 x 5 = </label>
       <input type="text" name="q2">
       <br>
       <label>9 + 9 = </label>
       <input type="text" name="q3">
       <br>
       <label>4 * 7 = </label>
       <input type="text" name="q4">
       <br>
       <label>50 / 2 = </label>
       <input type="text" name="q5">
       <br>
       <input type="submit" value="Rätta">
   </fieldset>
</form>
</body>
</html>