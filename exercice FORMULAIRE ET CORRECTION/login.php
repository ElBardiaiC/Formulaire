
    <!-- Ecrivez un formulaire avec 2 inputs: 
    
    Username

    Password 
        
    Créer une base de données au nom de facebook avec 1 table   
    Membre - avec champs

    id - (Primary Key)    
    email     
    username   
    password      
    nom    
    prenom 

        
    Lorsqu'on envoi la soumission du formulaire login, faites une lecture de la db "facebook" 
    pour savoir si le username existe avec le mot de passe envoyés.  -->



 
   <form method="POST" action="./index.php">

   <label for="">username</label>
    <input type="text" name="username">
    <label for="">password</label>
    <input type="text" name="password">


    <input type="submit" name="button">

    
    </form>

