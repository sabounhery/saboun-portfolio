<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacter Moi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body style="padding:50px;" >
<h3>Contacter Moi / FeedBack</h3>

<div class="container">
    <form method="POST" action="process.php">
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom"id="prenom" class="form-control" required >
        </div>
        <div class="form-group">
            <label for="nom">nom</label>
            <input type="text" name="nom"id="nom" class="form-control" required >
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone"id="phone" class="form-control" required >
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email"id="email"  class="form-control" required >
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" name="message"id="message" class="form-control" required >
            <br>
            <button type="submit" class="btn btn-success" required >Suomettre votre Message</button>
            
        </div>
    </form>
</div>
    
</body>
</html>