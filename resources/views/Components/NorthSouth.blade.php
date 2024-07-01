<!-- resources/views/components/card-component.blade.php -->

<div class="container">

    <div class="card">
        <h2>Kenya</h2>
        <i class="fas fa-arrow-right"></i>
        <p>a lonely trip.</p>
        <div class="pic pic1"></div>
        <ul>
            @foreach(range(1, 24) as $_)
                <li></li>
            @endforeach
        </ul>
        <button></button>
    </div>
    <div class="card card2">
        <h2 class="">Vauxhall</h2>
        <i class="fas fa-arrow-right"></i>
        <p>a lonely trip.</p>
        <div class="pic pic2"></div>
        <ul>
            @foreach(range(1, 24) as $_)
                <li></li>
            @endforeach
        </ul>
        <button></button>
    </div>
</div>


</a>
<style>
    /* Define your variables */
    :root {
        --bg-color: #E6E5E1;
        --orange: #DA4D1D;
        --blue: #2b26c3;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Common styles */
    body {
        background-color: var(--bg-color);
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .card {
        position: relative;
        width: 70vw;
        height: 30vh;
        background-color: #fff;
        overflow: hidden;
        margin-bottom: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 20px;
        z-index: 10; /* Ensure animations are on top */
    }

    .card:before,
    .card:after {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background-color: var(--bg-color);
    }

    .card:before {
        top: 0;
        left: 20px;
    }

    .card:after {
        bottom: 0;
        left: 20px;
    }

    .card ul {
        position: absolute;
        left: 39px;
        top: 5px;
        list-style-type: none;
        display: flex;
        flex-direction: column;
        z-index: 10; /* Ensure list is above image */
    }

    .card ul li {
        width: 2px;
        height: 2px;
        border-radius: 50%;
        margin: 6px 0;
        background-color: var(--bg-color);
    }

    .card h2 {
        font-family: "Poppins", sans-serif;
        font-size: 12rem;
        font-weight: bold;
        color: #fff;
        position: absolute;
        bottom: 20px;
        right: 20px;
        z-index: 10; /* Ensure text is above image */
    }

    .card .fa-arrow-right {
        position: absolute;
        bottom: 20px;
        right: 60px;
        font-size: 2rem;
        color: #fff;
        cursor: pointer;
        z-index: 10; /* Ensure icon is above image */
    }

    .card p {
        position: absolute;
        top: 20px;
        right: 20px;
        color: #333;
        opacity: 0.7;
        font-size: 12px;
        letter-spacing: 1px;
        writing-mode: vertical-lr;
        transition: all 0.2s ease;
        z-index: 10; /* Ensure text is above image */
    }

    .card .pic {
        width: 100%;
        height: 200px;
        border-radius: 2%;
        background-size: cover;
        background-position: center;
        background-image: url("{{ asset('images/sun1.jpg') }}");
        position: absolute;
        top: 0;
        left: 0;
        filter: grayscale(0);
        z-index: 1; /* Ensure image is behind other elements */
    }

    .card .pic2 {
        background-image: url("{{ asset('images/snow1.jpg') }}");
    }

    .card .caption {
        position: absolute;
        bottom: 20px;
        left: 20px;
        font-weight: bold;
        font-size: 2rem;
        color: #fff;
        z-index: 10; /* Ensure caption is above image */
    }

    .card .social {
        position: absolute;
        left: 20px;
        top: 20px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 160px;
        height: 64px;
        border-radius: 80px;
        z-index: 10; /* Ensure social icons are above image */
    }

    .card .social i {
        font-size: 1.5rem;
        color: #fff;
        transition: opacity 0.2s ease;
        opacity: 0;
    }

    .card button {
        position: absolute;
        bottom: 20px;
        right: 20px;
        width: 30px;
        height: 30px;
        background-color: var(--orange);
        border: none;
        border-radius: 50%;
        cursor: pointer;
        outline: none;
        transition: transform 0.3s ease;
        mix-blend-mode: hard-light;
        z-index: 10; /* Ensure button is above image */
    }

    .card:hover .fa-arrow-right {
        transform: translateX(10px);
        background-color:#FF9C49;
    }

    .card:hover p {
        background-color:#FF9C49;
    }

    .card:hover .pic {

    color:#FF9C49;
    }

    .card:hover .social i {
        opacity: 1;
    }

    .card:hover button {
        transform: scale(1.5);
    }

    .dr {
        position: absolute;
        bottom: 16px;
        right: 16px;
        width: 100px;
        z-index: 10; /* Ensure dribbble logo is above everything */
    }

    /* Mobile Styles */
    @media only screen and (max-width: 768px) {
        .card .pic {
            filter: grayscale(0); /* Always in color on mobile */
        }
        .card h2 {

        font-size: 2rem;

    }
        .card .caption {
            display: none; /* Hide captions on mobile */
        }
    }
</style>
