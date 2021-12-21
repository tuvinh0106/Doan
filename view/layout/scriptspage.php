<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/main.js"></script>
<script src="js/clock.js"></script>
<script src="js/show_pass.js"></script>
<!-- <script>
    $(document).ready(function() {
        $("#btnDangNhap").click(function() {
            var email = $('#txtEmailDangNhap').val();
            var filter = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
            if (filter.test(email)) {
                alert("Hợp lệ !");
            } else {
                alert("KO Hợp lệ !");
            }
        });
    });
</script> -->
<script>
    // xóa cart
    var remove_cart = document.getElementsByClassName("btn-warning");
    for (var i = 0; i < remove_cart.length; i++) {
        var button = remove_cart[i]
        button.addEventListener("click", function() {
            var button_remove = event.target
            button_remove.parentElement.parentElement.remove()
        })
    }
</script>
<script>
    // update cart 
    function updatecart() {
        var cart_item = document.getElementsByClassName("cart-items")[0];
        var cart_rows = cart_item.getElementsByClassName("cart-row");
        var total = 0;
        for (var i = 0; i < cart_rows.length; i++) {
            var cart_row = cart_rows[i]
            var price_item = cart_row.getElementsByClassName("cart-price ")[0]
            var quantity_item = cart_row.getElementsByClassName("cart-quantity-input")[0]
            var price = parseFloat(price_item.innerText) // chuyển một chuổi string sang number để tính tổng tiền.
            var quantity = quantity_item.value // lấy giá trị trong thẻ input
            total = total + (price * quantity)
        }
        document.getElementsByClassName("cart-total-price")[0].innerText = total + 'VNĐ'
        // Thay đổi text = total trong .cart-total-price. Chỉ có một .cart-total-price nên mình sử dụng [0].
    }
</script>
<script>
    // thay đổi số lượng sản phẩm
    var quantity_input = document.getElementsByClassName("cart-quantity-input");
    for (var i = 0; i < quantity_input.length; i++) {
        var input = quantity_input[i];
        input.addEventListener("change", function(event) {
            var input = event.target
            if (isNaN(input.value) || input.value <= 0) {
                input.value = 1;
            }
            updatecart()
        })
    }
</script>