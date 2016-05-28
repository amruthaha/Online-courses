<?php
/**
 * Created by PhpStorm.
 * User: dilipjain
 * Date: 17/7/15
 * Time: 11:41 PM
 */

function getProductMenu($connection,$category,$id,$dt,$loc) {
    if($category) {
        $category = mysqli_real_escape_string($connection,$category);
        $dt = mysqli_real_escape_string($connection,$dt);
        $rec_limit = 4;
        $offset = ((int)$id*$rec_limit);
        $productQuery = mysqli_query($connection,
            "select id,name,img_url,description,type,amount,points from products where type='".$category."'".
            "and date_format(show_from , '%Y%m%d') <= '".substr($dt, 0, 8)."' ".
            "and date_format(show_till , '%Y%m%d') >= '".substr($dt, 0, 8)."' ".
            "and substr(replace(interval_from,':', ''),1,5) <= '".substr($dt, 8)."' ".
            "and substr(replace(interval_till,':', ''),1,5) >= '".substr($dt, 8)."' ".
            "and INSTR(locations, '".$loc."') > 0 ".
             "limit ".$offset.",".$rec_limit." ;");

        $jsonResult = [];
        //error_log("Error message\n", 3, $productQuery);
        array_push($jsonResult,array("page_id"=>(string)($id+1)));
        while($row = mysqli_fetch_assoc($productQuery)) {
            array_push($jsonResult,$row);
        }
        return json_encode($jsonResult);
    }
    return null;
}

function getCategoryList($connection) {
    if($connection) {
        if (function_exists('date_default_timezone_set')) {
            date_default_timezone_set('Asia/Calcutta');
        }
        $dt = date('Y-m-d H:i');
        $categoryQuery = mysqli_query($connection,
            "SELECT type, img_url FROM  (SELECT type, img_url FROM products ".
            // "where date_format(show_from , '%Y%m%d') <= '".$dt."' ".
            // "and date_format(show_till , '%Y%m%d') >= '".$dt."' ".
            "ORDER BY RAND()) x GROUP BY x.type;"
            );
        $jsonResult = [];
        while($row = mysqli_fetch_assoc($categoryQuery)) {
            array_push($jsonResult,$row);
        }
        return json_encode($jsonResult);
    }
    return null;
}


function getStatus($connection, $order_id, $uid) {
    if($order_id==""&&uid=="") {
        return 'failure';
    }
    $query = "select * from orders where id =" . $order_id.";";
    $orderQuery = mysqli_query($connection, $query);
    $jsonResult = [];
    while ($row = mysqli_fetch_assoc($orderQuery)) {
        array_push($jsonResult, $row);
        $cart = $row["ordered_items"];
        $cartItems = json_decode($cart, true);
        $addr=json_decode($row["delivery_address"]);
        if($addr->email==$uid||$addr->mobile==$uid) {
            $productIdArray = [];
            for ($i = 0; $i < count($cartItems['cart']); $i++) {
                array_push($productIdArray,$cartItems['cart'][$i]['id']);
            }
            $productInfo = [];
            $productQuery = "select * from products where id in (" . implode(",", $productIdArray) . ")";
            $productResults = mysqli_query(returnDBConnection(), $productQuery);
            if($productResults) {
                while ($row = mysqli_fetch_assoc($productResults)) {
                    array_push($productInfo, $row);
                }
            }
            $obj = new stdClass();
            $obj->order = $jsonResult;
            $obj->products = $productInfo;
            return json_encode($obj);
        }

    }
    return 'failure';
}

?>

