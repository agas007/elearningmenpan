<?php
session_start();

// Include Library Google Client (API)
include_once 'libraries/google-client/Google_Client.php';
include_once 'libraries/google-client/contrib/Google_Oauth2Service.php';
$client_id = '918275255203-98rp88i990lvl1i4dpurfnru6qgg4uq4.apps.googleusercontent.com'; // Google client ID
$client_secret = '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'; // Google Client Secret
$redirect_url = 'https://elearningmenpan.com/login/google.php'; // Callback URL

// Call Google API
$gclient = new Google_Client();
$gclient->setApplicationName('Google Login'); // Set dengan Nama Aplikasi Kalian
$gclient->setClientId($client_id); // Set dengan Client ID
$gclient->setClientSecret($client_secret); // Set dengan Client Secret
$gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login
$google_oauthv2 = new Google_Oauth2Service($gclient);
?>