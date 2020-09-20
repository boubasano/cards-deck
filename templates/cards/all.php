<?php ob_start(); ?>

<h1>liste des collator_get_error_message </h1>
<a class="waves-effect waves-light btn">button</a>
<a class="waves-effect waves-light btn">button</a>
<a class="waves-effect waves-light btn">button</a>
<a class="waves-effect waves-light btn">button</a>
<a class="waves-effect waves-light btn">button</a>

<?php foreach ($cards as $card): ?>

    <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-action">
        <a class="waves-effect waves-light btn">button</a>
        </div>
      </div>
    </div>
  </div>

    
<?php endforeach; ?>

<?php $content = ob_get_clean() ?> 