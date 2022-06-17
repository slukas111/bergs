<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Interactive order form</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
<!--

FINAL

BURG'S BURGERS MENU-PAGE FUNCTIONALITY - CREATED BY CHAD

-->

</head>


<body>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Get order data sent by GET
    // isset() tests for data at the gateway, required on many servers
    // Radio buttons pass values ($size), Checkboxes pass a state T/F

    //if(isset($_GET["name"])) { $name = $_GET["name"]; } else { $name = ""; }
    if(isset($_GET["name"])) { $name = $_GET["name"]; } else { $name = ""; }
    if(isset($_GET["ccbu"])) { $ccbu = $_GET["ccbu"]; } else { $ccbu = ""; }
    if(isset($_GET["blto"])) { $blto = $_GET["blto"]; } else { $blto = ""; }
    if(isset($_GET["prdi"])) { $prdi = $_GET["prdi"]; } else { $prdi = ""; }
    if(isset($_GET["maui"])) { $maui = $_GET["maui"]; } else { $maui = ""; }
    if(isset($_GET["bccb"])) { $bccb = $_GET["prdi"]; } else { $bccb = ""; }
    if(isset($_GET["reub"])) { $reub = $_GET["reub"]; } else { $reub = ""; }
    if(isset($_GET["onri"])) { $onri = $_GET["onri"]; } else { $onri = ""; }
    if(isset($_GET["pofs"])) { $pofs = $_GET["pofs"]; } else { $pofs = ""; }
    if(isset($_GET["nach"])) { $nach = $_GET["nach"]; } else { $nach = ""; }
    if(isset($_GET["sala"])) { $sala = $_GET["sala"]; } else { $sala = ""; }
    if(isset($_GET["boch"])) { $boch = $_GET["boch"]; } else { $boch = ""; }
    if(isset($_GET["crnb"])) { $crnb = $_GET["crnb"]; } else { $crnb = ""; }
    
    

    $tot = 0; //sets variable price to 0
    $itot = 0;
    

    print "
    <body>
  <div id='branding'>
    <a href='index.html'>BURG'S BURGERS</a>
</div>
<header>

<nav class='container'>
<ul class='shadow cont'>
  <li><a href='index.html'>HOME</a></li>
  <li><a href='menu.html'>MENU</a></li>
  <li><a href='location.html'>LOCATIONS</a>
    </li>
  <li><a href='contact.html'>CONTACT</a></li>
</ul>
</nav>
        </header>


        <div id='invoice'>
        <h2>INVOICE</h2>

        <h3>ORDER FOR: $name </h3>
        
        <p id='items'><pre><u>Qty</u> <u>Order</u>                                   <u>Price</u></pre>
        
        </div>
        ";

        
        // Print size and price if checked
        if($ccbu) {
            $itot =  10.00 * $ccbu;
            $itot= number_format($itot, 2);
            print "<pre> $ccbu  Classic Cheese Burger @ $10.00          $$itot</pre>";
            $tot = $tot + $itot;
        }

        if($blto) {
            $itot =  12.00 * $blto;
            $itot= number_format($itot, 2);
            print "<pre> $blto  BLT @ $12.00                            $$itot</pre>";
            $tot = $tot + $itot;
        } 

        if($prdi) {
            $itot =  15.00 * $prdi;
            $itot= number_format($itot, 2);
            print "<pre> $prdi  Prime Rib Dip @ $15.00                  $$itot</pre>";
            $tot = $tot + $itot;
        }

        if($maui) {
            $itot =  16.00 * $maui;
            $itot= number_format($itot, 2);
            print "<pre> $maui  Maui Burger @ $16.00                    $$itot</pre>";
            $tot = $tot + $itot;
        }

        if($bccb) {
            $itot =  12.00 * $bccb;
            $itot= number_format($itot, 2);
            print "<pre> $bccb  Bacon Classic Cheese Burger @ $12.00    $$itot</pre>";
            $tot = $tot + $itot;
        }

        if($reub) {
            $itot =  15.00 * $reub;
            $itot= number_format($itot, 2);
            print "<pre> $reub  Reuben @ $15.00                         $$itot</pre>";
            $tot = $tot + $itot;
        }

        if($onri) {
            $itot =  10.00 * $onri;
            $itot= number_format($itot, 2);
            print "<pre> $onri  Onion Rimgs @ $10.00                    $$itot</pre>";
            $tot = $tot + $itot;
        }

        if($pofs) {
            $itot =  5.00 * $pofs;
            $itot= number_format($itot, 2);
            print "<pre> $pofs  Pound O' Fries @ $5.00                  $$itot</pre>";
            $tot = $tot + $itot;
        }

        if($nach) {
            $itot =  12.00 * $nach;
            $itot= number_format($itot, 2);
            print "<pre> $nach  Nachos @ $12.00                         $$itot</pre>";
            $tot = $tot + $itot;
        }

        if($sala) {
            $itot =  5.00 * $sala;
            $itot= number_format($itot, 2);
            print "<pre> $sala  Side Salad @ $5.00                      $$itot</pre>";
            $tot = $tot + $itot;
        }

        if($boch) {
            $itot =  6.00 * $boch;
            $itot= number_format($itot, 2);
            print "<pre> $boch  Bowl of Chili @ $6.00                   $$itot</pre>";
            $tot = $tot + $itot;
        }
        
        if($crnb) {
            $itot =  6.00 * $crnb;
            $itot= number_format($itot, 2);
            print "<pre> $crnb  Corn Bread @ $6.00                      $$itot</pre>";
            $tot = $tot + $itot;
        }

        
        $ftot = number_format($tot, 2);//variable for total price formatted 2 decimal places
        
        //Prints total price of order
        print "
               </br> <pre id='price'>Total:                                     $$ftot</pre>

        </p>
    </div>

</body>

"

?>
