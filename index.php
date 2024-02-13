<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Professeur</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #menu {
            text-align: center;
            margin-bottom: 20px;
        }
        #form-container{
            display: none;
        }

        #menu a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
            cursor: pointer;
        }

        #menu a:hover {
            color: #4caf50;
        }
    </style>
</head>
<body> 
    <div id="menu">
        <a href="#" onclick="showForm('prof')">Professeurs</a>
        <a href="#" onclick="showForm('salle')">Salles</a>
        <a href="#" onclick="showForm('classe')">Classes</a>
        <a href="#" onclick="showForm('EDT')">Emplois du temps</a>
    </div>

    <div id="prof" class="form-container">
    <form action="control_professeur.php" method="post" class="control">
    <h1>Information sur les professeurs:</h1>
        Idprofesseur:<input type="text" name="id_prof" ><br>
        Nom:<input type="text" name="Name" ><br>
        Prénoms:<input type="text" name="Firstname" ><br>
        Grade<input type="text" name="Grade" ><br>
       <button>Insert</button>
    </form>    
    
    </div>

    <div id="salle" class="form-container">
    <form action="control_salle.php" method="post">
    <h1>Information sur les salles:</h1>
        Design:<input type="text" name="Design" ><br>
        occupation:<input type="text" name="Occupation" ><br>
        <input type="submit" value="Submit">
    </form>

    </div>

    <div id="classe" class="form-container">
    <form action="control_classe.php" method="post">
    <h1>Information sur les classes:</h1>
    Idclasse:<input type="text" name="id_classe" ><br>
        Niveau<input type="text" name="Niveau" ><br>
        <input type="submit" value="Submit">
    </form>   
    </div>

    <div id="EDT" class="form-container">
    <form action="control_EDT.php" method="post">
    <h1>Information sur l'emplois du temps:</h1>
        idsalle:<input type="text" name="id_salle" ><br>
        idprofesseur:<input type="text" name="idprofesseur" ><br>
        id_classe:<input type="text" name="id_classe" ><br>
        Cours:<input type="text" name="Cours" ><br>
        Date<input type="datetime-local" name="Date" ><br>
        <input type="submit" value="Submit">
    </form>
    </div>

    <script>
       function showForm(formId) {
            // Masquer tous les formulaires
            var forms = document.querySelectorAll('.form-container');
            forms.forEach(function(form) {
                form.style.display = 'none';
            });

            // Afficher le formulaire sélectionné
            var selectedForm = document.getElementById(formId);
            if (selectedForm) {
                selectedForm.style.display = 'block';
            }
        }
    </script>

</body>
</html>
