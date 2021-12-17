<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IM Best Foods</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/singleFood.css">
    <link rel="stylesheet" href="./styles/404.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jdenticon@3.1.1/dist/jdenticon.min.js" async integrity="sha384-l0/0sn63N3mskDgRYJZA6Mogihu0VY3CusdLMiwpJ9LFPklOARUcOiWEIGGmFELx" crossorigin="anonymous">
    </script>
</head>

<body>
    <header class="header">
        <nav class="container mx-auto">
            <div class="logo">
                <h1 translate="no" class="translate-no logo-text">IM <span class="inner-logo">Best</span> Foods</h1>
            </div>
            <ul class="links">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/">Kitchen</a>
                </li>
                <li>
                    <a href="/">Menu</a>
                </li>
                <li>
                    <a href="/">Gallery</a>
                </li>
            </ul>
            <div class="cart-register">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7729 9.30504V6.27304C15.7729 4.18904 14.0839 2.50004 12.0009 2.50004C9.91694 2.49104 8.21994 4.17204 8.21094 6.25604V6.27304V9.30504" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7422 21.0004H7.25778C4.90569 21.0004 3 19.0954 3 16.7454V11.2294C3 8.87937 4.90569 6.97437 7.25778 6.97437H16.7422C19.0943 6.97437 21 8.87937 21 11.2294V16.7454C21 19.0954 19.0943 21.0004 16.7422 21.0004Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <button class="rounded-btn signup-button" id="signup">
                    <div class="signup-original button-afterLoad">
                        <p>Sign Up</p>
                    </div>
                    <div class="back-content button-beforeLoad">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5 19L8.5 12L15.5 5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Back
                    </div>
                </button>
                <div class="customer-profile-wrapper">
                    <button class="customer-profile">
                        <svg width="50" height="50" data-jdenticon-value="user128"></svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>