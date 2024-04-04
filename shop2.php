<!DOCTYPE html> 
<html> 
    <head> 
    <link rel="stylesheet" href="shop.css">
        <title>CakeBake</title> 
        <link rel="stylesheet" href="style.css">
        <script src="main.js"></script>
    </head> 
    <body> 
        <header> 
            <h1 id>Welcome <?php 
            $user = $_SESSION["user"]; 
            echo $user["name"]; 
            ?> to Our Web Application !</h1> 
        </header> 
        <nav> 
            <ul> 
                <li><a href="index.html">Home</a></li> 
            <li><a href="shop.html">Shop</a></li> 
            <li><a href="cart.html">Cart</a></li> 
            <li><a href="#" id="logoutBtn">Logout</a></li> 
  
            </ul> 
        </nav> 
        <main> 
            <section> 
                <h2>Products</h2> 
                <ul> 
                    <li> 
                         <img src="./image/c1.png" alt="">
                            <div class="card-body">
                                <h3>Chocolate Cake</h3>
                                <div class="star">
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star "></i>
                                    <i class="bx bxs-star "></i>
                                </div>
                                <p>Has three layers fluffy and moist, filled to brim with chocolate chips</p>
                                <select class="cakeWeight" data-index="0">
                                    <option value="0.5">1/2 kg</option>
                                    <option value="1">1 kg</option>
                                </select>
                                <h6><span class="selectedWeight">0.5 kg</span> - Rs. <span class="cakePrice"
                                        data-price="350">350</span>
                                        <span><button id="addToCartBtn" class="addToCartBtn">Add Cart</button></span>
                                </h6>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3 py-3 py-md-0">
                        <div class="card h-100">
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Quick View"><i><img
                                            src="./image/views.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                            src="./image/heart.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                            src="./image/add.png" alt="" width="30px"></i></button>
                            </div>
                            <img src="./image/c2.png" alt="">
                            <div class="card-body">
                                <h3 id>Truffle Cake</h3>
                                <div class="star">
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star "></i>
                                    <i class="bx bxs-star "></i>
                                </div>
                                <p>Layered with chocolate ganache and topped with chocolate truffels</p>
                                <select class="cakeWeight" data-index="1">
                                    <option value="0.5">0.5 kg</option>
                                    <option value="1">1 kg</option>
                                </select>
                                <h6><span class="selectedWeight">1/2 kg</span> - Rs. <span class="cakePrice"
                                        data-price="500">500</span>
                                        <span><button id="addToCartBtn" class="addToCartBtn">Add Cart</button></span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card h-100">
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Quick View"><i><img
                                            src="./image/views.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                            src="./image/heart.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                            src="./image/add.png" alt="" width="30px"></i></button>
                            </div>
                            <img src="./image/c3.png" alt="">
                            <div class="card-body">
                                <h3 id="pineapplecake">Pineapple Cake</h3>
                                <div class="star">
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star "></i>
                                </div>
                                <p>Fresh whipped cream and luscious chunks of pineapple</p>
                                <select class="cakeWeight" data-index="2">
                                    <option value="0.5">0.5 kg</option>
                                    <option value="1">1 kg</option>
                                </select>
                                <h6><span class="selectedWeight">1/2 kg</span> - Rs. <span class="cakePrice"
                                        data-price="350">350</span>
                                        <span><button id="addToCartBtn" class="addToCartBtn">Add Cart</button></span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-1 py-md-0">
                        <div class="card h-100">
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Quick View"><i><img
                                            src="./image/views.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                            src="./image/heart.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                            src="./image/add.png" alt="" width="30px"></i></button>
                            </div>
                            <img src="./image/c4.png" alt="">
                            <div class="card-body">
                                <h3 id="butterscotchcake">Butterscotch Cake</h3>
                                <div class="star">
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                </div>
                                <p>Tender brown sugar cake layers and topped and filled with buttercream</p>
                                <select class="cakeWeight" data-index="3">
                                    <option value="0.5">0.5 kg</option>
                                    <option value="1">1 kg</option>
                                </select>
                                <h6><span class="selectedWeight">1/2 kg</span> - Rs. <span class="cakePrice"
                                        data-price="350">350</span>
                                        <span><button id="addToCartBtn" class="addToCartBtn">Add Cart</button></span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:50px;" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card h-100">
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Quick View"><i><img
                                            src="./image/views.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                            src="./image/heart.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                            src="./image/add.png" alt="" width="30px"></i></button>
                            </div>
                            <img src="./image/c5.png" alt="">
                            <div class="card-body">
                                <h3 id="redvelvetcake">Red Velvet Cake</h3>
                                <div class="star">
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star "></i>
                                    <i class="bx bxs-star "></i>
                                </div>
                                <p>A red, crimson, or scarlet-colored layer cake, layered with ermine icing</p>
                                <select class="cakeWeight" data-index="4">
                                    <option value="0.5">0.5 kg</option>
                                    <option value="1">1 kg</option>
                                </select>
                                <h6><span class="selectedWeight">1/2 kg</span> - Rs. <span class="cakePrice"
                                        data-price="450">450</span>
                                        <span><button id="addToCartBtn" class="addToCartBtn">Add Cart</button></span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card h-100">
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Quick View"><i><img
                                            src="./image/views.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                            src="./image/heart.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                            src="./image/add.png" alt="" width="30px"></i></button>
                            </div>
                            <img src="./image/c6.png" alt="">
                            <div class="card-body">
                                <h3 id>Red Velvet Cheese Cake</h3>
                                <div class="star">
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star "></i>
                                    <i class="bx bxs-star "></i>
                                </div>
                                <p>Four-layered,two layers each of red-velvet covered in cream cheese icing </p>
                                <select class="cakeWeight" data-index="5">
                                    <option value="0.5">0.5 kg</option>
                                    <option value="1">1 kg</option>
                                </select>
                                <h6><span class="selectedWeight">1/2 kg</span> - Rs. <span class="cakePrice"
                                        data-price="600">600</span>
                                        <span><button id="addToCartBtn" class="addToCartBtn">Add Cart</button></span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card h-100">
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Quick View"><i><img
                                            src="./image/views.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                            src="./image/heart.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                            src="./image/add.png" alt="" width="30px"></i></button>
                            </div>
                            <img src="./image/c7.png" alt="">
                            <div class="card-body">
                                <h3>Mix Fruit Cake</h3>
                                <div class="star">
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star "></i>
                                </div>
                                <p>Moist sponge cake layered with fresh cream and seasons fresh fruits</p>
                                <select class="cakeWeight" data-index="6">
                                    <option value="0.5">0.5 kg</option>
                                    <option value="1">1 kg</option>
                                </select>
                                <h6><span class="selectedWeight">1/2 kg</span> - Rs. <span class="cakePrice"
                                        data-price="500">500</span>
                                        <span><button id="addToCartBtn" class="addToCartBtn">Add Cart</button></span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card h-100">
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Quick View"><i><img
                                            src="./image/views.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                            src="./image/heart.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                            src="./image/add.png" alt="" width="30px"></i></button>
                            </div>
                            <img src="./image/c8.png" alt="">
                            <div class="card-body">
                                <h3>Doll Cake</h3>
                                <div class="star">
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                </div>
                                <p>doll-licious treat!Can be customised as per ones taste</p>
                                <select class="cakeWeight" data-index="7">
                                    <option value="0.5">0.5 kg</option>
                                    <option value="1">1 kg</option>
                                </select>
                                <h6><span class="selectedWeight">1/2 kg</span> - Rs. <span class="cakePrice"
                                        data-price="500">500</span>
                                    <span><button>Add Cart</button></span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="product-cards" data-aos="fade-up" data-aos-duration="1500">
            <div class="container">
                <h1 id="donuts">DONUTS</h1>
                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card h-100">
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Quick View"><i><img
                                            src="./image/views.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                            src="./image/heart.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                            src="./image/add.png" alt="" width="30px"></i></button>
                            </div>
                            <img src="./image/c9.png" alt="">
                            <div class="card-body">
                                <h3>Chocolate Donuts</h3>
                                <div class="star">
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                </div>
                                <p></p>
                                <h6>Rs.50 <span><button>Add Cart</button></span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card h-100">
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Quick View"><i><img
                                            src="./image/views.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                            src="./image/heart.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                            src="./image/add.png" alt="" width="30px"></i></button>
                            </div>
                            <img src="./image/c10.png" alt="">
                            <div class="card-body">
                                <h3>White chocolate</h3>
                                <div class="star">
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                </div>
                                <p></p>
                                <h6>Rs.50<span><button style="background-color: #A7727D;">Add Cart</button>
</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card h-100">
                            <div class="overlay">
                                <button type="button" class="btn btn-secondary" title="Quick View"><i><img
                                            src="./image/views.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                                            src="./image/heart.png" alt="" width="30px"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                                            src="./image/add.png" alt="" width="30px"></i></button>
                            </div>
                            <img src="./image/c11.png" alt="">
                            <div class="card-body">
                                <h3>Sugarcoat Donut</h3>
                                <div class="star">
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                    <i class="bx bxs-star checked"></i>
                                </div>
                                <p></p>
                                <h6>Rs.25 <span><button>Add Cart</button></span></h6>
                            </div>
                        </div>
                    </div>

                    <!-- product cards end-->


                    
        <footer> 
            <p>&copy;Cake Bake Web Application</p> 
        </footer> 
        <script>
            // Function to handle add to cart button click
            function addToCart(cake, weight, price) {
                // Send AJAX request to shop.php to add item to cart
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            // Item added successfully
                            alert("Item added to cart!\ncake: "+cake+"\nweight: "+weight+"\nprice: "+price);
                            // You can optionally redirect user to cart.php here
                        } else {
                            // Error adding item to cart
                            alert("Error adding item to cart!");
                        }
                    }
                };
                xhr.open("POST", "shop.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                // Send cake name, weight, and price as parameters
                xhr.send("cake=" + encodeURIComponent(cake) + "&weight=" + encodeURIComponent(weight) + "&price=" + encodeURIComponent(price));
            }
    
            // Add event listener for Add Cart buttons
            var addCartBtns = document.querySelectorAll('button.addToCartBtn');
            addCartBtns.forEach(function(btn) {
                btn.addEventListener("click", function() {
                    var card = this.closest(".card-body");
                    var cake = card.querySelector("h3").textContent;
                    var weight = card.querySelector(".selectedWeight").textContent;
                    var price = card.querySelector(".cakePrice").textContent;
                    addToCart(cake, weight, price);
                });
            });
    
             // Function to handle logout button click
document.getElementById("logoutBtn").addEventListener("click", function() {
    var logoutConfirmation = confirm("Are you sure you want to logout?");
    if (logoutConfirmation) {
        alert("Successfully logged out!");
        // Redirect user to index.html
        window.location.replace("index.html");
    }
});
        </script>    
    </body> 
    </html>
        
    </body> 
</html>