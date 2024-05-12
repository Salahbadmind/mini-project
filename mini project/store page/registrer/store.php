<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Online Store</title>
    <link rel="stylesheet" href="store.css">

</head>
<style>
    body {
    font-family: 'Roboto', sans-serif;
    padding: 20px;
    margin: 0;
    background-image: url('books.img/hero-amazon-editors-announce-best-books-of-the-year-v2.jpeg');
    background-color: #007a7a;
    color: #2a8ff4;
}


nav {
    background-color: #4c5154; 
    padding: 20px; 
    display: flex;
    justify-content: space-between; 
    align-items: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
    border-radius: 10px; 
    transition: background-color 0.3s ease; 
}

/* Optional - Navigation Items within the nav */
nav a {
    text-decoration: none;
    color: #ffffff; 
    font-weight: 600; 
    padding: 10px 15px; 
    transition: color 0.3s ease; 
}

nav a:hover {
    color: #f1c40f; 
    text-decoration: underline; 
}


nav .brand {
    font-size: 1.5em; 
    font-weight: 700;
}


nav:hover {
    background-color: #2980b9; 
}
 

.product-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    max-width: 1200px;
    margin: 30px auto;
}


.product {
    border: 1px solid #ddd;
    padding: 20px;
    text-align: center;
    background-color: white;
    transition: box-shadow 0.3s;
}

.product:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.product img {
    width: 100%;
    height: auto;
    margin-bottom: 15px;
}

.product-title {
    font-size: 1.4em;
    margin-bottom: 10px;
}

.product-description {
    color: #7f8c8d;
    font-size: 1em;
    margin-bottom: 15px;
}

.product-price {
    color: #e67e22;
    font-size: 1.2em;
    font-weight: bold;
}

.add-to-cart {
    background-color: #3498db;
    color: white;
    padding: 10px 25px;
    border: none;
    cursor: pointer;
    text-transform: uppercase;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.add-to-cart:hover {
    background-color: #2980b9;
}


@media (max-width: 768px) {
    .product-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .product-grid {
        grid-template-columns: 1fr;
    }

    nav {
        flex-direction: column;
    }

    nav a {
        margin: 10px 0;
    }
}





        footer {
            background: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .footer-section {
            margin-bottom: 20px;
        }

        .contact-info {
            text-align: left;
        }


        .helpful-links ul {
            list-style: none;
            padding: 0;
        }

        .helpful-links ul li {
            display: inline-block;
            margin-right: 15px;
        }

        .helpful-links a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s;
        }

        .helpful-links a:hover {
            color: #ff9800; 
        }

       
        .social-media {
            text-align: right;
        }

        .social-media a {
            color: #fff;
            margin: 0 10px;
            font-size: 24px;
            transition: transform 0.3s, color 0.3s; 
        }

        .social-media a:hover {
            transform: scale(1.2); 
            color: #ff9800;

        }
        .footer-bottom {
            border-top: 1px solid #1adede;
            padding-top: 10px;
            font-size: 14px;
        }
.ssss{
    color:#e67e22;
    
}
.rrrr{
    color:floralwhite;
}


</style>
<body>
   
    <nav>
        <a type="" href="store.php">HOME</a>
        <a href="login.php">SING OUT <i class="fas fa-caret-down"></i></a>
    </nav>


    <div class="ssss">
    <h1>WELCOME TO OUR ONLINE STORE</h1>
    </div>
    <div class="rrrr">
    <h3>"Reading books in English can open up a world of knowledge, improve language skills, and broaden cultural perspectives"</h3>
    </div>
    <div class="product-grid">
        <div class="product">
            <img src="books.img/81taviPWM0L._AC_UF1000,1000_QL80_.jpg" alt="Product 1">
            <div class="product-title">THE BESTSELLER CODE</div>
            <div class="product-description">This book explores the history and evolution of fashion over the past 150 years. It covers significant trends, designers, and cultural influences that shaped the fashion industry.</div>
            <div class="product-price">$9.99</div>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product">
            <img src="books.img/91N-OorFe7L._AC_UF1000,1000_QL80_.jpg" alt="Product 2">
            <br>
            <br>
            <br>
            <div class="product-title">FASHION 150</div>
            
            <div class="product-description">Written by Jennifer Niven, this young adult novel explores themes of identity and acceptance. It follows the story of two teenagers who find each other and come to terms with their insecurities and personal challenges.</div>
            <div class="product-price">$14.99</div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="books.img/9780385755955.jpeg" alt="Product 3">
            <div class="product-title">HOLDING UP THE UNIVERSE</div>
            <div class="product-description">This book by Celeste Ng is a contemporary novel that delves into societal themes and the impact of authoritarian policies on individuals and families. It is a thought-provoking exploration of love, family, and resistance in a world where conformity is enforced.</div>
            <div class="product-price">$19.99</div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="books.img/Our-Missing-Hearts-Celeste-Ng-091922-0e49e83f9b09410688515f4d2e85f5e7.jpg" alt="Product 4">
            <div class="product-title">OUR MISSING HEARTS</div>
            <div class="product-description">This book typically falls into the thriller or horror genre. It involves a group of people being hunted by a dangerous force or entity. The story builds suspense and excitement through its plot and character development.</div>
            <div class="product-price">$24.99</div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="books.img/f86d06e9-f594-4207-99a3-ab29ac5bd86d.jpg" alt="Product 5">
            <div class="product-title">THEY HUNT</div>
            <div class="product-description">This is a psychological thriller by Alex Michaelides. The book revolves around Alicia Berenson, who seemingly kills her husband and then stops speaking. A psychotherapist is determined to unravel the mystery of her silence and uncover the truth.</div>
            <div class="product-price">$29.99</div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="books.img/1573837152-41bsvxNUSdL.jpg" alt="Product 6">
            <div class="product-title">SILENT PATIENT</div>
            <div class="product-description"> the story of a young woman who loses her memory after a traumatic event. As she tries to piece together what happened, she realizes she's being hunted by someone who doesn't want her to remember.</div>
            <div class="product-price">$34.99</div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="books.img/81pUhCtPpEL._AC_UF1000,1000_QL80_.jpg" alt="Product 7">
            <div class="product-title">DON'T LOOK BACK</div>
            <div class="product-description"> It follows the story of a young woman who loses her memory after a traumatic event. As she tries to piece together what happened, she realizes she's being hunted by someone who doesn't want her to remember</div>
            <div class="product-price">$39.99</div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="books.img/9780735213616.jpeg" alt="Product 8">
            <div class="product-title">BREATH</div>
            <div class="product-description">explores the importance of breathing correctly and the impact of breathing techniques on health and well-being. It delves into science, history, and practice, advocating for better breathing habits.</div>
            <div class="product-price">$44.99</div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="books.img/attachment_90937167.jpeg" alt="Product 9">
            <div class="product-title">MONEY MAKING BOOK SECRETS</div>
            <div class="product-description">This book offers tips and advice on creating successful books that generate revenue. It covers topics such as writing, marketing, publishing, and sales strategies to help authors succeed in the publishing world.</div>
            <div class="product-price">$49.99</div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="books.img/attachment_92980520.jpeg" alt="Product 10">
            <div class="product-title">YOUR STORY IS WORTH TELLING</div>
            <div class="product-description">This book encourages readers to share their personal stories, offering guidance on storytelling techniques, finding one's voice, and navigating the publishing process. It is designed to inspire and empower aspiring writers and storytellers.</div>
            <div class="product-price">$59.99</div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>

    <footer>
        <div class="contact-info">
            <h3>Contact Us</h3>
            <p>Email: <span id="contact-email">sbouragbi5@gmail.com</span></p>
            <p>Phone: <span id="contact-phone">0667189164</span>
                <button onclick="copyToClipboard('contact-phone')">Copy</button>
                <span class="copy-success" id="copy-success">Copied!</span>
            </p>
        </div>
    
        <div class="helpful-links">
            <h3>Helpful Links</h3>
            <ul>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/support">Support</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
            </ul>
        </div>
    
        <div class="social-media">
            <h3>Follow Us</h3>
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://twitter.com" target="_blank">Twitter</a>
            <a href="https://www.instagram.com/your_shop_not_mine/" target="_blank">Instagram</a>
        </div>
    
        <div class="footer-bottom">
            <p>&copy; 2024 My Website. All rights reserved.</p>
        </div>
    </footer>
    
    <script>
        function copyToClipboard(elementId) {
            const text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(() => {
                const successMsg = document.getElementById("copy-success");
                successMsg.style.display = "inline";
                setTimeout(() => {
                    successMsg.style.display = "none";
                }, 1500);
            });
        }
    
        // Function to validate email format
        function validateEmail(email) {
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }

document.addEventListener("DOMContentLoaded", () => {
    const contactEmail = document.getElementById("contact-email").innerText;
    if (!validateEmail(contactEmail)) {
        console.error("Invalid email format: " + contactEmail);
    }
});
</script>
</body>
</html>
