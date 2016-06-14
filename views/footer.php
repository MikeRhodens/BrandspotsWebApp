<footer>
    <div class="nav-footer">
        <ul>
            <li><a href="?action=overzicht" class="nav-active"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
            <li><a href="?action=cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
            <li><a class="search"><i class="fa fa-search" aria-hidden="true"></i></a></li>
        </ul>
    </div><!--End nav-footer-->
    <div class="input"><!--Deze div komt omhoog als je search klikt-->
        <div>
            <form action="?action=search" method="post" id="searchForm">
                <input type="text" class="search-input" value="" placeholder="Search..." name="searchQuery"
                       id="icon-search">
                <button class="search-button" form="searchForm"><i class="fa fa-search"></i></button>
                <form>
        </div>
    </div>
    <div class="clear"></div>
</footer>

</div><!--End container-app-->
<script src="libs/jquery.js"></script>
<script src="assets/js/index.js"></script>

</body>
</html>
