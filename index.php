<!doctype html>
<html>
    <head>
        <title>Présentation</title>
        <link rel="stylesheet" href="css/presentation.css">
        <link rel="stylesheet" href="css/menu.css">
    </head>
    <body>
        <?php 
            session_start();
            require_once 'database_access/config.php';
           // if not connected with the session, we redirect
            if(!isset($_SESSION['loggedin'])){
                include('menu_not_connected.php'); 
            }
            else {
                include('menu_connected.php'); 
            }
        ?>
        <div id=container>
            <article>
                <header>
                    <h1>Cabinet Médical du Cnam</h1>
                </header>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ullamcorper, diam a cursus egestas, justo augue suscipit elit, sed molestie turpis nulla in risus. Fusce hendrerit, sapien dapibus commodo porttitor, mi magna vestibulum turpis, et blandit eros libero quis neque. Duis id lectus vitae justo ullamcorper consectetur quis vel metus. Suspendisse vel lorem aliquet, luctus nibh eget, commodo erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non tortor eget sem convallis semper vitae at eros. Pellentesque vel accumsan sapien. Praesent at dapibus diam. Aenean nibh risus, dictum sit amet ipsum aliquam, condimentum ullamcorper tortor. Ut at quam in diam cursus tempus in vitae nisl. Cras elementum massa sed erat dictum hendrerit. Sed dui nisi, accumsan quis dolor eget, vestibulum porta ligula. Duis placerat metus quis augue blandit, in vulputate eros semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                    Etiam viverra vel odio eget maximus. Vestibulum ullamcorper, felis id finibus vehicula, dui quam mollis enim, nec condimentum velit purus sed justo. Aenean vitae augue a erat convallis tempor. Quisque in elit rutrum, pulvinar turpis luctus, viverra nulla. Quisque convallis nisl libero. Fusce at elit eu augue auctor aliquet. Sed vitae mi sapien. Suspendisse tristique lacus mauris, vel convallis felis consequat ut. Sed imperdiet a massa in fringilla.
                </p>
                
                <br>
                <br>

                <div class="container_img_clinic">
                    <img class="mySlides" src="\user_section\resources\photos\office.jpg">
                    <img class="mySlides" src="\user_section\resources\photos\office_2.jpg">
                    <img class="mySlides" src="\user_section\resources\photos\office_3.jpg">
                    <button class="button-previous" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="button-next" onclick="plusDivs(+1)">&#10095;</button>
                </div>

                <br>
                <br>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ullamcorper, diam a cursus egestas, justo augue suscipit elit, sed molestie turpis nulla in risus. Fusce hendrerit, sapien dapibus commodo porttitor, mi magna vestibulum turpis, et blandit eros libero quis neque. Duis id lectus vitae justo ullamcorper consectetur quis vel metus. Suspendisse vel lorem aliquet, luctus nibh eget, commodo erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non tortor eget sem convallis semper vitae at eros. Pellentesque vel accumsan sapien. Praesent at dapibus diam. Aenean nibh risus, dictum sit amet ipsum aliquam, condimentum ullamcorper tortor. Ut at quam in diam cursus tempus in vitae nisl. Cras elementum massa sed erat dictum hendrerit. Sed dui nisi, accumsan quis dolor eget, vestibulum porta ligula. Duis placerat metus quis augue blandit, in vulputate eros semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                    Etiam viverra vel odio eget maximus. Vestibulum ullamcorper, felis id finibus vehicula, dui quam mollis enim, nec condimentum velit purus sed justo. Aenean vitae augue a erat convallis tempor. Quisque in elit rutrum, pulvinar turpis luctus, viverra nulla. Quisque convallis nisl libero. Fusce at elit eu augue auctor aliquet. Sed vitae mi sapien. Suspendisse tristique lacus mauris, vel convallis felis consequat ut. Sed imperdiet a massa in fringilla.

                    Aliquam a tortor ornare diam convallis vehicula. Nunc porta bibendum nibh eu sodales. Fusce mattis sapien quis purus feugiat semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin egestas tincidunt sapien, sed aliquam lorem hendrerit a. Praesent at felis a nisl vulputate blandit sed tempor odio. Nunc vitae fermentum odio, sed varius ante. Nulla eget arcu non nunc cursus laoreet non id orci. Ut maximus id turpis nec commodo. Proin maximus felis tortor, et fringilla neque malesuada id. Fusce facilisis neque in ligula posuere gravida. Proin in dignissim magna, at suscipit lacus. Mauris maximus suscipit erat, id maximus justo tincidunt finibus.

                    Pellentesque nec neque vestibulum, maximus est a, tincidunt nunc. In tempor convallis turpis, sed consectetur metus dapibus ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer at dictum ex. Ut pulvinar magna eu feugiat porta. Donec vitae hendrerit eros, eget rhoncus sem. Sed faucibus dui at sapien eleifend gravida. Nam eget nulla gravida, rhoncus libero id, ultricies lectus. Morbi sit amet risus purus. Sed dapibus mattis enim id commodo. Proin varius rhoncus feugiat.

                    Proin interdum mi sapien, ut porttitor odio tincidunt sed. Nam eget facilisis orci. Suspendisse aliquam, sem quis porttitor cursus, mi lectus iaculis tortor, in lacinia mauris quam a ante. Quisque pretium purus a auctor aliquam. Aliquam sodales dolor odio, at fringilla dolor bibendum a. Ut imperdiet lorem eu erat aliquam molestie nec id nibh. Suspendisse ut massa ullamcorper, sagittis purus condimentum, consequat est. Duis aliquam arcu non orci bibendum, non convallis ante laoreet.
                </p>
            </article>
        </div>

        
    </body>
    <script src="js/presentation.js"></script>
</html>
