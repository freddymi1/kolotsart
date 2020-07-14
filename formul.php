if(isset($_POST['submit'])){
    if(!array_key_exists('nom', $_POST) || $_POST['nom'] == ''){
    $errors['nom'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('prenoms', $_POST) || $_POST['prenoms'] == ''){
    $errors['prenoms'] = "Vous n'avez pas renseigné votre prénoms";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Vous n'avez pas renseigné un adresse email valide";
}
if(!array_key_exists('objet', $_POST) || $_POST['objet'] == ''){
    $errors['objet'] = "Vous n'avez pas renseigné le champs objet";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}
if(!array_key_exists('service', $_POST) || !isset($emails[$_POST['service']])){
    $errors['service'] = "Le service que vous demandez n'existe pas!";
}                                
                                <form action="contact.php" method="POST"  class="form-contact">
                                    
                                       
                                    <div class="row">
                                        <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="nom">Nom</label>
                                               <input type="text" name="nom" class="form-control" id="nom">
                                           </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="prenoms">Prénoms</label>
                                               <input type="text" name="prenoms" class="form-control" id="prenoms">
                                           </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         
                                        <div class="col-md-6">
                                            <div class="form-group">
                                               <label for="email">Email</label>
                                               <input type="email" name="email" class="form-control" id="email">
                                           </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="service">Service</label>
                                               <select name="service" class="form-control" id="service">
                                                    <option value="1">Développeur</option>
                                                    <option value="2">Web & App Designer</option>
                                                    <option value="3">Maintenance et Reseau</option>
                                                    <option value="4">Production</option>
                                               </select>
                                           </div>
                                        </div>
                                   
                                    </div>
                                    <div class="form-group">
                                        <label for="objet">Objet</label>
                                        <input type="text" name="objet" class="form-control" id="objet">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" class="form-control" id="message"></textarea>
                                    </div>
                                    <button class="btn btn-secondary btn-md" name="submit">Envoyer</button>
                                
                                </form>