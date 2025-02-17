<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banking Guide</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        :root {
            --primary: #605DFF;
            --primary-dark: #4a00e0;
            --primary-light: #5DA8FF;
            --secondary: #1D1D1D;
            --social-background: #E9E9E9;
            --social-background-hover: #dddddd;
            --text: #1F2346;
            --white: #FFFFFF;
            --violet: #8e2de2;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-size: 16px;
            font-family: 'Work Sans', sans-serif;
            height: 100vh;
            padding: 1rem;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background: var(--violet);
            background: -webkit-linear-gradient(to right, var(--violet),
                    var(--primary-dark));
            background: linear-gradient(to right, var(--violet),
                    var(--primary-dark));
        }

        .socials-row {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .socials-row img {
            width: 1.5rem;
            height: 1.5rem;
        }

        .socials-row>a {
            padding: 0.5rem;
            border-radius: 10rem;
            width: 100%;
            min-height: 3rem;
            display: flex;
            gap: 0.75rem;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            font-size: 1.1rem;
            color: var(--text);
            padding: 0.5rem;
            background: var(--social-background);
            font-weight: 700;
        }

        .socials-row>a:hover {
            background: var(--social-background-hover);
        }

        .login-welcome-row {
            margin-bottom: 1rem;
            text-align: center;
        }

        .login-welcome-row img {
            height: 100px;
            width: 100px;
        }

        .welcome-message {
            max-width: 24rem;
        }

        .logo {
            height: 4rem;
            margin: 0 auto;
        }

        .logo {
            color: var(--primary);
        }

        .my-form {
            display: flex;
            flex-direction: column;
            justify-content: start;
            position: relative;
            gap: 1rem;
            background: var(--white);
            width: 100%;
            max-width: 32rem;
            padding: 3rem 2rem;
            border-radius: 2rem;
            height: fit-content;
        }

        .my-form__button {
            background: var(--primary);
            color: white;
            white-space: nowrap;
            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 1rem;
            line-height: 3.125rem;
            outline: none;
            font-size: 1.125rem;
            letter-spacing: .025rem;
            text-decoration: none;
            cursor: pointer;
            font-weight: 800;
            min-height: 3.125rem;
            width: 100%;
            border-radius: 10rem;
            transition: all .3s ease;
            -webkit-transition: all .3s ease;
        }

        .my-form__button:hover {
            background: var(--primary-dark);
        }

        /*? input wrapper */
        .input__wrapper {
            position: relative;
            padding: 0.9375rem 0 0;
            margin-bottom: 0.5rem;
        }

        .input__field {
            font-size: 1.5rem;
            color: var(--text);
            padding: 0.375rem 0;
            padding-right: 2rem;
            padding-bottom: 0.5rem;
            line-height: 2rem;
            height: 2rem;
            outline: 0;
            border: 0;
            width: 100%;
            vertical-align: middle;
            padding-bottom: 0.7rem;
            border-bottom: 3px solid var(--secondary);
            background: transparent;
            transition: border-color 0.2s;
        }

        .input__field::placeholder {
            color: transparent;
        }


        .input__label {
            user-select: none;
        }

        .input__field:placeholder-shown~.input__label {
            cursor: text;
            color: var(--text);
            top: 0.8rem;
            font-size: 1.2rem;
        }

        .input__label,
        .input__field:focus~.input__label {
            position: absolute;
            top: -0.8rem;
            display: block;
            font-size: 1.2rem;
            color: var(--text);
            transition: 0.3s;
        }

        .input__field:focus~.input__label {
            color: var(--primary);
        }

        .input__field:focus {
            border-bottom: 3px solid var(--primary);
        }

        .input__field:focus~svg {
            stroke: var(--primary);
        }

        .input__icon {
            position: absolute;
            right: -0.875rem;
            bottom: -0.6875rem;
            width: 2.25rem;
            height: 2.25rem;
            padding: 0.125rem;
            transform: translate(-50%, -50%);
            transform-origin: center;
            cursor: pointer;
        }

        .input__icon:hover {
            border-radius: 50%;
        }

        /* my form actions */

        .my-form__actions {
            display: flex;
            flex-direction: column;
            align-self: center;
            color: var(--secondary);
            gap: 1rem;
            margin-top: 0.5rem;
        }

        .my-form__actions a {
            color: var(--secondary);
            font-weight: 600;
            text-decoration: none;
        }

        .my-form__actions a:hover {
            text-decoration: underline;
        }

        .my-form__row {
            display: flex;
            gap: 0.5rem;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <form class="my-form" action="functions/users/insert.php" method="POST">
        <div class="login-welcome-row">
            <a href="#" title="Logo">
                <img src="assets/img/logo.jpg" alt="Logo" class="logo">
            </a>
            <h1>Welcome&#x1F44F;</h1>
            <p>Please enter your details!</p>
        </div>
        <div class="input__wrapper">
            <input type="text" id="username" name="username" class="input__field" placeholder="Your name" required autocomplete="off">
            <label for="username" class="input__label">Username:</label>
            <svg class="input__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
            </svg>
        </div>
        <div class="input__wrapper">
            <input type="email" id="email" name="email" class="input__field" placeholder="Your Email" required autocomplete="off">
            <label for="email" class="input__label">Email:</label>
            <svg class="input__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
            </svg>
        </div>
        <div class="input__wrapper">
            <input type="text" id="phone" name="phone" class="input__field" placeholder="Your Phone" required autocomplete="off">
            <label for="phone" class="input__label">Phone:</label>
            <svg class="input__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
            </svg>
        </div>
        <div class="input__wrapper">
            <input id="password" type="password" name="password" class="input__field" placeholder="Your Password" title="Minimum 6 characters at least 1 Alphabet and 1 Number" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required autocomplete="off">
            <label for="password" class="input__label">
                Password
            </label>
            <svg class="input__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z"></path>
                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
            </svg>
        </div>
        <button type="submit" class="my-form__button">
            Register
        </button>
        <div class="my-form__actions">
            <div class="my-form__row">
                <span>Have already an account?</span>
                <a href="login.php" title="Login">
                    Login
                </a>
            </div>
        </div>
    </form>
</body>

</html>