<?php
$connection = mysqli_connect('localhost', 'root', '', 'sweet home');
session_start();
if (isset($_GET['addtocartbed'])) {
    if (isset($_SESSION['email'])) {
        $id = $_GET['addtocartbed'];
        $select1 = mysqli_query($connection, "select * from products where id = $id");
        while ($row = mysqli_fetch_assoc($select1)) {
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $image = $row['image'];
            $select2 = mysqli_query($connection, "select quantity FROM cart_product WHERE user_id = $_SESSION['id'] AND product_id = $id" );
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
                $select2 =mysqli_connect($connection,"update cart_product SET quantity = quantity+1 WHERE user_id = $_SESSION['id'] AND product_id = $id") ;
            }
            else
            {
                $insert = "insert into cart_product (user_id,product_id,quantity) values ('$_SESSION['id']','$id','1',)";
                $upload = mysqli_query($connection, $insert);
            }
        }
        header('location:cart/cart.php');
    } else {
        header('location:login/login.php');
    }
} else if (isset($_GET['addtocartdining'])) {
    if (isset($_SESSION['email'])) {
        $id = $_GET['addtocartbed'];
        $select1 = mysqli_query($connection, "select * from products where id = $id");
        while ($row = mysqli_fetch_assoc($select1)) {
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $image = $row['image'];
            $select2 = mysqli_query($connection, "select quantity FROM cart_product WHERE user_id = $_SESSION['id'] AND product_id = $id" );
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
                $select2 =mysqli_connect($connection,"update cart_product SET quantity = quantity+1 WHERE user_id = $_SESSION['id'] AND product_id = $id") ;
            }
            else
            {
                $insert = "insert into cart_product (user_id,product_id,quantity) values ('$_SESSION['id']','$id','1',)";
                $upload = mysqli_query($connection, $insert);
            }
        }
        header('location:cart/cart.php');
    } else {
        header('location:login/login.php');
    }
} else if (isset($_GET['addtocartdrawing'])) {
    if (isset($_SESSION['email'])) {
        $id = $_GET['addtocartbed'];
        $select1 = mysqli_query($connection, "select * from products where id = $id");
        while ($row = mysqli_fetch_assoc($select1)) {
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $image = $row['image'];
            $select2 = mysqli_query($connection, "select quantity FROM cart_product WHERE user_id = $_SESSION['id'] AND product_id = $id" );
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
                $select2 =mysqli_connect($connection,"update cart_product SET quantity = quantity+1 WHERE user_id = $_SESSION['id'] AND product_id = $id") ;
            }
            else
            {
                $insert = "insert into cart_product (user_id,product_id,quantity) values ('$_SESSION['id']','$id','1',)";
                $upload = mysqli_query($connection, $insert);
            }
        }
        header('location:cart/cart.php');
    } else {
        header('location:login/login.php');
    }
} else if (isset($_GET['addtocartkitchen'])) {
    if (isset($_SESSION['email'])) {
        $id = $_GET['addtocartbed'];
        $select1 = mysqli_query($connection, "select * from products where id = $id");
        while ($row = mysqli_fetch_assoc($select1)) {
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $image = $row['image'];
            $select2 = mysqli_query($connection, "select quantity FROM cart_product WHERE user_id = $_SESSION['id'] AND product_id = $id" );
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
                $select2 =mysqli_connect($connection,"update cart_product SET quantity = quantity+1 WHERE user_id = $_SESSION['id'] AND product_id = $id") ;
            }
            else
            {
                $insert = "insert into cart_product (user_id,product_id,quantity) values ('$_SESSION['id']','$id','1',)";
                $upload = mysqli_query($connection, $insert);
            }
        }
        header('location:cart/cart.php');
    } else {
        header('location:login/login.php');
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/webproject.css">
</head>

<body>
    <div class="header">
        <div class="top">
            <br>
            <p>Spring Savings
                : 30% off sitewide and free shipping on orders over $100.
                *Terms</p>
        </div>
        <div class="navbar">
            <div class="menus">
                <ul class="A">
                    <div id="Master_Bed" class="Master_Bed">
                        <li class="list"><a href="masterbed.php" class="menu1">Master Bed</a></li>
                        <div id="Master_bedpop" class="Master_bedpop">
                            <section id="MasterBed_product1">
                                <div id="masterbedcontainer1" class="container1">
                                    <?php
                                    $select1 = mysqli_query($connection, "SELECT * FROM products where category_id=1");
                                    $cnt = 0;
                                    while ($cnt < 3 && $row = mysqli_fetch_assoc($select1)) {
                                        $cnt = $cnt + 1; ?>
                                        <div class="product1">
                                            <img src="images/<?php echo $row['image']; ?>" height="100" alt="abc">
                                            <div class="description">
                                                <h6><?php echo $row['name']; ?></h6>
                                                <h4><?php echo $row['price']; ?></h4>
                                                <a style="margin-top:0px;  display: block;width: 220px;cursor: pointer;border-radius: .5rem;font-size: 30px;background: var(--green);background-color: rgb(57, 48, 46);color:var(--white);text-align: center;text-decoration: none; 	width: 200px;height: 30px;	background: transparent;border: 1px solid black;border-radius: 2px;	color: black;font-family: 'Exo', sans-serif;font-size: 16px;font-weight: 400;	padding: 4px;" href="masterbed.php?addtocartbed=<?php echo $row['id']; ?>">add to cart</a>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </section>
                            <div style="background-color: rgb(57, 48, 46);display: inline-block;width:97%;height:50px;margin-top:50px;padding-top:25px;padding-left:850px;" class="popfooter"><a style="text-decoration:none;color:white;" href="masterbed.php">see more</a></div>
                        </div>
                    </div>
                    <div id="Dining" class="Dining">
                        <li class=" list"><a href="dining.php" class="menu2">Dining</a></li>
                        <div id="Diningpop" class="Diningpop">
                            <section id="Dining_product1">
                                <div id="diningcontainer1" class="container2">
                                    <?php
                                    $select1 = mysqli_query($connection, "SELECT * FROM products where category_id=2");
                                    $cnt = 0;
                                    while ($cnt < 3 && $row = mysqli_fetch_assoc($select1)) {
                                        $cnt = $cnt + 1; ?>
                                        <div class="product2">
                                            <img src="images/<?php echo $row['image']; ?>" height="100" alt="abc">
                                            <div class="description">
                                                <h6><?php echo $row['name']; ?></h6>
                                                <h4><?php echo $row['price']; ?></h4>
                                                <a style="margin-top:0px;  display: block;width: 220px;cursor: pointer;border-radius: .5rem;font-size: 30px;background: var(--green);background-color: rgb(57, 48, 46);color:var(--white);text-align: center;text-decoration: none; 	width: 200px;height: 30px;	background: transparent;border: 1px solid black;border-radius: 2px;	color: black;font-family: 'Exo', sans-serif;font-size: 16px;font-weight: 400;	padding: 4px;" href="masterbed.php?addtocartbed=<?php echo $row['id']; ?>">add to cart</a>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </section>
                            <div style="background-color: rgb(57, 48, 46);display: inline-block;width:97%;height:50px;margin-top:50px;padding-top:25px;padding-left:850px;" class="popfooter"><a style="text-decoration:none;color:white;" href="dining.php">see more</a></div>
                        </div>
                    </div>
                    <div id="Drawing" class="Drawing">
                        <li class=" list"><a href="drawing.php" class="menu3">Drawing</a></li>
                        <div id="Drawingpop" class="Drawingpop">
                            <section id="Drawing_product1">
                                <div id="drawingcontainer1" class="container3">
                                    <?php
                                    $select1 = mysqli_query($connection, "SELECT * FROM products where category_id=3");
                                    $cnt = 0;
                                    while ($cnt < 3 && $row = mysqli_fetch_assoc($select1)) {
                                        $cnt = $cnt + 1; ?>
                                        <div class="product3">
                                            <img src="images/<?php echo $row['image']; ?>" height="100" alt="abc">
                                            <div class="description">
                                                <h6><?php echo $row['name']; ?></h6>
                                                <h4><?php echo $row['price']; ?></h4>
                                                <a style="margin-top:0px;  display: block;width: 220px;cursor: pointer;border-radius: .5rem;font-size: 30px;background: var(--green);background-color: rgb(57, 48, 46);color:var(--white);text-align: center;text-decoration: none; 	width: 200px;height: 30px;	background: transparent;border: 1px solid black;border-radius: 2px;	color: black;font-family: 'Exo', sans-serif;font-size: 16px;font-weight: 400;	padding: 4px;" href="masterbed.php?addtocartbed=<?php echo $row['id']; ?>">add to cart</a>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </section>
                            <div style="background-color: rgb(57, 48, 46);display: inline-block;width:97%;height:50px;margin-top:50px;padding-top:25px;padding-left:850px;" class="popfooter"><a style="text-decoration:none;color:white;" href="drawing.php">see more</a></div>
                        </div>
                    </div>
                    <div id="Kitchen" class="Kitchen">
                        <li class=" list"><a href="kitchen.php" class="menu4">Kitchen</a></li>
                        <div id="Kitchenpop" class="Kitchenpop">
                            <section id="Kitchen_product1">
                                <div id="kitchencontainer1" class="container4">
                                    <?php
                                    $select1 = mysqli_query($connection, "SELECT * FROM products where category_id=4");
                                    $cnt = 0;
                                    while ($cnt < 3 && $row = mysqli_fetch_assoc($select1)) {
                                        $cnt = $cnt + 1; ?>
                                        <div class="product4">
                                            <img src="images/<?php echo $row['image']; ?>" height="100" alt="abc">
                                            <div class="description">
                                                <h6><?php echo $row['name']; ?></h6>
                                                <h4><?php echo $row['price']; ?></h4>
                                                <a style="margin-top:0px;  display: block;width: 220px;cursor: pointer;border-radius: .5rem;font-size: 30px;background: var(--green);background-color: rgb(57, 48, 46);color:var(--white);text-align: center;text-decoration: none; 	width: 200px;height: 30px;	background: transparent;border: 1px solid black;border-radius: 2px;	color: black;font-family: 'Exo', sans-serif;font-size: 16px;font-weight: 400;	padding: 4px;" href="masterbed.php?addtocartbed=<?php echo $row['id']; ?>">add to cart</a>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </section>
                            <div style="background-color: rgb(57, 48, 46);display: inline-block;width:97%;height:50px;margin-top:50px;padding-top:25px;padding-left:850px;" class="popfooter"><a style="text-decoration:none;color:white;" href="kitchen.php">see more</a></div>
                        </div>
                    </div>
            </div>
            </ul>
            <div class="companyname">
                <ul class="B">
                    <div id="Sweet_home">
                        <div style="font-size:xx-large;">Sweet Home</div>
                    </div>
                </ul>
            </div>
            <div style="margin-right:0px;" class="logsignup">
                <ul class="C">
                    <div class="Login">
                        <li class="list"><a href="http://localhost/cse 3100 final/login/loginas.php" class="Login"><?php if(isset($_SESSION['name'])){echo $_SESSION['name'];}else{echo "Login";}?></a></li>
                    </div>
                    <div class="Signup">
                        <li class="list"><a href="http://localhost/cse 3100 final/login/signup.php" class="Signup">Signup</a></li>
                    </div>
                    <div id="yoyo" class="Logout">
                        <li class="list"><a href="http://localhost/cse 3100 final/login/logout.php" class="Logout"><?php if(!isset($_SESSION['email'])){echo "<script>document.getElementById('yoyo').style.display ='none';</script>" ;} ?>Logout</a></li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <div class="frontpage">
        <img style="margin-left:46px;"class="img1" src="images/back.jpg" width="1400" height="450">
    </div>
    <br>
    <section id="MasterBed_product">
        <h2 style="font-size: 50px;">Suggested for you</h2>
        <br>
            <div id="masterbedcontainer" class="container">
                <?php
                if(isset($_COOKIE['category']))
                {
                    $a=$_COOKIE['category'];
                    $select1 = mysqli_query($connection, "SELECT * FROM $a");
                }
                else
                {
                    $select1 = mysqli_query($connection, "SELECT * FROM products where category_id=1") ;
                }
                while ($row = mysqli_fetch_assoc($select1)) { ?>
                    <div class="product">
                        <img src="images/<?php echo $row['image']; ?>" alt="abc">
                        <div class="description">
                            <h6 style="font-size: 17.5px;font-family:Poppins', sans-serif;"><?php echo $row['name']; ?></h6>
                            <h4 style="font-size: 17.5px;font-family:Poppins', sans-serif;"><?php echo "$" . $row['price']; ?></h4>
                            <a target="_blank" style="margin-top:0px;  display: block;width: 290px;cursor: pointer;border-radius: .5rem;font-size: 30px;background: var(--green);background-color: rgb(57, 48, 46);color:var(--white);text-align: center;text-decoration: none;height: 35px;	background: transparent;border: 1px solid black;border-radius: 2px;	color: black;font-family: 'Exo', sans-serif;font-size: 16px;font-weight: 400;	padding: 8px;" href="masterbed.php?<?php if($row['category']=="dining_product"){echo"addtocartdining";} else if($row['category']=="masterbed_product"){echo"addtocartbed";}else if($row['category']=="drawing_product"){echo"addtocartdrawing";}else if($row['category']=="kitchen_product"){echo"addtocartkitchen";}?>=<?php echo $row['id']; ?>">add to cart</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
    </section>


    <footer>
        <div class="footer-wrap">
            <div class="widgetFooter">
                <h4 class="uppercase">useful links</h4>
                <ul id="footerUsefulLink">
                    <li title="About US">
                        <span class="usefulLinksIcons">
                            <i class="far fa-id-card"></i>
                        </span>
                        <a>&nbsp;About us</a>
                    </li>
                    <li title="Our Team">
                        <span class="usefulLinksIcons">
                            <i class="far fa-handshake"></i>
                        </span>
                        <a>&nbsp;Our team</a>
                    </li>
                    <li title="Gallery">
                        <span class="usefulLinksIcons">
                            <i class="far fa-images"></i>
                        </span>
                        <a>&nbsp;Gallery</a>
                    </li>
                    <li title="Contact Us">
                        <span class="usefulLinksIcons">
                            <i class="far fa-envelope"></i>
                        </span>
                        <a>&nbsp;Contact us</a>
                    </li>
                </ul>
            </div>
            <div class="widgetFooter" id="footerLogo">

            </div>
            <div class="widgetFooter">
                <h4 class="uppercase">Social media links</h4>
                <ul id="footerMediaLinks">
                    <li class="media1" title="Facebook">
                        <span class="mediaLinksIcons fb">
                            <i class="fab fa-facebook-square"></i>
                        </span>
                        <a class="fb">&nbsp;facebook</a>
                    </li>
                    <li class="media2" title="Twitter">
                        <span class="mediaLinksIcons twit">
                            <i class="fab fa-twitter-square"></i>
                        </span>
                        <a class="twit">&nbsp;Twitter</a>
                    </li>
                    <li class="media3" title="Instagram">
                        <span class="mediaLinksIcons insta">
                            <i class="fab fa-instagram"></i>
                        </span>
                        <a class="insta">&nbsp;instagram</a>
                    </li>
                    <li class="media4" title="Github">
                        <span class="mediaLinksIcons git">
                            <i class="fab fa-github-alt"></i>
                        </span>
                        <a class="git">&nbsp;Github</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footerCopy">
            <div class="inb">
                <p>Copyrights<sup>&copy;</sup> 2022. Developed by <i class="fas fa-heart" style="color: red;"></i> by Sadman Sakib</p>
            </div>
        </div>
    </footer>
</body>

</html>