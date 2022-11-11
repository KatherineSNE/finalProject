<?php
class Mneed extends Need{


    public function createNeed($bdd, $nmne, $tyne){
        try{
            $req=$bdd->prepare('INSERT INTO need(name_need,id_type_need)
                                VALUES(?,?)');
            $req->bindParam(1, $nmne, PDO::PARAM_STR);
            $req->bindParam(2,$tyne, PDO::PARAM_INT);
            $req->execute();
                                                    
        }
            catch(exception $e){
                die('error:'.$e->getMessage());
            }
    }

    public function needExist($bdd,$nmne){
            $checkOne = $bdd->prepare('SELECT name_need FROM need WHERE name_need = ?');
            $checkOne->bindparam(1,$nmne,PDO::PARAM_STR);
            $checkOne->execute();
            $result=$checkOne->fetch();

            if($result){
                return false;
            }
            else{
                return true;
            }
        }

        public function showAllNeed($bdd){
            try{ 
                $req = $bdd->prepare('SELECT id_need,name_need FROM need
                        ORDER BY id_type_need ASC');
                        $req->execute();
            $needed = $req->fetchAll();
            return $needed;
            }
        catch(exception $e){
            die('error:'.$e->getMessage());
            }
            return $needed;
        }

}