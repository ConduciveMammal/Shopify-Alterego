<?php require_once('db.php');?>
<?php
if(isset($_POST['submit'])) {
for ($i = 0; $i < $itemCount; $i++) {
    $id               = $xmlObject->item($i)->getElementsByTagName('id')->item(0)->childNodes->item(0)->nodeValue;
    $sku              = $xmlObject->item($i)->getElementsByTagName('sku')->item(0)->childNodes->item(0)->nodeValue;
    $matrix_id        = $xmlObject->item($i)->getElementsByTagName('matrix_id')->item(0)->childNodes->item(0)->nodeValue;
    $product_code     = $xmlObject->item($i)->getElementsByTagName('product_code')->item(0)->childNodes->item(0)->nodeValue;
    $name             = $xmlObject->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue;
    $description      = $xmlObject->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
    $description_html = $xmlObject->item($i)->getElementsByTagName('description_html')->item(0)->childNodes->item(0)->nodeValue;
    $stock_type       = $xmlObject->item($i)->getElementsByTagName('stock_type')->item(0)->childNodes->item(0)->nodeValue;
    $stock_level      = $xmlObject->item($i)->getElementsByTagName('stock_level')->item(0)->childNodes->item(0)->nodeValue;
    $price_rrp        = $xmlObject->item($i)->getElementsByTagName('price_rrp')->item(0)->childNodes->item(0)->nodeValue;
    $price_trade      = $xmlObject->item($i)->getElementsByTagName('price_trade')->item(0)->childNodes->item(0)->nodeValue;
    $categories       = $xmlObject->item($i)->getElementsByTagName('categories')->item(0)->childNodes->item(0)->nodeValue;
    $brand            = $xmlObject->item($i)->getElementsByTagName('brand')->item(0)->childNodes->item(0)->nodeValue;
    $product_range    = $xmlObject->item($i)->getElementsByTagName('product_range')->item(0)->childNodes->item(0)->nodeValue;
    $material         = $xmlObject->item($i)->getElementsByTagName('material')->item(0)->childNodes->item(0)->nodeValue;
    $size             = $xmlObject->item($i)->getElementsByTagName('size')->item(0)->childNodes->item(0)->nodeValue;
    $height           = $xmlObject->item($i)->getElementsByTagName('height')->item(0)->childNodes->item(0)->nodeValue;
    $length           = $xmlObject->item($i)->getElementsByTagName('length')->item(0)->childNodes->item(0)->nodeValue;
    $width            = $xmlObject->item($i)->getElementsByTagName('width')->item(0)->childNodes->item(0)->nodeValue;
    $weight           = $xmlObject->item($i)->getElementsByTagName('weight')->item(0)->childNodes->item(0)->nodeValue;
    $colour           = $xmlObject->item($i)->getElementsByTagName('colour')->item(0)->childNodes->item(0)->nodeValue;
    $image            = $xmlObject->item($i)->getElementsByTagName('image')->item(0)->childNodes->item(0)->nodeValue;
    $created_at       = $xmlObject->item($i)->getElementsByTagName('created_at')->item(0)->childNodes->item(0)->nodeValue;
    $updated_at       = $xmlObject->item($i)->getElementsByTagName('updated_at')->item(0)->childNodes->item(0)->nodeValue;
    $sql              = $dbh->prepare("INSERT INTO $dbtable (`id`, `sku`, `matrix_id`, `product_code`, `name`, `description`, `description_html`, `stock_type`, `stock_level`, `price_rrp`, `price_trade`, `categories`, `brand`, `product_range`, `material`, `size`, `height`, `length`, `width`, `weight`, `colour`, `image`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->execute(array(
    $id,
    $sku,
    $matrix_id,
    $product_code,
    $name,
    $description,
    $description_html,
    $stock_type,
    $stock_level,
    $price_rrp,
    $price_trade,
    $categories,
    $brand,
    $product_range,
    $material,
    $size,
    $height,
    $length,
    $width,
    $weight,
    $colour,
    $image,
    $created_at,
    $updated_at
    ));
}
}
?>