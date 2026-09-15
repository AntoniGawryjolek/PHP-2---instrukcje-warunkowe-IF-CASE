<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>PHP - Instrukcje warunkowe</title>
</head>

<body>

    <h1>PHP - Instrukcje warunkowe</h1>

    <h2>1. Obliczanie x = a / b</h2>
    <p>Obliczamy wynik dzielenia liczby a przez b.</p>

    <?php

    $a = 10;
    $b = 2;

    if ($b != 0) {
        $x = $a / $b;
        echo "Wynik: $x";
    } else {
        echo "Nie można dzielić przez zero.";
    }

    ?>

    <h2>2. Obliczanie x = a / b + c / d</h2>
    <p>Obliczamy wynik równania.</p>

    <?php

    $a = 10;
    $b = 2;
    $c = 8;
    $d = 4;

    if ($b != 0 && $d != 0) {
        $x = $a / $b + $c / $d;
        echo "Wynik: $x";
    } else {
        echo "Nie można obliczyć wyniku, ponieważ nie można dzielić przez zero.";
    }

    ?>

    <h2>3. Obliczanie x = (a + 6) / (b - 4)</h2>
    <p>Obliczamy wynik równania.</p>

    <?php

    $a = 10;
    $b = 6;

    if ($b - 4 != 0) {
        $x = ($a + 6) / ($b - 4);
        echo "Wynik: $x";
    } else {
        echo "Nie można obliczyć wyniku, ponieważ mianownik jest równy zero.";
    }

    ?>

    <h2>4. Sprawdzanie parzystości liczby</h2>
    <p>Sprawdzamy, czy podana liczba jest parzysta.</p>

    <?php

    $a = 17;

    if ($a % 2 == 0) {
        echo "Liczba $a jest parzysta.";
    } else {
        echo "Liczba $a jest nieparzysta.";
    }

    ?>

    <h2>5. Sprawdzanie podzielności</h2>
    <p>Sprawdzamy, czy pierwsza liczba jest podzielna przez drugą.</p>

    <?php

    $a = 20;
    $b = 5;

    if ($b != 0) {
        if ($a % $b == 0) {
            echo "Liczba $a jest podzielna przez liczbę $b.";
        } else {
            echo "Liczba $a nie jest podzielna przez liczbę $b.";
        }
    } else {
        echo "Nie można dzielić przez zero.";
    }

    ?>

    <h2>6. Sprawdzanie znaku liczby</h2>
    <p>Sprawdzamy, czy liczba jest dodatnia, ujemna czy równa zero.</p>

    <?php

    $a = -7;

    if ($a > 0) {
        echo "Liczba $a jest dodatnia.";
    } elseif ($a < 0) {
        echo "Liczba $a jest ujemna.";
    } else {
        echo "Liczba jest równa 0.";
    }

    ?>

    <h2>7. Największa spośród trzech liczb</h2>
    <p>Sprawdzamy, która z trzech liczb jest największa.</p>

    <?php

    $a = 12;
    $b = 7;
    $c = 20;

    if ($a >= $b && $a >= $c) {
        echo "Największa liczba to $a.";
    } elseif ($b >= $a && $b >= $c) {
        echo "Największa liczba to $b.";
    } else {
        echo "Największa liczba to $c.";
    }

    ?>

    <h2>8. Trzy liczby w kolejności rosnącej</h2>
    <p>Wypisujemy trzy liczby od najmniejszej do największej.</p>

    <?php

    $a = 8;
    $b = 3;
    $c = 5;

    if ($a > $b) {
        $pom = $a;
        $a = $b;
        $b = $pom;
    }

    if ($a > $c) {
        $pom = $a;
        $a = $c;
        $c = $pom;
    }

    if ($b > $c) {
        $pom = $b;
        $b = $c;
        $c = $pom;
    }

    echo "Liczby w kolejności rosnącej: $a, $b, $c.";

    ?>

    <h2>9. Sprawdzanie pełnoletności</h2>
    <p>Sprawdzamy na podstawie daty urodzenia, czy osoba jest pełnoletnia.</p>

    <?php

    $dzienUrodzenia = 15;
    $miesiacUrodzenia = 9;
    $rokUrodzenia = 2008;

    $dzienDzisiaj = 15;
    $miesiacDzisiaj = 9;
    $rokDzisiaj = 2026;

    $wiek = $rokDzisiaj - $rokUrodzenia;

    if ($miesiacDzisiaj < $miesiacUrodzenia ||
        ($miesiacDzisiaj == $miesiacUrodzenia && $dzienDzisiaj < $dzienUrodzenia)) {
        $wiek--;
    }

    if ($wiek >= 18) {
        echo "Osoba ma $wiek lat i jest pełnoletnia.";
    } else {
        echo "Osoba ma $wiek lat i nie jest pełnoletnia.";
    }

    ?>

    <h2>10. Sprawdzanie rodzaju znaku</h2>
    <p>Sprawdzamy, czy podany znak jest dużą literą, małą literą, cyfrą czy innym znakiem.</p>

    <?php

    $znak = "A";

    if (ctype_upper($znak)) {
        echo "Znak $znak jest dużą literą.";
    } elseif (ctype_lower($znak)) {
        echo "Znak $znak jest małą literą.";
    } elseif (ctype_digit($znak)) {
        echo "Znak $znak jest cyfrą.";
    } else {
        echo "Znak $znak jest innym znakiem.";
    }

    ?>

    <h2>11. Sprawdzanie palindromu</h2>
    <p>Sprawdzamy, czy dana liczba trzycyfrowa jest palindromem.</p>

    <?php

    $liczba = 121;

    if ($liczba >= 100 && $liczba <= 999) {

        $setki = intdiv($liczba, 100);
        $jednosci = $liczba % 10;

        if ($setki == $jednosci) {
            echo "Liczba $liczba jest palindromem.";
        } else {
            echo "Liczba $liczba nie jest palindromem.";
        }

    } else {
        echo "Podana liczba nie jest trzycyfrowa.";
    }

    ?>

    <h2>12. Sprawdzanie cyfr liczby</h2>
    <p>Sprawdzamy, czy cyfry liczby są parzyste lub czy ich suma jest równa 4.</p>

    <?php

    $liczba = 24;

    if ($liczba >= 0 && $liczba <= 99) {

        $dziesiatki = intdiv($liczba, 10);
        $jednosci = $liczba % 10;

        if (($dziesiatki % 2 == 0 && $jednosci % 2 == 0) ||
            ($dziesiatki + $jednosci == 4)) {
            echo "Warunek jest spełniony.";
        } else {
            echo "Warunek nie jest spełniony.";
        }

    } else {
        echo "Liczba musi być maksymalnie dwucyfrowa.";
    }

    ?>

    <h2>13. Wystawianie oceny</h2>
    <p>Na podstawie liczby punktów wystawiamy odpowiednią ocenę.</p>

    <?php

    $punkty = 82;

    if ($punkty >= 0 && $punkty <= 29) {
        echo "Punkty: $punkty. Ocena niedostateczna.";
    } elseif ($punkty <= 59) {
        echo "Punkty: $punkty. Ocena dopuszczająca.";
    } elseif ($punkty <= 74) {
        echo "Punkty: $punkty. Ocena dostateczna.";
    } elseif ($punkty <= 89) {
        echo "Punkty: $punkty. Ocena dobra.";
    } elseif ($punkty <= 99) {
        echo "Punkty: $punkty. Ocena bardzo dobra.";
    } elseif ($punkty == 100) {
        echo "Punkty: $punkty. Ocena celująca.";
    } else {
        echo "Podano nieprawidłową liczbę punktów.";
    }

    ?>

</body>
</html>
