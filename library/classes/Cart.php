<?php

class Cart {
  
  const SESSION_CART_KEY = 'cart';
  
  public function getItemsFromCart() {
    return isset($_SESSION[Cart::SESSION_CART_KEY]) ? $_SESSION[Cart::SESSION_CART_KEY] : array();
  }
  
  public function addProductToCart($product, $quantityToAdd = 1, $isCustomQuantity = false) {
    $currentQuantity = 0;
    if (isset($_SESSION[Cart::SESSION_CART_KEY][$product['id']])) {
      $currentQuantity = $_SESSION[Cart::SESSION_CART_KEY][$product['id']]['quantity'];
    }
    if ($isCustomQuantity) {
      $newQuantity = $quantityToAdd;
    } else {
      $newQuantity = $currentQuantity + $quantityToAdd;
    }
    $_SESSION[Cart::SESSION_CART_KEY][$product['id']]['quantity'] = $newQuantity;
    $_SESSION[Cart::SESSION_CART_KEY][$product['id']]['product']  = $product;
  }
  
  public function removeProductFromCart($productSif, $removeAll = false) {
    if (isset($_SESSION[Cart::SESSION_CART_KEY][$productSif])) {
      $quantity = $_SESSION[Cart::SESSION_CART_KEY][$productSif]['quantity'];
      $quantity--;
      $_SESSION[Cart::SESSION_CART_KEY][$productSif]['quantity'] = $quantity;
    }
    if ($quantity < 1) {
      unset($_SESSION[Cart::SESSION_CART_KEY][$productSif]);
    }
    if ($removeAll) {
      unset($_SESSION[Cart::SESSION_CART_KEY][$productSif]);
    }
  }
  
  public function getCountOfCartItems() {
    $count = 0;
    foreach ($_SESSION[Cart::SESSION_CART_KEY] as $oneItemInCart) {
      $count = $count + $oneItemInCart['quantity'];
    }
    return $count;
  }
  
  public function clearCart() {
    foreach ($_SESSION[Cart::SESSION_CART_KEY] as $sif => $item) {
      unset($_SESSION[Cart::SESSION_CART_KEY][$sif]);
    }
  }
  
  public function getSumInCart() {
    $total = 0;
    foreach ($this->getItemsFromCart() as $sif => $oneCartItem) {
      $temp  = $oneCartItem['quantity'] * $oneCartItem['product']['price'];
      $total = bcadd($total, $temp, 2);
    }
    return $total;
  }
}