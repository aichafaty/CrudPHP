

<!doctype html>
<?php
include ('bd.php');
if (isset($_POST['ajout'])) {
    extract($_POST);
    // var_dump($_POST);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];


    $query = "INSERT INTO etudiant(`nom`,`prenom`,`mail`,`adresse`) VALUE ('$nom','$prenom','$email','$adresse')";
     //$conn =mysqli_query($query);
   mysqli_query($conn, $query);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire Ajout Etudiant</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <form action="#" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label" >Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label" >Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>

            <div class="mb-3">
                <label for="adresse" class="form-label" >Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse">
            </div>

            <div class="mb-3">
                <label for="mail" class="form-label">Email</label>
                <input type="email" class="form-control" id="mail" name="email">
            </div>
<!--            <div class="mb-3 form-check">-->
<!--                <input type="checkbox" class="form-check-input" id="">-->
<!--                <label class="form-check-label" for="exampleCheck1" name="sexeH">Homme</label>-->
<!--            </div>-->
<!--            <div class="mb-3 form-check">-->
<!--                <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                <label class="form-check-label" for="exampleCheck1" name="sexeF">Femme</label>-->
<!--            </div>-->
            <button type="submit" class="btn btn-primary" name="ajout">Ajouter</button>
    </form>
    <table class="table">
        <thead>
        <tr>

            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Email</th>
            <th scope="col">Etat</th>

        </tr>
        <?php
        $query="SELECT * FROM `etudiant`";
         $result= mysqli_query($conn, $query);
        if ($result){

            while($row = mysqli_fetch_array($result)){
//
               echo '<tr>
                       
                     
                        
                        <td>'.$row['nom'].'</td>
                        <td>'.$row['prenom'].'</td>
                        <td>'.$row['adresse'].'</td>
                        <td>'.$row['mail'].'</td>
                         <td>
                            <button class="btn btn-primary"><a href=""class="text-light">Modifier</a></button>
                            <button class="btn btn-danger"><a href="" class="text-light">Supprimer</a></button>
                        </td>
                     </tr>';


           }
         }
         ?>
        </tbody>


    </table>

</div>
</div>
</body>
</html>
