<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSS Grid Example</title>

       
    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo">CSS Grid Example</div>
                <ul>
                    <li>
                        <a href="#">Shop</a>
                        <a href="#">About</a>
                        <a href="#">Blog</a>
                        <a href="#">Cart</a>
                    </li>
                </ul>
            </div> <!-- end top-nav -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>CSS Grid Example</h1>
                    <p>A practical example of using CSS Grid for a typical website layout.</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Button 1</a>
                        <a href="#" class="button button-white">Button 2</a>
                    </div>
                </div> <!-- end of hero-copy -->

                <div class="hero-image">
                    <img src="img/macbook-pro-laravel.png" alt="hero image">
                </div> 
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">CSS Grid Example</h1>

                <p class="section-description">The opportunity to join Citrus Systems greatly interests me 
                because of an opportunity to work in comfortable working conditions and a friendly atmosphere. 
                As a holder of Computer Programming diploma, I can competently execute JavaScript, object-oriented
                programing, SQL and many more IT related tasks. </p>

                <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>
            

            <div class="products text-center">
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$2499.99</div>
                </div>
            </div> <!-- end products -->

            <div class="text-center button-container">
                <a href="#" class="button">View more products</a>
            </div>

            </div> <!-- end container -->


        </div> <!-- end featured section -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">From Our Blog</h1>

                <p class="section-description"> Allan Karlsson hesitated as he stood in the flowerbed that ran 
                along one side of the Old People’s Home. He was wearing a brown jacket with brown trousers 
                and on his feet he had a pair of brown indoor slippers. He was not a trendsetter; people 
                rarely are at that age. He was on the run from his own birthday party, another unusual 
                thing for a hundred-year-old, not least because even being one hundred is pretty rare.</p>

                <div class="blog-posts">
                    <div class="blog-post">
                        <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">After a moment, he moved to the other toilet, but there 
                        he faced a different problem. Evidently he didn’t want to be parted from his big grey 
                        suitcase on wheels, but the cubicle was simply too small for the two of them.
                        </div>
                    </div>
               
                    <div class="blog-post">
                        <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">Evidently he didn’t want to be parted from his big grey 
                        suitcase on wheels, but the cubicle was simply too small for the two of them.
                        </div>
                    </div>
              
                    <div class="blog-post">
                        <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">The little man told him that the bus left from outside the
                         terminal door and that it would be most convenient to buy a ticket directly from 
                         the driver.</div>   
                    </div>

                </div> <!-- end blog-posts -->
            </div> <!-- end container -->
        </div> <!-- end blog-section -->


        <footer>
            <div class="footer-content container">
                <div class="made-with"> <i class="fa fa-heart"></i> by Ognjen Cicovic </div>
            </div> <!-- end footer-content -->
        </footer>

    </body>
</html>
