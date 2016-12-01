<?php
session_start();
/* I used some class code and modified it so that I could make a store page
for my parents business which I am implementing in real life. */
class Product{
  private $productId;
  private $productName;
  private $price;
  private $quantity;

 /*Added the ... to the function paramater to try and add a quantity variable */
  public function __construct( $productId, $productName, $price, $quantity) {
    $this->productId = $productId;
    $this->productName = $productName;
    $this->price = $price;
    $this->quantity = $quantity;
  
  }

  public function getId() {
    return $this->productId;
  }

  public function getName() {
    return $this->productName;
  }

  public function getPrice() {
    return $this->price;
  }
  public function getQuantity() {
    return $this->quantity;
  }
  public function addQuantity() {
    $this->quantity + 1;
  }
  public function subtractQuantity() {
    $this->quantity - 1;
  }
}
  $products = array (
    1 => new Product( 1, "Backpack", 119.00, 5 ),
    2 => new Product( 2, "Camp Cup", 1.49, 4 ),
    3 => new Product( 3, "Sleeping Bag", 25.00, 3 ),
    4 => new Product( 4, "Waterproof Bag", .25, 10),
    5 => new Product( 5, "Meal Kit", 14.99, 10),
    6 => new Product( 6, "First Aid Bag", 9.99, 10),
    7 => new Product( 7, "Compass", 1.99, 10),
    8 => new Product( 8, "Parachord", 2.49, 10),
    9 => new Product( 9, "Whistle", .45, 10),
    10 => new Product( 10, "Lantern", 25.99, 10),
    11 => new Product( 11, "Glow Stick", 3.25, 10),
    12 => new Product( 12, "Solar Charger", 19.99, 10),
    13 => new Product( 13, "Coffee Drip", 3.25, 10),
    14 => new Product( 14, "Freeze Dried Food", 7.75, 10),
    15 => new Product( 15, "Water Bottle Pack", 14.25, 10)
  );

if ( !isset( $_SESSION["cart"] ) ) $_SESSION["cart"] = array();

if ( isset( $_GET["action"] ) and $_GET["action"] == "addItem" ) {
  //$products[1]->subtractQuantity(); Trying to adjust quantity here
  addItem();
} elseif ( isset( $_GET["action"] ) and $_GET["action"] == "removeItem" ) {
  removeItem();
} else {
  displayCart();
}

function addItem() {
  global $products;
  /*
  if ($products[1]->getQuantity() == 5) {
    echo "Yes";
  }
  */
  if ( isset( $_GET["productId"] ) and $_GET["productId"] >= 1 and $_GET["productId"] <= 15 ) {
    $productId = (int) $_GET["productId"];

    if ( !isset( $_SESSION["cart"][$productId] ) ) {
      $_SESSION["cart"][$productId] = $products[$productId];
    }
  }

  session_write_close();
  header( "Location: Assignment 6-2.php" );
}

function removeItem() {
  global $products;
  if ( isset( $_GET["productId"] ) and $_GET["productId"] >= 1 and $_GET["productId"] <= 15 ) {
    $productId = (int) $_GET["productId"];
    //$products[1]->subtractQuantity; Trying to adjust quantity with this function here
    if ( isset( $_SESSION["cart"][$productId] ) ) {
      unset( $_SESSION["cart"][$productId] );
    }
  }

  session_write_close();
  header( "Location: Assignment 6-2.php" );
}

function displayCart() {
  global $products;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Daniel Jackson - Assignment 6-2</title>
    <link rel="stylesheet" href="stylesheet.css" type="text/css" media="screen">
  </head>
  <body>
    <table width=100% border=1 bordercolor=black>
        <tr>
            <td class="header"><img src="campsitechina.jpg"></td>
        </tr>
        <tr>
            <td colspan=2 align=center>
                <table width=60%>
                    <td>Home</td>
                    <td>Metals</td>
                    <td>Policy</td>
                    <td>Store</td>
                    <td>Contact</td>
                </table>
            </td>
        </tr>
    </table>
    <table width=100%>
        <tr>
            <td><dl>

                <?php
                $totalPrice = 0;
                foreach ( $_SESSION["cart"] as $product ) {
                $totalPrice += $product->getPrice();
                ?>
                    <dt><?php echo $product->getName() ?></dt>
                    <dd>$<?php echo number_format( $product->getPrice(), 2 ) ?>
                    <a href="Assignment 6-2.php?action=removeItem&amp;productId=<?php echo $product->getId() ?>">Remove</a></dd>
                <?php } ?>
                    <dt>Cart Total:</dt>
                    <dd><strong>$<?php echo number_format( $totalPrice, 2 ) ?></strong></dd>
                    </dl>

                    <h1>Metals</h1>

                    <dl>
                      <!--
                <?php foreach ( $products as $product ) { ?>
                    <dt><img src="ScrapMetal.jpg" alt="metal"><?php echo $product->getName() ?></dt>
                    <dd>$<?php echo number_format( $product->getPrice(), 2 ) ?>
                    <a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $product->getId() ?>">Add Item</a></dd>
                <?php } ?>
                -->
                <?php
                 /* Ok so I split them up like this to make it easier for me but then realized that I could have used a foreach loop
                 like above except that I would have added a counter variable to have designated the products added. But the attempt
                 was taking some good engineer so I cut it out for the time being. 
                 for($i=1;$i<=4;$i++) {
                ?>
                    <dt id="backpack"><img <?php if ($i==1) { echo "src=backpack.png"?>><?php echo $products[$i]->getName() ?></dt>
                    <dd>$<?php echo number_format($products[$i]->getPrice(),2) ?></dd>
                    <dd>Quantity: <?php echo (int)$products[$i]->getQuantity(); ?></dd>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[$i]->getId() ?>">Add Item</a></dd>
                    </dl>
                    */
                    ?>
                    <dt id="backpack"><img src="backpack.png"><?php echo $products[1]->getName() ?></dt>
                    <dd>$<?php echo number_format($products[1]->getPrice(),2) ?></dd>
                    <dd>Quantity: <?php echo (int)$products[1]->getQuantity(); ?></dd>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[1]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><img src="campcup.jpg"><?php echo $products[2]->getName() ?></dt>
                    <dd>$<?php echo number_format($products[2]->getPrice(),2) ?></dd>
                    <dd>Quantity: <?php echo (int)$products[2]->getQuantity(); ?></dd>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[2]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><img src="sleepingbag.png"><?php echo $products[3]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[3]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[3]->getQuantity();  ?></dd>
                    <?php $products[3]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[3]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <?php  ?>
                    <dt id="backpack"><img src="bag.jpg"><?php echo $products[4]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[4]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[4]->getQuantity();  ?></dd>
                    <?php $products[4]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[4]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><img src="bag.jpg"><?php echo $products[5]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[5]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[5]->getQuantity();  ?></dd>
                    <?php $products[5]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[5]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><?php echo $products[6]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[6]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[6]->getQuantity();  ?></dd>
                    <?php $products[4]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[6]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><?php echo $products[7]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[7]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[7]->getQuantity();  ?></dd>
                    <?php $products[4]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[7]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><?php echo $products[8]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[8]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[8]->getQuantity();  ?></dd>
                    <?php $products[4]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[8]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><?php echo $products[9]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[9]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[9]->getQuantity();  ?></dd>
                    <?php $products[4]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[9]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><?php echo $products[10]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[10]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[10]->getQuantity();  ?></dd>
                    <?php $products[4]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[10]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><?php echo $products[11]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[11]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[11]->getQuantity();  ?></dd>
                    <?php $products[4]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[11]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><?php echo $products[12]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[12]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[12]->getQuantity();  ?></dd>
                    <?php $products[4]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[12]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><?php echo $products[13]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[13]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[13]->getQuantity();  ?></dd>
                    <?php $products[4]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[13]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><?php echo $products[14]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[14]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[14]->getQuantity();  ?></dd>
                    <?php $products[4]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[14]->getId() ?>">Add Item</a></dd>
                    </dl>
                    <dt id="backpack"><?php echo $products[15]->getName(); ?></dt>
                    <dd>$<?php echo number_format($products[15]->getPrice(),2);  ?></dd>
                    <dd>Quantity: <?php echo (int)$products[15]->getQuantity();  ?></dd>
                    <?php $products[4]->subtractQuantity() ?>
                    <dd><a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $products[15]->getId() ?>">Add Item</a></dd>
                 <?php  ?>

                <?php
                }
                ?></td>
        </tr>
    </table>
    <footer><address>420 S Florida Ave, Deland, FL 32720</address></footer>
  </body>
</html>