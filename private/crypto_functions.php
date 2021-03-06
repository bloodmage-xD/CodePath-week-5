<?php

// Symmetric Encryption

// Cipher method to use for symmetric encryption
const CIPHER_METHOD = 'AES-256-CBC';

function key_encrypt($string, $key, $cipher_method=CIPHER_METHOD) {
    $key = str_pad($key, 32, '*');
    $iv_length = openssl_cipher_iv_length(CIPHER_METHOD);
    $iv = openssl_random_pseudo_bytes($iv_length);

    // encrpty
    $encrypted = openssl_encrypt($string, CIPHER_METHOD, $key, OPENSSL_RAW_DATA, $iv);
    $message = $iv . $encrypted;
    return base64_encode($message);
}

function key_decrypt($string, $key, $cipher_method=CIPHER_METHOD) {
  $key = str_pad($key, 32, '*');
  $iv_with_cipher_text = base64_decode($string);
  $iv_length = openssl_cipher_iv_length(CIPHER_METHOD);
  $iv = substr($iv_with_cipher_text, 0 , $iv_length);
  $cipher_text = substr($iv_with_cipher_text, $iv_length);
  $plaintext = openssl_decrypt($cipher_text, CIPHER_METHOD, $key, OPENSSL_RAW_DATA, $iv);
  return $plaintext;
}


// Asymmetric Encryption / Public-Key Cryptography

// Cipher configuration to use for asymmetric encryption
const PUBLIC_KEY_CONFIG = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

function generate_keys($config=PUBLIC_KEY_CONFIG) {
  $resource = openssl_pkey_new($config);
  openssl_pkey_export($resource, $private_key);
  // gets public key
  $key_details = openssl_pkey_get_details($resource);
  $public_key = $key_details["key"];
  //$keys = array('private' => $private_key, 'public' => $public_key);

  return array('private' => $private_key, 'public' => $public_key);
}

function pkey_encrypt($string, $public_key) {
  openssl_sign($data, $raw_signature, $key['private']);
  $signature = base64_encode($raw_signature);
  return $signature;
}

function pkey_decrypt($string, $private_key) {
  $raw_signature = base64_decode($string);
  $result = openssl_verify( $raw_signature,$decrypted,  $public_key);
  return $decrypted;

}


// Digital signatures using public/private keys

function create_signature($data, $private_key) {
  // A-Za-z : ykMwnXKRVqheCFaxsSNDEOfzgTpYroJBmdIPitGbQUAcZuLjvlWH
  openssl_sign($data, $raw_signature, $private_key);
  $signature = base64_encode($signature);
  return $signature;
}

function verify_signature($data, $signature, $public_key) {
  $raw_signature = base64_decode($signature);
  return openssl_verify ($data, $raw_signature, $public_key);

  // Vigenère
//  open
}

?>
