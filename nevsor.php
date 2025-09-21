<?php
    $students = [
    ["nev" => "Kiss Kata", "allapot" => "hianyzik"],
    ["nev" => "Nagy Péter", "allapot" => "jelen"],
    ["nev" => "Gál Sándor", "allapot" => "jelen"],
    ["nev" => "Kiss József", "allapot" => "hianyzik"],
    ["nev" => "Bakos Réka", "allapot" => "jelen"],
    ["nev" => "Bakos Bettina", "allapot" => "jelen"],
    ["nev" => "Virág Zsuzsanna", "allapot" => "hianyzik"],
    ["nev" => "Rácz Márton", "allapot" => "jelen"],
    ["nev" => "Gulyás Boldizsár", "allapot" => "hianyzik"],
    ["nev" => "Tóth Anett", "allapot" => "jelen"]
];
?>

<ul>
<?php
    foreach ($students as $student) {
        echo "<li>";
        echo htmlspecialchars($student["nev"]);
        echo "<span style='color:";
        if (htmlspecialchars($student["allapot"] === "hianyzik")) {
            echo "red'>X";
        } else {
            echo "green'>&#10004;";
        }
        echo "</span>";
        echo "</li>";
    }
?>
</ul>