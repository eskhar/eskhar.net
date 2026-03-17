<?php
$target_dir = "uploads/"; // Папка, куда полетят фото. Убедитесь, что она создана.
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileToUpload'])) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
    // Проверка на ошибки
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<script>alert('Файл загружен!'); window.location.href='index.html';</script>";
    } else {
        echo "Ошибка при копировании файла.";
    }
}
?>