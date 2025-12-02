<?php
// /contact-submit (POST)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit;

$honeypot = $_POST['website'] ?? '';
if ($honeypot !== '') { http_response_code(400); exit; } // likely bot

$username = "root";
$servername = 'locahost';
$password ='';
$passworddbname = 'asmovc'



$name = trim($_POST['name'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];
if (!$name) $errors[] = 'name';
if (!$email) $errors[] = 'email';
if (strlen($message) < 10) $errors[] = 'message';

if ($errors) {
  http_response_code(422);
  echo json_encode(['errors'=>$errors]);
  exit;
}

// Use prepared statements / mail library to persist or send
// Example: mail(...) or save to DB and queue notification
// Rate-limit, CSRF token, and sanitize output when rendering back to users
http_response_code(200);
echo json_encode(['status'=>'ok']);

// /contact-submit (POST)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit;

$honeypot = $_POST['asmovcdrc.kesug.com'] ?? '';
if ($honeypot !== '') { http_response_code(400); exit; } // likely bot

$name = trim($_POST['name'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];
if (!$name) $errors[] = 'name';
if (!$email) $errors[] = 'email';
if (strlen($message) < 10) $errors[] = 'message';

if ($errors) {
  http_response_code(422);
  echo json_encode(['errors'=>$errors]);
  exit;
}

// Use prepared statements / mail library to persist or send
// Example: mail(...) or save to DB and queue notification
// Rate-limit, CSRF token, and sanitize output when rendering back to users
http_response_code(200);
echo json_encode(['status'=>'ok']);




<?php
// Connexion à la base de données
conn = new mysqli("localhost", "root", "", "testdb");

if (conn->connect_error) {
  die("Échec de la connexion : " . conn->connect_error);


// Récupération des donnéesname = _POST['name'];email = _POST['email'];

// Insertion dans la tablesql = "INSERT INTO users (name, email) VALUES ('name', 'email')";

if (conn->query(sql) === TRUE) {
  echo "Données enregistrées avec succès.";
} else {
  echo "Erreur : " . conn->error;conn->close();
?>
