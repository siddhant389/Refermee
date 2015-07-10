<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EncryptionManager
 *
 * @author surbhi
 */
class EncryptionManager {
    //put your code here
    public function encryptString($string, $password) {
        $keyTag = hashKey($password); 
        $crypted = fEncrypt($string, $keyTag);
        echo $crypted;
    }
    public function decryptString($crypted, $password) {
        $keyTag = hashKey($password);
        $decrypted = fDecrypt($crypted, $keyTag);
        echo $decrypted;
    }
}
