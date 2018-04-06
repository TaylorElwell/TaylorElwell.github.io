<?php
use Printful\Exceptions\PrintfulApiException;
use Printful\Exceptions\PrintfulException;
use Printful\PrintfulApiClient;
require_once __DIR__ . '../vendor/autoload.php';
// Replace this with your API key
$apiKey = '4rd7og9y-mcy8-doux:gkd7-rx8jf8tf3bxl';
$pf = new PrintfulApiClient($apiKey);
try {

    $store = $pf->get('store');
    var_export($store);

    $products = $pf->get('products');
    var_export($products);

    // Get variants for product 10
    /*
    $variants = $pf->get('products/10');
    var_export($variants);
    */
    // Get information about Variant 1007
    /*
    $data = $pf->get('products/variant/1007');
    var_export($data);
    */
    
} catch (PrintfulApiException $e) { //API response status code was not successful
    echo 'Printful API Exception: ' . $e->getCode() . ' ' . $e->getMessage();
} catch (PrintfulException $e) { //API call failed
    echo 'Printful Exception: ' . $e->getMessage();
    var_export($pf->getLastResponseRaw());
}
