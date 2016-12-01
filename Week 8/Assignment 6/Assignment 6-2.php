<?php
session_start();
/* I used some class code and modified it so that I could make a store page
for my parents business which I am implementing in real life. */
class Product{
  private $productId;
  private $productName;
  private $price;

  public function __construct( $productId, $productName, $price ) {
    $this->productId = $productId;
    $this->productName = $productName;
    $this->price = $price;
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
}
  $products = array (
    1 => new Product( 1, "Copper", 1.89 ),
    2 => new Product( 2, "Brass", 1.49 ),
    3 => new Product( 3, "Aluminum", .25 )
  );

if ( !isset( $_SESSION["cart"] ) ) $_SESSION["cart"] = array();

if ( isset( $_GET["action"] ) and $_GET["action"] == "addItem" ) {
  addItem();
} elseif ( isset( $_GET["action"] ) and $_GET["action"] == "removeItem" ) {
  removeItem();
} else {
  displayCart();
}

function addItem() {
  global $products;
  if ( isset( $_GET["productId"] ) and $_GET["productId"] >= 1 and $_GET["productId"] <= 3 ) {
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
  if ( isset( $_GET["productId"] ) and $_GET["productId"] >= 1 and $_GET["productId"] <= 3 ) {
    $productId = (int) $_GET["productId"];

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
            <td class="header"><img src="logo.jpg"</td>
            <td class="header">Florida Recycling</td>
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
                <?php foreach ( $products as $product ) { ?>
                    <dt><img src="ScrapMetal.jpg" alt="metal"><?php echo $product->getName() ?></dt>
                    <dd>$<?php echo number_format( $product->getPrice(), 2 ) ?>
                    <a href="Assignment 6-2.php?action=addItem&amp;productId=<?php echo $product->getId() ?>">Add Item</a></dd>
                <?php } ?>
                    </dl>

                <?php
                }
                ?></td>
        </tr>
    </table>
    <footer><address>420 S Florida Ave, Deland, FL 32720</address></footer>
  </body>
</html>