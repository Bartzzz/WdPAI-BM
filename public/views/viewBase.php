
<script type="text/javascript" src="./public/js/main-page-script.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <script src="https://kit.fontawesome.com/9de8fe6b2a.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="base-container">
            <nav>
                <img src="public/img/logo.svg">
                <ul>
                    <li class="align-list-item"> 
                        <i class="fas fa-portrait"></i>
                        <a href="/main" class="button">Profile</a>
                    </li>
                    <li class="align-list-item">
                        <i class="fas fa-dumbbell"></i>
                        <a href="/training" class="button">Training</a>
                    </li>
                    <li class="align-list-item">
                        <i class="fas fa-utensils"></i>
                        <a href="/diet" class="button">Diet</a>
                    </li>
                    <li class="align-list-item">
                        <i class="fas fa-book-open"></i>
                        <a href="/diary" class="button">Diary</a>
                    </li>
                    <li class="align-list-item">
                        <i class="fas fa-user-friends"></i>
                        <a href="/people" class="button">People</a>
                    </li>
                </ul>
            </nav>
            <main>
                <header>
                    <div class="search-bar">
                            <input class="header-placeholder" placeholder="search people">
                    </div>
                    <div class="header-buttons">
                        <button class="header-button" onclick="main()"><i class="fas fa-portrait"></i></button>
                        <button class="header-button"><i class="fas fa-comment-alt"></i></button>
                        <button class="header-button"><i class="fas fa-bell"></i></button>
                        <button class="header-button"><i class="fas fa-cog"></i></button>
                        <button class="header-button" onclick="logout()"><i class="fas fa-sign-out-alt"></i></button>
                    </div>
                </header>