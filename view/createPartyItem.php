<?php
include './header/header.php';
include './view/menuAdmin.php';
?>

<body>
    <section>
         <div>
    <h1>Créer PartyItem</h1>
            <p>Type 1 = shot  ->  Type 2 = food  ->  Type 3 = Idea</p>
            <form action="" method="POST">
                <label  for="name_partyitem">Name</label>
                <input  class="input" type="text" name="name_partyitem" pattern ="(?=.*\d)(?=.*[A-Za-z0-9-]){1,}">
                <label for="image_partyitem">Image</label>
                <input  class="input" type="file" name="image_partyitem">
                <label for="description_partyitem">Description</label>
                <textarea class="input" rows="auto" cols="1" name="description_partyitem" pattern ="(?=.*\d)(?=.*[a-z0-9-])(?=.*[A-Z]).{1,}"></textarea>
                <label  for="visibility_partyitem">Visible</label>
                <input  class="input" type=tel name="visibility_partyitem" value=1 pattern ="(?=.*[0-1]){1,1}">
                <label  for="id_typeitem">Type</label>
                <input  class="input" type=tel name="id_type_partyitem" pattern ="(?=.*[0-9]){1,2}">
                <button type="submit" name="add_partyitem">Ajouter</button>
            </form>

            <h1>Créer elements</h1>
            <p>Type 1 = Alcohol  ->  Type 2 = Mixer  ->  Type 3 = Equipment Type 4 = Food</p>
            <form action="" method="POST">
                <label  for="name_need">Element One</label>
                <input class="input" type="text" name="name_need">
                <label  for="id_type_need">Type</label>
                <input class="input" type="tel" name="id_type_need">
                <button type="submit" name="add_need">Ajouter</button>
            </form>
</div>
<div>
        <h1>Créer l'article complet</h1>
            
                 <form action="" method="POST">
                 
                    <label  for="partyitem">Choisir Partyitem</label>
                    <select class="input" class="list" name="id_partyitem" id="par"></select>
                    
                    <label  for="id_partyitem">Id de partyitem</label>
                    <input class="input" type="tel" name="id_partyitem">

                    <label  for="id_need">Choisir Element</label>
                    <select class="input" class="list" name="id_need" id="one"></select>
                    
                    <label  for="id_required_one">Id de 1er element</label>
                    <input class="input" type="tel" name="id_required_one">

                    <label  for="placement">Ordre</label>
                    <input class="input" type="tel" name="placement">
                    
                    <button type="submit" name="add_have">Ajouter</button>
                    
            </form>
            
            
            </div>
    </section>
</body>
</html>