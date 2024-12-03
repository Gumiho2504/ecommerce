@props(['active'=>''])
<section id="header">
    <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a class="active" href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('shop')}}">shop</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a id="shop" href="{{route('cart')}}"><i class="fa-solid fa-cart-shopping"></i></a></li>
            <a href="#" id="close"><i class="fas fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
