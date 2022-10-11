# CodeIgniter 4 Cart Library

The Cart Library originally from CodeIgniter 3.

## Usage
Feel free to read the original: https://codeigniter.com/userguide3/libraries/cart.html 

 ```php
 use Totoprayogo\Lib\Cart;

 $cart = new Cart();
 
 // Insert an array of values
 $cart->insert([
    'id'      => 'sku_1234ABCD',
    'qty'     => 1,
    'price'   => '19.56',
    'name'    => 'T-Shirt',
    'options' => ['Size' => 'L', 'Color' => 'Red']
]);
 
 // Update an array of values
 $cart->update([
    'rowid'   => '4166b0e7fc8446e81e16883e9a812db8',
    'id'      => 'sku_1234ABCD',
    'qty'     => 3,
    'price'   => '24.89',
    'name'    => 'T-Shirt',
    'options' => ['Size' => 'L', 'Color' => 'Red']
]);

// Get the total items.
$cart->total_items();

// Remove an item using its `rowId`
$cart->remove('4166b0e7fc8446e81e16883e9a812db8');
   
// Clear the shopping cart
$cart->destroy();

// Get the cart contents as an array
$cart->contents();
 ```
