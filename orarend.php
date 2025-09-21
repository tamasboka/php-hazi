<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid black">
    <?php
    $timetable = [
        "Hétfő" => ["Matematika", "Magyar", "Történelem", "Backend"],
        "Kedd" => ["Fizika", "Angol", "Backend", "Backend", "Backend", "Backend"],
        "Szerda" => ["Backend", "Informatika", "Történelem", "Angol", "Osztályfőnöki"],
        "Csütörtök" => ["Irodalom", "Matematika", "Backend"],
        "Péntek" => ["Biológia", "Pénzügyi ismeretek", "Munkaügyi ismeretek", "Földrajz"]
        ];
        foreach ($timetable as $day => $lessons) {
            echo "<tr style='border: 1px solid black'>";
            echo "<th style='border: 1px solid black'>$day</th>";
            foreach ($lessons as $lesson) {
                echo "<td style='border: 1px solid black' ";
                if ($lesson === "Backend") {
                    echo "class='text-danger text-bg-secondary'";
                }
                echo ">$lesson</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>