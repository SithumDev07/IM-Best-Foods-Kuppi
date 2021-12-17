<?php

require_once('./configuration/config.php');
include_once('./includes/header.php');

?>


<main class="home-page afterLoad">
    <section class="home container mx-auto">
        <div class="home-content">
            <h2 class="home-title">It's not just Food, It's an Experience.</h2>
            <div class="doubled-buttons">
                <button class="red-button rounded-btn">View Menu</button>
                <button class="white-button rounded-btn">Book A Table</button>
                <p class="button-description">No hidden fees</p>
            </div>
            <div class="reviews">
                <div class="review-users">
                    <div class="user-circle">
                        <img src="./images/person1.jpg" alt="User Images">
                    </div>
                    <div class="user-circle">
                        <img src="./images/person2.jpg" alt="User Images">
                    </div>
                    <div class="user-circle">
                        <img src="./images/person3.jpg" alt="User Images">
                    </div>
                </div>
                <div class="stars">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.9184 14.3201C17.6594 14.5711 17.5404 14.9341 17.5994 15.2901L18.4884 20.2101C18.5634 20.6271 18.3874 21.0491 18.0384 21.2901C17.6964 21.5401 17.2414 21.5701 16.8684 21.3701L12.4394 19.0601C12.2854 18.9781 12.1144 18.9341 11.9394 18.9291H11.6684C11.5744 18.9431 11.4824 18.9731 11.3984 19.0191L6.96839 21.3401C6.74939 21.4501 6.50139 21.4891 6.25839 21.4501C5.66639 21.3381 5.27139 20.7741 5.36839 20.1791L6.25839 15.2591C6.31739 14.9001 6.19839 14.5351 5.93939 14.2801L2.32839 10.7801C2.02639 10.4871 1.92139 10.0471 2.05939 9.65012C2.19339 9.25412 2.53539 8.96512 2.94839 8.90012L7.91839 8.17912C8.29639 8.14012 8.62839 7.91012 8.79839 7.57012L10.9884 3.08012C11.0404 2.98012 11.1074 2.88812 11.1884 2.81012L11.2784 2.74012C11.3254 2.68812 11.3794 2.64512 11.4394 2.61012L11.5484 2.57012L11.7184 2.50012H12.1394C12.5154 2.53912 12.8464 2.76412 13.0194 3.10012L15.2384 7.57012C15.3984 7.89712 15.7094 8.12412 16.0684 8.17912L21.0384 8.90012C21.4584 8.96012 21.8094 9.25012 21.9484 9.65012C22.0794 10.0511 21.9664 10.4911 21.6584 10.7801L17.9184 14.3201Z" fill="#FAB735" />
                    </svg>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.9184 14.3201C17.6594 14.5711 17.5404 14.9341 17.5994 15.2901L18.4884 20.2101C18.5634 20.6271 18.3874 21.0491 18.0384 21.2901C17.6964 21.5401 17.2414 21.5701 16.8684 21.3701L12.4394 19.0601C12.2854 18.9781 12.1144 18.9341 11.9394 18.9291H11.6684C11.5744 18.9431 11.4824 18.9731 11.3984 19.0191L6.96839 21.3401C6.74939 21.4501 6.50139 21.4891 6.25839 21.4501C5.66639 21.3381 5.27139 20.7741 5.36839 20.1791L6.25839 15.2591C6.31739 14.9001 6.19839 14.5351 5.93939 14.2801L2.32839 10.7801C2.02639 10.4871 1.92139 10.0471 2.05939 9.65012C2.19339 9.25412 2.53539 8.96512 2.94839 8.90012L7.91839 8.17912C8.29639 8.14012 8.62839 7.91012 8.79839 7.57012L10.9884 3.08012C11.0404 2.98012 11.1074 2.88812 11.1884 2.81012L11.2784 2.74012C11.3254 2.68812 11.3794 2.64512 11.4394 2.61012L11.5484 2.57012L11.7184 2.50012H12.1394C12.5154 2.53912 12.8464 2.76412 13.0194 3.10012L15.2384 7.57012C15.3984 7.89712 15.7094 8.12412 16.0684 8.17912L21.0384 8.90012C21.4584 8.96012 21.8094 9.25012 21.9484 9.65012C22.0794 10.0511 21.9664 10.4911 21.6584 10.7801L17.9184 14.3201Z" fill="#FAB735" />
                    </svg>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.9184 14.3201C17.6594 14.5711 17.5404 14.9341 17.5994 15.2901L18.4884 20.2101C18.5634 20.6271 18.3874 21.0491 18.0384 21.2901C17.6964 21.5401 17.2414 21.5701 16.8684 21.3701L12.4394 19.0601C12.2854 18.9781 12.1144 18.9341 11.9394 18.9291H11.6684C11.5744 18.9431 11.4824 18.9731 11.3984 19.0191L6.96839 21.3401C6.74939 21.4501 6.50139 21.4891 6.25839 21.4501C5.66639 21.3381 5.27139 20.7741 5.36839 20.1791L6.25839 15.2591C6.31739 14.9001 6.19839 14.5351 5.93939 14.2801L2.32839 10.7801C2.02639 10.4871 1.92139 10.0471 2.05939 9.65012C2.19339 9.25412 2.53539 8.96512 2.94839 8.90012L7.91839 8.17912C8.29639 8.14012 8.62839 7.91012 8.79839 7.57012L10.9884 3.08012C11.0404 2.98012 11.1074 2.88812 11.1884 2.81012L11.2784 2.74012C11.3254 2.68812 11.3794 2.64512 11.4394 2.61012L11.5484 2.57012L11.7184 2.50012H12.1394C12.5154 2.53912 12.8464 2.76412 13.0194 3.10012L15.2384 7.57012C15.3984 7.89712 15.7094 8.12412 16.0684 8.17912L21.0384 8.90012C21.4584 8.96012 21.8094 9.25012 21.9484 9.65012C22.0794 10.0511 21.9664 10.4911 21.6584 10.7801L17.9184 14.3201Z" fill="#FAB735" />
                    </svg>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.9184 14.3201C17.6594 14.5711 17.5404 14.9341 17.5994 15.2901L18.4884 20.2101C18.5634 20.6271 18.3874 21.0491 18.0384 21.2901C17.6964 21.5401 17.2414 21.5701 16.8684 21.3701L12.4394 19.0601C12.2854 18.9781 12.1144 18.9341 11.9394 18.9291H11.6684C11.5744 18.9431 11.4824 18.9731 11.3984 19.0191L6.96839 21.3401C6.74939 21.4501 6.50139 21.4891 6.25839 21.4501C5.66639 21.3381 5.27139 20.7741 5.36839 20.1791L6.25839 15.2591C6.31739 14.9001 6.19839 14.5351 5.93939 14.2801L2.32839 10.7801C2.02639 10.4871 1.92139 10.0471 2.05939 9.65012C2.19339 9.25412 2.53539 8.96512 2.94839 8.90012L7.91839 8.17912C8.29639 8.14012 8.62839 7.91012 8.79839 7.57012L10.9884 3.08012C11.0404 2.98012 11.1074 2.88812 11.1884 2.81012L11.2784 2.74012C11.3254 2.68812 11.3794 2.64512 11.4394 2.61012L11.5484 2.57012L11.7184 2.50012H12.1394C12.5154 2.53912 12.8464 2.76412 13.0194 3.10012L15.2384 7.57012C15.3984 7.89712 15.7094 8.12412 16.0684 8.17912L21.0384 8.90012C21.4584 8.96012 21.8094 9.25012 21.9484 9.65012C22.0794 10.0511 21.9664 10.4911 21.6584 10.7801L17.9184 14.3201Z" fill="#FAB735" />
                    </svg>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.9184 14.3201C17.6594 14.5711 17.5404 14.9341 17.5994 15.2901L18.4884 20.2101C18.5634 20.6271 18.3874 21.0491 18.0384 21.2901C17.6964 21.5401 17.2414 21.5701 16.8684 21.3701L12.4394 19.0601C12.2854 18.9781 12.1144 18.9341 11.9394 18.9291H11.6684C11.5744 18.9431 11.4824 18.9731 11.3984 19.0191L6.96839 21.3401C6.74939 21.4501 6.50139 21.4891 6.25839 21.4501C5.66639 21.3381 5.27139 20.7741 5.36839 20.1791L6.25839 15.2591C6.31739 14.9001 6.19839 14.5351 5.93939 14.2801L2.32839 10.7801C2.02639 10.4871 1.92139 10.0471 2.05939 9.65012C2.19339 9.25412 2.53539 8.96512 2.94839 8.90012L7.91839 8.17912C8.29639 8.14012 8.62839 7.91012 8.79839 7.57012L10.9884 3.08012C11.0404 2.98012 11.1074 2.88812 11.1884 2.81012L11.2784 2.74012C11.3254 2.68812 11.3794 2.64512 11.4394 2.61012L11.5484 2.57012L11.7184 2.50012H12.1394C12.5154 2.53912 12.8464 2.76412 13.0194 3.10012L15.2384 7.57012C15.3984 7.89712 15.7094 8.12412 16.0684 8.17912L21.0384 8.90012C21.4584 8.96012 21.8094 9.25012 21.9484 9.65012C22.0794 10.0511 21.9664 10.4911 21.6584 10.7801L17.9184 14.3201Z" fill="#FAB735" />
                    </svg>

                </div>
            </div>
        </div>
        <div class="home-image">
            <svg width="157" class="doodle1" height="173" viewBox="0 0 157 173" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M113.925 46.4973C116.223 45.3127 118.421 44.586 120.102 43.2322C123.384 40.5744 126.497 37.6777 129.461 34.6615C132.694 31.3866 135.429 27.574 138.871 24.5578C141.377 22.3679 144.54 20.7354 147.673 19.5209C150.349 18.4857 153.044 19.5607 155.013 21.7806C156.923 23.9407 157.609 26.7279 156.217 29.107C153.293 34.1439 152.945 39.7781 151.89 45.2131C146.917 70.9352 144.45 96.9161 143.993 123.106C143.754 136.654 146.29 149.525 152.885 161.49C154.665 164.725 156.058 168.16 155.799 172.609C154.238 172.072 152.825 171.843 151.711 171.136C150.13 170.13 148.588 168.926 147.345 167.522C137.249 156.085 130.963 142.995 129.71 127.576C128.367 111.061 129.869 94.6864 131.729 78.3313C132.853 68.377 134.514 58.4823 135.996 48.1397C135.151 48.8664 134.454 49.4537 133.778 50.0609C128.944 54.3911 123.623 57.9249 117.297 59.6768C109.837 61.7374 104.247 59.1493 101.204 52.0219C99.6125 48.289 98.5283 44.3471 97.1458 40.5246C95.9025 37.0705 94.878 36.6225 91.8046 38.6035C89.6164 40.007 87.6769 41.8088 85.6777 43.4911C81.0427 47.3832 76.5768 51.4844 71.7727 55.1576C69.1469 57.1584 66.1133 58.7809 63.0399 59.9954C53.382 63.8278 44.3011 59.3384 41.6653 49.2845C40.5513 45.034 40.5414 40.5147 39.7457 36.1646C39.0395 32.2725 38.204 28.3704 36.9309 24.6375C35.9561 21.7706 35.0609 21.7607 32.4848 23.5027C27.5714 26.8274 24.8461 31.5657 23.5928 37.2696C21.892 45.0141 22.3496 52.7586 23.8714 60.4334C24.9754 65.9879 26.0198 71.5524 28.8445 76.6789C31.3211 81.1882 28.1781 86.2052 22.8071 87.0215C18.3909 87.6884 14.5317 86.1754 12.0253 82.6814C9.05133 78.5304 6.0575 74.1704 4.26717 69.4421C-0.775608 56.143 -1.32263 42.406 2.4868 28.669C5.7094 17.0522 12.463 8.04354 23.4536 2.67814C34.8919 -2.90626 45.8029 0.388649 52.5067 11.1991C57.2014 18.7644 58.2458 27.2754 58.9022 35.8859C59.0614 38.0161 59.2106 40.1364 59.4194 42.9834C61.6375 41.321 63.4775 40.1962 65.0192 38.7528C68.58 35.4181 71.7727 31.6652 75.5225 28.5694C79.1032 25.613 82.8927 22.557 87.1199 20.815C97.3049 16.6043 107.53 21.7507 110.802 32.2625C111.846 35.6072 112.284 39.141 113.01 42.5951C113.239 43.71 113.527 44.8249 113.925 46.4973Z" fill="#D31B27" />
            </svg>

            <svg width="317" height="375" class="doodle2" viewBox="0 0 317 375" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.5537 237.49C33.5411 226.619 43.7176 216.684 55.7841 208.711C55.3364 208.084 55.0977 207.616 54.7396 207.257C46.7516 199.025 43.4291 188.951 43.1704 177.702C43.1506 176.627 43.2699 175.522 43.5485 174.487C44.1652 172.217 45.5878 170.654 47.9951 170.276C50.4721 169.878 52.5909 170.734 53.7846 172.894C54.6799 174.516 55.2569 176.388 55.615 178.23C57.0872 185.745 59.0867 192.992 64.0407 199.134C65.6621 201.145 66.8359 201.583 69.0443 199.861C76.2365 194.247 83.6773 188.951 90.8496 183.316C97.7433 177.901 106.268 179.504 110.208 187.358C111.411 189.767 112.277 192.385 113.003 194.983C116.166 206.302 119.19 217.66 122.324 228.998C123.408 232.92 124.662 236.793 125.816 240.695C129.785 254.164 138.429 264.079 149.62 272.062C149.978 272.321 150.386 272.51 151.043 272.879C151.51 271.943 151.948 271.087 152.356 270.221C157.28 259.649 161.687 248.798 167.238 238.565C173.604 226.838 180.816 215.54 188.008 204.281C191.888 198.199 200.483 198.706 204.173 205.286C206.571 209.567 208.351 214.345 209.555 219.113C211.535 226.898 212.907 234.852 214.39 242.756C216.906 256.195 221.263 268.976 227.799 281.002C231.689 288.149 235.578 295.296 239.537 302.404C246.471 314.857 255.374 325.798 266.117 335.075C271.479 339.704 277.507 343.696 283.675 347.21C292.936 352.486 302.576 357.075 312.056 361.953C312.533 362.202 313.031 362.431 313.538 362.62C317.268 363.964 317.676 364.81 316.045 368.493C314.383 372.236 311.329 374.506 307.331 374.307C302.784 374.088 298.019 373.709 293.802 372.166C284.998 368.941 276.304 365.258 267.888 361.107C251.813 353.153 239.428 340.71 228.714 326.654C218.398 313.115 209.565 298.572 201.806 283.401C194.624 269.345 191.52 254.124 189.451 238.644C189.252 237.121 189.003 235.608 188.754 234.095C188.735 233.966 188.516 233.866 188.197 233.577C187.73 234.354 187.232 235.071 186.854 235.837C179.483 251.088 173.017 266.677 169.456 283.331C167.417 292.878 158.931 297.915 149.929 294.261C129.267 285.859 112.327 273.058 104.398 251.297C99.6433 238.236 96.0721 224.748 91.9736 211.448C91.6852 210.503 91.4365 209.547 91.0585 208.213C90.1135 208.8 89.3774 209.218 88.6711 209.696C84.3836 212.563 80.2553 215.679 75.8087 218.257C57.8233 228.68 43.3197 242.875 30.7359 259.221C29.5223 260.794 28.3286 262.396 26.9558 263.83C21.4448 269.603 13.2081 269.394 8.73167 262.794C6.42381 259.4 4.9217 255.179 4.05626 251.118C-2.08145 222.388 -1.22593 193.789 6.43376 165.438C8.10497 159.246 9.9652 153.084 12.1736 147.061C18.4505 129.929 28.826 115.684 42.0365 103.062C68.2784 77.9959 99.9219 62.6657 133.416 50.312C145.532 45.8423 157.678 41.3727 169.496 36.2062C175.803 33.4488 181.642 29.4669 187.372 25.5746C193.271 21.5629 196.931 15.8091 198.225 8.67159C198.513 7.06889 198.941 5.49604 199.398 3.93316C200.055 1.67345 201.328 -0.0487213 203.915 0.00105203C206.461 0.0508254 207.904 1.73316 208.401 4.01278C209.664 9.82631 209.893 15.6598 208.182 21.4534C205.944 28.9791 201.507 35.1709 195.608 40.0885C190.704 44.17 185.511 48.1717 179.831 50.9889C167.705 57.0115 155.37 62.6757 142.796 67.6829C124.851 74.8304 107.82 83.7597 91.0585 93.2365C86.1443 96.0139 81.6679 99.6872 77.3307 103.35C70.9742 108.706 64.8962 114.39 58.7485 119.995C46.8611 130.825 38.4652 143.966 33.3024 159.146C27.5427 176.079 23.2155 193.361 22.4097 211.289C22.0516 219.293 22.7977 227.346 23.0663 235.379C23.0961 235.867 23.2951 236.365 23.5537 237.49Z" fill="#E7BC00" />
            </svg>

            <img src="./images/main.png" alt="Main Dish Of the day" />
        </div>
    </section>
    <section class="container mx-auto">
        <div class="foods">
            <?php include('./operations/get-all-foods.php'); ?>
        </div>
    </section>

    <?php include_once('./includes/footer.php');
