<?php include('Partials/header.php') ?>
<?php include('Partials/menu.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contactez-nous</title>
</head>
<body>
<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid" class="infoContact" style="background-image: url(assets/img/maison-repos.jpg);background-size: cover;color: white;" >
	  <div class="container" align="center"><br>
	    <h1 class="display-4">Contactez-Nous</h1>
	    <p class="lead">Besoin d'aide?</p>
	  </div>
	</div>
	<!-- Logo -->
    <div class="container" align="left">
    	<h3 class="py-2 d-none d-md-inline-block mx-auto">SEN<span class="oah">OAH</span></h3>
    	<small class="form-text text-muted">Nous ne partagerons jamais votre email avec quelqu'un d'autre.</small><hr>
    </div>
<div class="container">
		<form method="POST" enctype="multipart/form-data" action="mail.php">
			<div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="title" value="Madame">
                <label class="form-check-label">Mme</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="title" value="Mademoiselle">
                <label class="form-check-label">Mlle</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="title" value="Monsieur">
                <label class="form-check-label">Mr</label>
              </div>
              
		    <div class="form-row">
		  	 <div class="form-group col-md-6">
		      <label for="inputname">Nom</label>
		      <input type="text" class="form-control" placeholder="Votre Nom" name="name" required>
		      <span class="error"><?php echo $nameErr;?></span>
		    </div>
		    <?php echo $nameErr; ?>
		     <div class="form-group col-md-6">
		      <label for="inputprenom">Prènom</label>
		      <input type="text" class="form-control" placeholder="Votre Prènom" name="name">
		    </div>
		    <br id="errorFirstName">
		    <div class="form-group col-md-6">
		      <label for="email">Email</label>
		      <input type="email" class="form-control" placeholder="Email" name="email" required >
		      <div class="invalid-feedback">
        		Please provide a valid email.
      		  </div>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="Téléphone">Téléphone</label>
		      <input type="tel" class="form-control" minlength="9" maxlength="12" name="phone" placeholder="0499/99 66 66" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="my-1 mr-2" for="SelectObjet">Objet</label>
  			<select class="custom-select my-1 mr-sm-2" name="objet">
			    <option selected>Choisir...</option>
			    <option value="Recherche Lieu de vie">Vous êtes à la recherche d’un lieu de vie ?</option>
			    <option value="Question/Suggestion">Vous avez une question ou une suggestion à nous faire ?</option>
			  </select>
		  </div>
		  <div class="form-group">
		    <label for="Message">Message</label>
		    <textarea type="textarea" class="form-control" rows="10" cols="50" name="message" placeholder="Votre message ici" required>
		    </textarea>
		 </div>     
	<label for="reply_type">Format de réponse souhaité</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="reply"value="HTML" checked>
                    <label class="form-check-label" for="reply_type1">
                      HTML
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="reply" value="Texte">
                    <label class="form-check-label" for="reply_type2">
                      Texte
                    </label>
                  </div>
                  
		  <button type="submit" class="btn btn-danger" id="firstformelement">Contactez-nous</button>
		</form><br>
</div>
<?php include('Partials/footer.php') ?>
</body>
</html>
