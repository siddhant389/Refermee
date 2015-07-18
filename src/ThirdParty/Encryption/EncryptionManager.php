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
    public static function encryptString($string, $password) {
        $objKeyHashing = new KeyHashing();
        $keyTag = $objKeyHashing->hashKey($password);
        $objEncryption = new Encryption();
        $crypted = $objEncryption->fEncrypt($string, $keyTag);
        return $crypted;
    }
    public static function decryptString($crypted, $password) {
        $objKeyHashing = new KeyHashing();
        $keyTag = $objKeyHashing->hashKey($password);
        $objEncryption = new Encryption();
        $decrypted = $objEncryption->fDecrypt($crypted, $keyTag);
        return $decrypted;
    }
}
