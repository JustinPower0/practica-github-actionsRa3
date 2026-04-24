<?php
require 'db.php';

$result = $conn->query("SELECT 'Hola desde MySQL!' as mensaje");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Práctica GitHub Actions</title></head>
<body>
  <h1>✅ Despliegue automático funcionando</h1>
  <p><?= $row['mensaje'] ?></p>
</body>
</html>