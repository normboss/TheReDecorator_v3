<footer class="footer">

    <div class="footer-content">
        <div class="footer-text">
            <h3 class="logo">The <span class="red-text">RE</span>decorator</h3>
            <h3>Lucy@theredecorator.com</h3>
            <h3>All rights reserved The <span class="red-text">RE</span>decorator.com</h3>
        </div>

        <div class="footer-facebook">
        
            <a href="https://www.facebook.com/lucy.k.smith/">
                <img src="./img/social-fb.png" alt="Facebook">
            </a>

        </div>
    </div>
</footer>

<script>
        var moreText1 = document.getElementById("more1");
        var btnText1 = document.getElementById("myBtn1");
        var col3 = document.getElementById("column3");
        btnText1.innerHTML = "Read More";
        moreText1.style.display = "none";
        col3.style.height = "auto";

        function myFunction1() {
            if (moreText1.style.display === "inline") {
                btnText1.innerHTML = "Read More";
                moreText1.style.display = "none";
                col3.style.height = "auto";
            } else {
                btnText1.innerHTML = "Read Less";
                moreText1.style.display = "inline";
                col3.style.height = "auto";
            }
        }
    </script>
