<!DOCTYPE html>
<html>
<head>
    <title>Formulir Perkenalan</title>
</head>
<body>
    <h2>Formulir Perkenalan</h2>
    <form method="post">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="age">Usia:</label>
        <input type="number" name="age" id="age" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="birth_date">Tanggal Lahir:</label>
        <input type="date" name="birth_date" id="birth_date" required><br><br>
        
        <label for="gender">Jenis Kelamin:</label>
        <input type="radio" name="gender" value="Laki-laki" required>Laki-laki
        <input type="radio" name="gender" value="Perempuan" required>Perempuan<br><br>
        
        <label for="languages">Bahasa yang dikuasai:</label><br>
        <input type="checkbox" name="languages[]" value="Java">Java
        <input type="checkbox" name="languages[]" value="Python">Python
        <input type="checkbox" name="languages[]" value="HTML">HTML
        <input type="checkbox" name="languages[]" value="CSS">CSS
        <input type="checkbox" name="languages[]" value="Javascript">Javascript
        <input type="checkbox" name="languages[]" value="PHP">PHP<br><br>
        
        <input type="submit" name="submit" value="Buat Perkenalan">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $birth_date = $_POST['birth_date'];
        $gender = $_POST['gender'];
        $languages = isset($_POST['languages']) ? $_POST['languages'] : [];

        if (count($languages) > 1) {
            $last_language = array_pop($languages);
            $languages_text = implode(", ", $languages) . " dan " . $last_language;
            $message= "saat ini saya menguasai bahasa $languages_text";
        }elseif (count($languages) == 1) {
            $languages_text = implode(", ", $languages);
            $message= "saat ini saya menguasai bahasa $languages_text";
        }else {
            $message= "saat ini saya belum menguasai bahasa apapun";
        }
        
        $date_part = explode("-", $birth_date);
        $day = $date_part[2];
        $month = date('F', strtotime($birth_date));
        $year = $date_part[0];

        echo "Haloo nama saya $name saya berumur $age tahun, saya lahir pada tanggal $day $month $year, saya berjenis kelamin $gender, dan $message";
    }
    ?>
</body>
</html>
