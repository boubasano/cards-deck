<?php include __DIR__ . "/../header.php" ?>
<div class="container">
  <div>
    <h1>Inscription</h1>
  </div>
  <form class="col s12">
    <div class="row">
      <div class="input-field col s12">
        <input id="email" type="email">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="password" name= "password" type="password">
        <label for="password">Password</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="confirmPassword" name= "confirmPassword" type="password">
        <label for="confirmPassword">Confirm Password</label>
      </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
      <!-- <i class="material-icons right">send</i> -->
    </button>
  </form>
</div>
<?php include __DIR__ . "/../footer.php" ?>