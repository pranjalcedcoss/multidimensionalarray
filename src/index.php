<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- <table border='1pxsolid'> -->

  <?php
  $products = array(
    "Electronics" => array(
      "Television" => array(
        array(
          "id" => "PR001",
          "name" => "MAX-001",
          "brand" => "Samsung"
        ),
        array(
          "id" => "PR002",
          "name" => "BIG-301",
          "brand" => "Bravia"
        ),
        array(
          "id" => "PR003",
          "name" => "APL-02",
          "brand" => "Apple"
        )
      ),
      "Mobile" => array(
        array(
          "id" => "PR004",
          "name" => "GT-1980",
          "brand" => "Samsung"
        ),
        array(
          "id" => "PR005",
          "name" => "IG-5467",
          "brand" => "Motorola"
        ),
        array(
          "id" => "PR006",
          "name" => "IP-8930",
          "brand" => "Apple"
        )
      )
    ),
    "Jewelry" => array(
      "Earrings" => array(
        array(
          "id" => "PR007",
          "name" => "ER-001",
          "brand" => "Chopard"
        ),
        array(
          "id" => "PR008",
          "name" => "ER-002",
          "brand" => "Mikimoto"
        ),
        array(
          "id" => "PR009",
          "name" => "ER-003",
          "brand" => "Bvlgari"
        )
      ),
      "Necklaces" => array(
        array(
          "id" => "PR010",
          "name" => "NK-001",
          "brand" => "Piaget"
        ),
        array(
          "id" => "PR011",
          "name" => "NK-002",
          "brand" => "Graff"
        ),
        array(
          "id" => "PR012",
          "name" => "NK-003",
          "brand" => "Tiffany"
        )
      )
    )
  );
  echo "  <table border='1pxsolid'>";
  echo " <tr>
    <th>category</th>
    <th>sub-category</th>
    <th>ID</th>
    <th>Name</th>
    <th>brand</th>
  </tr>";
  echo "<tr>";
  foreach ($products as $key => $val1) {
    foreach ($val1 as $key1 => $val2) {
      foreach ($val2 as $key2 => $val3) {
        echo "<td>" . $key . "</td><td>" . $key1 . "</td>";
        foreach ($val3 as  $key3 => $val4) {
          echo  "<td>" . $val4 . "</td>";
        }
        echo "</tr>";
      }
    }
  }
  echo "</table>";
echo "<br>";
  //  mobile part only
  echo "  <table border='1pxsolid'>";
  echo " <tr>
<th>category</th>
<th>sub-category</th>
<th>ID</th>
<th>Name</th>
<th>brand</th>
</tr>";
  echo "<tr>";
  foreach ($products as $key => $val1) {
    foreach ($val1 as $key1 => $val2) {
      foreach ($val2 as $key2 => $val3) {
        if ($key1 == "Mobile") {
          echo "<td>" . $key . "</td><td>" . $key1 . "</td>";
          foreach ($val3 as  $key3 => $val4) {
            echo  "<td>" . $val4 . "</td>";
          }
          echo "</tr>";
        }
      }
    }
  }
  echo "</table>";
  echo "<br>";
  // samsung part
echo "<ul style='list-style-type:none'>";
  foreach ($products as $key => $val1) {
    foreach ($val1 as $key1 => $val2) {
      foreach ($val2 as $key2 => $val3) {
        if ($val3["brand"] == "Samsung") {
          echo "<li> category:" . $key . "</li><li> subcategory:" . $key1."</li>";
          foreach ($val3 as  $key3 => $val4) {
            echo  "<li>" . $key3.":" .$val4 ."</li>";
          }
         echo "<br>";
        }
      }
    }
  }
  echo "</ul>";
  echo "<br>";
  //  delete portion
  echo "  <table border='1pxsolid'>";
  echo " <tr>

<th>ID</th>
<th>Name</th>
<th>brand</th>
</tr>";
  echo "<tr>";
  foreach ($products as $key => $val1) {
    foreach ($val1 as $key1 => $val2) {
      foreach ($val2 as $key2 => $val3) {
        if ($val3['id'] == "PR003") {
          unset($val3['id']);
          unset($val3['name']);
          unset($val3['brand']);
        }
        foreach ($val3 as $key3 => $val4) {
          echo  "<td>" . $val4 . "</td>";
        }
        echo "</tr>";
      }
    }
  }
  echo "</table>";
  echo "<br>";
  // update portion

  echo "  <table border='1pxsolid'>";
  echo " <tr>
<th>category</th>
<th>sub-category</th>
<th>ID</th>
<th>Name</th>
<th>brand</th>
</tr>";
  echo "<tr>";
  foreach ($products as $key => $val1) {
    foreach ($val1 as $key1 => $val2) {
      foreach ($val2 as $key2 => $val3) {
        if ($val3["id"] == "PR002") {
          $val3['name'] = "BIG-555";
        }
        echo "<td>" . $key . "</td><td>" . $key1 . "</td>";
        foreach ($val3 as  $key3 => $val4) {
          echo  "<td>" . $val4 . "</td>";
        }
        echo "</tr>";
      }
    }
  }
  echo "</table>";



  ?>

</body>

</html>