<?php
$emp = array(
    "employe 1" => array("nom"=>"meryem", "poste"=>"Ingenieur d'informatique", "salaire"=>15000),
    "employe 2" => array("nom"=>"omar", "poste"=>"agent commercial", "salaire"=>10000),
    "employe 3" => array("nom"=>"rania", "poste"=>"Hotes de l'air", "salaire"=>8000),
    "employe 4" => array("nom"=>"hamza", "poste"=>"comptable", "salaire"=>12000),
    "employe 5" => array("nom"=>"oumaima", "poste"=>"ingenieur d'electricite", "salaire"=>90000)
);
echo "<table border=1>";
echo "<tr><th>Nom</th><th>poste</th><th>salaire</th></tr>";
foreach($emp as $k=>$v)
{
    echo "<tr>";
    echo "<td>".$v["nom"]."</td>";
    echo "<td>".$v["poste"]."</td>";
    echo "<td>".$v["salaire"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
function moyenne($emp){
    $somme = 0;
    $moyenne = 0;
    foreach($emp as $k=>$v)
    {
        $somme = $somme + $v["salaire"];
    }
    echo "Le salaire moyen des employes est :" ."  ".$moyenne = $somme/5;
}
 moyenne($emp);
 echo "<hr>";
 if(isset($_POST["envoyer"])){
    echo "<table border=1>";
echo "<tr><th>Nom</th><th>poste</th><th>salaire</th></tr>";
    foreach($emp as $k=>$v)
    {
        if($_POST["nom"] == $v["nom"])
        {
            echo "<tr>";
            echo "<td>". $v["nom"]."</td>";
            echo "<td>" .$v["poste"]."</td>";
            echo "<td>" .$v["salaire"] ."</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
 }
echo "<hr>";
$emp = array(
    "employe 1"=>array("email"=>"merragragui3@gmail.com" , "password"=>"mery123"),
    "employe 2"=>array("email"=>"omartazi@gmail.com" , "password"=>"omar"),
    "employe 3"=>array("email"=>"raniaerragragui@gmail.com" , "password"=>"nasser"),
    "employe 4"=>array("email"=>"hamzaerragragui@gmail.com" , "password"=>"hamza"),
    "employe 5"=>array("email"=>"oumaimaerragragui@gmail.com" , "password"=>"seraj")
);

echo "<table border=1>";
echo "<tr><th>Email</th><th>Password</th></tr>";
foreach($emp as $k=>$v)
{
    echo "<tr>";
    echo "<td>".$v["email"]."</td>";
    echo "<td>".$v["password"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
if(isset($_POST["email"]) && ($_POST["passe"])){
    $bool = false;
    foreach($emp as $k=>$v)
    {
        if($_POST["email"] == $v["email"] && $_POST["passe"] == $v["password"])
        {
             echo "Connexion reussi .";
            $bool = true;
            break;
        }
    }
    if(!$bool){
        echo "Email ou mot de passe invalide .";
   }
 }
 echo "<hr>";
if(isset($_POST["com"]))
{
    $nom = $_POST["smiya"];
    $comm = $_POST["comment"];
    $hor = date("Y-m-d H:i:s");
    $com = [
         "nom"=>$nom , "commentaire"=>$comm , "horodatage"=>$hor 
    ];
 echo "Nom :". " " .$com["nom"]."."."<br>";
 echo "Commentaire :" ." ".$com["commentaire"].".". "<br>";
 echo "Horodatage :" ." ".$com["horodatage"]."."."<br>";
}
echo "<hr>";
$tab =[
["ville"=>"Rabat" , "temperature"=>26],
["ville"=>"Casablanca" , "temperature"=>35],
["ville"=>"Chicago" , "temperature"=>2],
["ville"=>"Marrakech" , "temperature"=>48]
];
echo "<table border=1>";
echo "<tr><th>Ville</th><th>Temperature</th></tr>";
foreach($tab as $k=>$v)
{
    echo "<tr>";
    echo "<td>".$v["ville"]."</td>";
    echo "<td>".$v["temperature"]."</td>";
    echo "</tr>";
}
echo "</table>";
function temp($tab)
{
    $maxtemp = 0;
    $maxville ="";
    foreach($tab as $k=>$v){
        if($maxtemp < $v["temperature"]){
            $maxtemp =  $v["temperature"];
            $maxville = $v["ville"];
        }
    }
    echo "<br>";
    echo "la ville avec la temperature la plus elevee est : $maxville avec $maxtemp °C.";
}
temp($tab);
echo "<hr>";
if (isset($_POST["sub"])) {
    if (!empty($_FILES["fichier"]["tmp_name"])) {
        $file = $_FILES["fichier"]["tmp_name"];
        $f = fopen($file, "r");

        if ($f !== false) {
            echo "<table border=1>";
            echo "<tr><th>Nom produit</th><th>Quantite</th><th>Prix</th></tr>";

            while (($data = fgetcsv($f, 1000, ",")) !== false) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            fclose($f);
        } else {
            echo "Erreur : Impossible d'ouvrir le fichier.";
        }
    } else {
        echo "Erreur : Aucun fichier selectionne.";
    }
}
echo "<hr>";
$tab = [
    ["produit"=>"ZEN" , "prix"=>10],
    ["produit"=>"AGRADO" , "prix"=>50],
    ["produit"=>"SNONAS" , "prix"=>20],
    ["produit"=>"LAVANDERA" , "prix"=>75],
    ["produit"=>"TUTTO" , "prix"=>25],
    ["produit"=>"AMOS" , "prix"=>18]
];
$total = 0;
if(isset($_POST["p"]))
{
    if(isset($_POST["products"])){
        $product = $_POST["products"];
        foreach($product as $product){
            echo $product;
            echo "<br>";
            foreach($tab as $v)
            {
            if($product == $v["produit"])
            $total = $total + $v["prix"];
    }
}
    }else{
        echo "Aucun produit sélectionné.";
    }
    echo "Le total des produits est: ".$total;
}
echo "<hr>";
$etd = array(
    "etudaint1"=>array("nom"=>"meryem" , "matieres"=>array("javascript"=>19 , "php"=>18 , "sql"=>18 , "html"=>20)),
    "etudaint2"=>array("nom"=>"omar" , "matieres"=>array("javascript"=>19 , "php"=>18 , "sql"=>18 , "html"=>20)),
    "etudaint3"=>array("nom"=>"reda" , "matieres"=>array("javascript"=>15 , "php"=>12 , "sql"=>13 , "html"=>17))
);
echo "<table border=1>";
echo "<tr><th>nom</th><th>javascript</th><th>php</th><th>sql</th><th>html</th><th>Moyenne</th></tr>";
foreach($etd as $k=>$v)
{
    echo "<tr>";
    echo "<td>".$v["nom"]."</td>";
    foreach ($v["matieres"] as $matiere => $mark) {
        echo "<td>".$mark."</td>";
    }
        $moyenne = array_sum($v["matieres"]) / count($v["matieres"]);
        echo "<td>".number_format($moyenne, 2)."</td>"; 
        echo "</tr>";
    }
echo "</table>";
echo "<hr>";
$ut =  [
    ["nom"=>"meryem"],
    ["nom"=>"omar"],
    ["nom"=>"hassan"],
    ["nom"=>"hamza"],
    ["nom"=>"oumaima"],
    ["nom"=>"ahmad"],
    ["nom"=>"laila"]
];

if (isset($_POST["ajouter"])) {
    $nom = $_POST["n"];
        $ut[] = ["nom" => $nom];
}
if (isset($_POST["modifier"])) {
    $nom = $_POST["n"];
    $nouveauNom = $_POST["nouveau_nom"];
    foreach ($ut as $k => $v) {
        if ($v["nom"] == $nom) {
            $ut[$k]["nom"] = $nouveauNom; 
        }
    }
}

if (isset($_POST["supprimer"])) {
    $nom = $_POST["n"];
    foreach ($ut as $k => $v) {
        if ($v["nom"] == $nom) {
            unset($ut[$k]);
        }
    }
}
echo "<table border=1>";
echo "<tr><th>Nom</th></tr>";
foreach ($ut as $k => $v) {
    echo "<tr><td>" . $v["nom"] . "</td></tr>";
}
echo "</table>";
echo "<hr>";

$pan = array(
    "p1" => array("nom" => "Castrol", "prix" => 500),
    "p2" => array("nom" => "Valéo", "prix" => 150),
    "p3" => array("nom" => "Bosch", "prix" => 300)
);
echo "<table border = 2>
<tr><th>Nom</th>
<th>Prix Unitaire</th></tr>";
foreach($pan as $k => $v)
{
    echo "<tr><td>{$v["nom"]}</td>
    <td>{$v["prix"]}</td></tr>";
}
echo "</table><br>";
if(isset($_POST["valid"]))
{
function total($pan)
{
    $t = 0;
    $prdnam = $_POST["prdname"];
    $p = $_POST["prdqt"];
    foreach($prdnam as $prdnam)
    {
    foreach($pan as $v)
    {
        if($prdnam == $v["nom"] && is_numeric($_POST["prdqt"]) && $_POST["prdqt"] > 0) 
        $t = $v["prix"] * $p;
    }
}
    echo "Le total de votre panier est: ". $t;
}
total($pan);
}
echo "<hr>";
