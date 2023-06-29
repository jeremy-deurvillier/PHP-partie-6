<?php

/* **  Exercice 1 ** */

if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
    if (!empty($_GET['lastname']) && !empty($_GET['firstname'])) {
        echo 'Bonjour ' . htmlspecialchars($_GET['firstname']) . ' ' . htmlspecialchars($_GET['lastname']) . '.<br>';
    } else {
        echo '[1] L\'un des paramètres est vide.<br>';
    }
} else {
    echo '[1] L\'un des paramètres est manquant.<br>';
}

/* ** Exercice 2 ** */

if (isset($_GET['age'])) {
    echo 'Vous avez ' . $_GET['age'] . '.<br>';
} else {
    echo '[2] Vous n\'avez pas d\'âge ?!<br>';
}

/* ** Exercice 3 ** */

if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
    if (!empty($_GET['startDate']) && !empty($_GET['endDate'])) {
        echo 'Dates de début (' . htmlspecialchars($_GET['startDate']) . ') et de fin (' . htmlspecialchars($_GET['endDate']) . ').<br>';
    } else {
        echo '[3] L\'un des paramètres est vide.<br>';
    }
} else {
    echo '[3] L\'un des paramètres est manquant.<br>';
}

/* ** Exercice 4 ** */

if (isset($_GET['language']) && isset($_GET['server'])) {
    if (!empty($_GET['language']) && !empty($_GET['server'])) {
        echo 'Vous utilisez ' . htmlspecialchars($_GET['language']) . ' avec la pile ' . htmlspecialchars($_GET['server']) . '.<br>';
    } else {
        echo '[4] L\'un des paramètres est vide.<br>';
    }
} else {
    echo '[4] L\'un des paramètres est manquant.<br>';
}

/* ** Exercice 5 ** */

if (isset($_GET['week']) && !empty($_GET['week'])) {
    echo 'Semaine : ' . $_GET['week'] . '.<br>';
} else {
    echo '[5] Paramètres vides ou manquants.<br>';
}

/* ** Exercice 6 ** */

if (isset($_GET['building']) && isset($_GET['room'])) {
    if (!empty($_GET['building']) && !empty($_GET['room'])) {
        echo 'Immeuble : ' . htmlspecialchars($_GET['building']) . '. Chambre : ' . htmlspecialchars($_GET['room']) . '.<br>';
    } else {
        echo '[6] L\'un des paramètres est vide.<br>';
    }
} else {
    echo '[6] L\'un des paramètres est manquant.<br>';
}

?>
