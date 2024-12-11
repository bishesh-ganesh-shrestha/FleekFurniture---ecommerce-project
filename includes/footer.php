
<!-- footer starts here -->

<div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-c1">
                    <h3>Download Our App!</h3>
                    <p>Download App for Android and iOS devices.</p>
                    <div class="app-logo">
                        <img src="../images/play-store.png" alt="play store">
                        <img src="../images/app-store.png" alt="app store">
                    </div>
                </div>
                <div class="footer-c2">
                    <img src="../logo/logo.png" alt="logo" width="200px">
                    <p>Our Main Purpose is to Make good furniture Accessible to All!</p>
                </div>
                <div class="footer-c3">
                    <h3>Useful Links:</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-c4">
                    <h3>Follow Us:</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright &copy; 2022 - FleekSports</p>
        </div>
    </div>


    <!-- js for toggle menu -->

    <script>
        var MenuItems = document.getElementById("Menu-items");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
                MenuItems.style.maxHeight = "200px";
            }
            else{
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

<script type="text/javascript">

var MenuItems = document.getElementById("Menu-items");

MenuItems.style.maxHeight = "0px";

function menutoggle() {
    if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
    }
    else {
        MenuItems.style.maxHeight = "0px";
    }
}
</script>

<!-- js for product gallery -->
<script type="text/javascript">
var ProductImg = document.getElementById("ProductImg");
var SmallImg = document.getElementsByClassName("small-img");

SmallImg[0].onclick = function(){
    ProductImg.src = SmallImg[0].src;
} 
SmallImg[1].onclick = function(){
    ProductImg.src = SmallImg[1].src;
} 
SmallImg[2].onclick = function(){
    ProductImg.src = SmallImg[2].src;
} 
SmallImg[3].onclick = function(){
    ProductImg.src = SmallImg[3].src;
}        

</script>
<script type="text/javascript">

        var MenuItems = document.getElementById("Menu-items");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

<!-- !-- js for toggle form -->
    <!-- <script>
        var loginForm = document.getElementById("loginForm");
        var regForm = document.getElementById("regForm");
        var indicator = document.getElementById("indicator");
        function login(){
            regForm.style.transform = "translateX(300px)";
            loginForm.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";

        }
        function register(){
            regForm.style.transform = "translateX(0px)";
            loginForm.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";
        }

        
    </script> -->

</body>

</html>