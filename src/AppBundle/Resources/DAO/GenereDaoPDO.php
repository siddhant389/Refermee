<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GenereDaoPDO
 *
 * @author surbhi
 */
class GenereDaoPDO {
    //put your code here
    
    public function SaveIntoGeneres($objGeneres) {
        $query = "INSERT INTO Generes(genere_id, genere_name) values(:GENERE_ID, :GENERE_NAME)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':GENERE_ID', $objCourse->getGenereId());
            $stmt->bindValue(':GENERE_NAME', $objCourse->getGenereName());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
    }
}
