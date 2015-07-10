<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EncryptionInterface
 *
 * @author surbhi
 */
class EncryptionInterface {
    //put your code here
    public function fEncrypt($plaintext, $key) {
        return rtrim(
            base64_encode(
                mcrypt_encrypt(
                    MCRYPT_RIJNDAEL_256,
                    $key, $plaintext, 
                    MCRYPT_MODE_ECB, 
                    mcrypt_create_iv(
                        mcrypt_get_iv_size(
                            MCRYPT_RIJNDAEL_256, 
                            MCRYPT_MODE_ECB
                        ), 
                        MCRYPT_RAND
                        )
                )
            )
        );
    }
    
    public function fDecrypt($ciphertext, $key) {
      return rtrim(
        mcrypt_decrypt(
            MCRYPT_RIJNDAEL_256, 
            $key, 
            base64_decode($ciphertext), 
            MCRYPT_MODE_ECB,
            mcrypt_create_iv(
                mcrypt_get_iv_size(
                    MCRYPT_RIJNDAEL_256,
                    MCRYPT_MODE_ECB
                ), 
                MCRYPT_RAND
            )
        ), "\0"
    );  
    }
}
