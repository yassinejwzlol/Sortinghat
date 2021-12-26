<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  </head>
  <body>
    <div class="Create-Account">
      <h1>Create Account</h1>
      <form action="../assets/db/Add.php" onsubmit="return validateMyForm();" method="GET">
        <div class="input-invullen">
          <input type="text" class="variabele" name="Firstname" required>
          <label>Firstname</label>
        </div>
        <div class="input-invullen">
          <input type="text" class="variabele" name="Lastname" required>
          <label>Lastname</label>
        </div>
        <div class="input-invullen">
          <input type="text" class="variabele" maxlength="1" name="Gender" required>
          <label>Gender (M/V/X)</label>
        </div>
        <div class="input-invullen">
          <input type="text" class="variabele" name="Interesses" required>
          <label>Interesses</label>
        </div>
        <div class="input-invullen">
          <input type="number" class="variabele"  name="Age" required>
          <label>Age</label>
        </div>
        <div class="input-invullen">
          <input type="number" class="variabele" name="Telefoonnummer" required >
          <label>Telefoonnummer</label>
        </div>
        <button type="submit" class="submit" >
          Submit
        </button>
      </form>
    </div>
    
    <script src="assets/js/validation.js">
      
  </script>
  </body>
</html>