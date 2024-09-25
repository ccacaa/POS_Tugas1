<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('css/js2/foodBeverage.css') }}">
        <title>Food beverage</title>
    </head>
    <body>
        <div class="container">
            <h1>Food & Beverages</h1>
            <hr>
            <section class="special-offers">
                <h2>Special Offers</h2>
                <div class="offer-banner">
                    <div class="offer-details">
                        <h3>Buy 1 Get 1 Free</h3>
                        <p>Limited Time Offer!</p>
                    </div>
                </div>
            </section>
    
            <section class="categories">
                <h2>Product Categories</h2>
                <div class="category-grid">
                    <div class="category-card">
                        <img src="{{ asset('images/js2/bread.png') }}" alt="Bread" >
                        <h3><a href="">Bread</a></h3>
                    </div>
                    <div class="category-card">
                        <img src="{{ asset('images/js2/CoffeeCups.png')}}" alt="CoffeCup">
                        <h3><a href="">Coffe Cup</a></h3>
                    </div>
                    <div class="category-card">
                        <img src="{{ asset('images/js2/pudding.png')}}" alt="Pudding">
                        <h3><a href="">Pudding</a></h3>
                    </div>
                    <div class="category-card">
                        <img src="{{ asset('images/js2/cola.png')}}" alt="Cocacola">
                        <h3><a href="">Coca-cola</a></h3>
                    </div>
                </div>
            </section>
        </div>
    </body>
    </html>