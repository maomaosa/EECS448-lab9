<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo '<link href="myStyle.css" rel="stylesheet" type="text/css"/>';
echo "<wel class = 'wel'>Welcome to XX store!</wel><br>";
echo "<wel class = 'wel'>Here is your recepit</wel><br>";

echo "<div class='col1'>  </div>";
echo "<div class='col2'>Quality</div>";
echo "<div class='col3'>Cost Per Item</div>";
echo "<div class='col4'>Sub Total</div>";

echo "<div class='col1-1'> item1 </div>";
$value1 = $_POST["item1Value"];
echo "<div class='col1-2'>".$value1. "</div>";
echo "<div class='col1-3'>$1499.99</div>";
echo "<div class='col1-4'>$".$value1*1499.99."</div>";

echo "<div class='col2-1'> item2 </div>";
$value2 = $_POST["item2Value"];
echo "<div class='col2-2'>".$value2. "</div>";
echo "<div class='col2-3'>$189.99</div>";
echo "<div class='col2-4'>$".$value2*189.99."</div>";

echo "<div class='col3-1'> item3 </div>";
$value3 = $_POST["item3Value"];
echo "<div class='col3-2'>".$value3. "</div>";
echo "<div class='col3-3'>$169.00</div>";
echo "<div class='col3-4'>$".$value3*169.00."</div>";

echo "<div class='col4-1'> Ship </div>";
$shipping = $_POST["shipchoice"];
echo "<div class='col4-2'> express</div>";
echo "<div class='col4-4'> $".$shipping." </div>";

echo "<div class='col5-1'> Total Cost </div>";
echo "<div class='col5-2'> $" .($shipping+$value3*169.00+$value2*189.99+$value1*1499.99). " </div>";






?>