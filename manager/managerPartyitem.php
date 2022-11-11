<?php
class Mpartyitem extends Partyitem{

    public function createPartyitem($bdd, $name, $im ,$des, $vis, $typ){
        try{    
                $req = $bdd->prepare('INSERT INTO partyitem(name_partyitem,image_partyitem,description_partyitem,
                                                  visibility_partyitem,id_type_partyitem)VALUES (?,?,?,?,?)');
              
                                    $req->bindParam(1, $name, PDO::PARAM_STR);
                                    $req->bindParam(2, $im, PDO::PARAM_STR);
                                    $req->bindParam(3, $des, PDO::PARAM_STR);
                                    $req->bindParam(4, $vis, PDO::PARAM_INT);
                                    $req->bindParam(5, $typ, PDO::PARAM_INT);
                                    $req->execute();
            }
        catch(exception $e){
            die('error:'.$e->getMessage());
            }
        }
        
        public function partyitemExist($bdd, $name){
            $checkItem = $bdd->prepare('SELECT image_partyitem, name_partyitem, description_partyitem FROM partyitem 
                                        WHERE name_partyitem = ?');
            $checkItem ->bindParam(1,$name,PDO::PARAM_STR);
            $checkItem->execute();
            $result=$checkItem->fetch();
        
            if($result){
                return false;
            }
            else{
                return true;
            }
        }
        
        
        public function showAll($bdd){
           try{ 
               $req = $bdd->prepare('SELECT id_partyitem,name_partyitem FROM partyitem');
                        $req->execute();
             $recipe = $req->fetchAll();
             return $recipe;
           }
        catch(exception $e){
            die('error:'.$e->getMessage());
            }
            return $recipe;
        }
        
         //?------------------------------------------------------
        //TODO REMMOVE STAR AND LIST INDIVIDUAL ITEMS TO SELECT
         //?------------------------------------------------------
      
        public function showAllItems($bdd){
            try{ 
                $req = $bdd->prepare('SELECT * FROM partyitem ORDER BY id_type_partyitem ASC');
                         $req->execute();
              $all = $req->fetchAll();
            }
         catch(exception $e){
             die('error:'.$e->getMessage());
             }
             return $all;
         }
      
       
        public function updateParty($bdd,$name,$im,$des,$vis,$ity){
                try{
                $mod = $bdd->prepare('UPDATE partyitem SET  
                                                         name_partyitem = ?,
                                                         image_partyitem = ?,
                                                         description_partyitem = ?,
                                                         visibility_partyitem = ?
                                                         WHERE id_partyitem = ?');

                                                        $mod->bindParam(1, $name, PDO::PARAM_STR);
                                                        $mod->bindParam(2, $im, PDO::PARAM_STR);
                                                        $mod->bindParam(3, $des, PDO::PARAM_STR);
                                                        $mod->bindParam(4, $vis, PDO::PARAM_INT);
                                                        $mod->bindParam(5, $ity, PDO::PARAM_INT);

                
                                    $mod->execute();
                                            
                    }
                
        catch(exception $e){
        die('error'.$e->getMessage());
                }
                
            }
        
        public function deletePartyitem($bdd,$ity){
        
                try{
                    $del = $bdd->prepare('DELETE FROM partyitem WHERE id_partyitem = ?');
                    $del->bindParam(1, $ity, PDO::PARAM_INT);
                    $del->execute();
                        
                                        
                    if($del){
                        return true;
                    }
                    }
            
                catch(exception $e){
                    die('error'.$e->getMessage());
                    }
                }
        
        }
        
        
        
        