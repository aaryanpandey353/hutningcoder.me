<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: ./welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta charSet="utf-8" />
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
    <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9655830461045889"
        crossorigin="anonymous"></script>
    <title>Login | CodeWithAaryan</title>
    <meta name="description"
        content="Welcome to CodeWithAaryan Blogs. Here You will find blogs related to programming as well as modern day technology." />
    <link rel="icon" href="https://huntingcoder.me/img/logo-blue.png" />
    <meta name="next-head-count" content="7" />
    <link rel="preload" href="https://huntingcoder.me/css/c2a8c86eebdcf29d.css" as="style" />
    <link rel="stylesheet" href="https://huntingcoder.me/css/c2a8c86eebdcf29d.css" data-n-g="" />
    <link rel="preload" href="https://huntingcoder.me/css/470c5e8db7cdc7e9.css" as="style" />
    <link rel="stylesheet" href="https://huntingcoder.me/css/470c5e8db7cdc7e9.css" data-n-p="" />
    <link rel="stylesheet" href="https://huntingcoder.me/css/ef46db3751d8e999.css" data-n-p="" /><noscript data-n-css=""></noscript>
    <meta name="google-signin-client_id"
        content="168184360945-33vf37qbu5gkt51nj8c3ldd9rmha16s4.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="/js/login-5a02037ce35052ac.js" defer=""></script>
</head>

<body>
    <div id="__next">
        <div class=""
            style="position:fixed;top:0;left:0;height:2px;background:transparent;z-index:99999999999;width:100%">
            <div class="" style="height:100%;background:purple;transition:all 500ms ease;width:0%">
                <div
                    style="box-shadow:0 0 10px purple, 0 0 10px purple;width:5%;opacity:1;position:absolute;height:100%;transition:all 500ms ease;transform:rotate(3deg) translate(0px, -4px);left:-10rem">
                </div>
            </div>
        </div>
        <div class="w-full z-10 sticky bg-white top-0 border-b border-grey-light shadow-md">
            <div class="w-full flex flex-wrap items-center lg:justify-between mt-0 py-4">
                <div
                    class="px-0 lg:pl-4 flex items-center lg:mx-4 cursor-pointer text-purple-700 text-xl font-bold mx-3">
                    <a href="http://localhost/hutningcoder.me/index.php">CodeWithAaryan</a>
                </div>
                <div class="flex items-center md:hidden">
                    <div class="text-purple-700 text-md font-semibold">Menu</div><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-purple-700 mt-1"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                        </path>
                    </svg>
                </div><a href="http://localhost/hutningcoder.me/login.php"><button
                        class="md:hidden text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mx-1 absolute right-3 md:right-12">Login</button></a>
                <div class="w-full flex-grow lg:flex lg:flex-1 lg:content-center lg:justify-end lg:w-auto h-0 lg:h-auto overflow-hidden mt-2 lg:mt-0 z-20 transition-all"
                    id="nav-content">
                    <ul class="flex items-center flex-col lg:flex-row">
                        <div id="search-toggle" class="search-icon cursor-pointer px-6 hidden"><svg
                                class="fill-current pointer-events-none text-grey-darkest w-4 h-4 inline"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg></div>
                        <li class="mx-2 my-2 text-black hover:border-b-2 hover:border-purple-700"><a href="http://localhost/hutningcoder.me/index.php">Home</a>
                        </li>
                        <li class="mx-2 my-2 text-black hover:border-b-2 hover:border-purple-700"><a
                                href="http://localhost/hutningcoder.me/videos/index.php">Courses</a></li>

                        <li class="mx-2 my-2 text-black hover:border-b-2 hover:border-purple-700"><a
                                href="http://localhost/hutningcoder.me/contact/index.php">Contact</a></li>
                    </ul>
                    <div class="text-center my-2 px-4"><a href="/login/index.html"><button
                                class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mx-1">Login</button></a><a
                            href="http://localhost/hutningcoder.me/register.php"><button
                                class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mx-1">Signup</button></a>
                    </div>
                </div>
            </div>
            <hr />

            <div class="bg-purple-100 text-center shadow-lg absolute w-full hidden mt-1 md:hidden">
                <ul>
                    <li class="pt-4 text-purple-500 font-bold"><a href="http://localhost/hutningcoder.me/index.php">Home</a></li>
                    <li class="pt-4 text-purple-500 font-bold"><a href="http://localhost/hutningcoder.me/videos/index.php">Courses</a></li>

                    <li class="pt-4 text-purple-500 font-bold pb-5"><a href="http://localhost/hutningcoder.me/contact/index.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="md:py-6 md:mt-20">
            <div class="Toastify"></div>
            <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
                <div class="hidden lg:block lg:w-1/2 bg-cover"
                    style="background-image:url(&#x27;https://images.unsplash.com/photo-1546514714-df0ccc50d7bf?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=667&amp;amp;q=80&#x27;)">
                </div>
                <div class="w-full p-8 lg:w-1/2"><img class="mx-auto rounded object-cover h-16"
                        src="https://huntingcoder.me/img/logo-blue.png" />
                    <h2 class="text-2xl font-semibold text-gray-700 text-center">CodeWithAaryan.com</h2>
                    <p class="text-xl text-gray-600 text-center">Welcome back!</p><span
                        class="flex items-center justify-center my-3">
                        </span>
                    <div class="mt-4 flex items-center justify-between"><span
                            class="border-b w-1/5 lg:w-1/4"></span><span
                            class="text-xs text-center text-gray-500 uppercase">or login with email</span><span
                            class="border-b w-1/5 lg:w-1/4"></span></div>
                            <form method="post" action="">

<div class="mt-4"><label class="block text-gray-700 text-sm font-bold mb-2">Email
        Address</label><input name="username" type="email" required
        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
        type="email" /></div>
<div class="mt-4"><label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
    <input name="password" required 
        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
        type="password" />
    <div class="recaptcha mt-8">
        <div></div>
    </div>

</div>

<button id="myButton" class="bg-gray-700 text-white mt-8 font-bold py-2 px-4 w-full rounded hover:bg-gray-600 disabled:opacity-50" type="submit">login</button>
</form>
                    <div class="mt-4 flex items-center justify-between"><span
                            class="border-b w-1/5 md:w-1/4"></span><span class="text-xs text-gray-500 uppercase"><a
                                href="/sign up/index.html"> or Signup</a></span><span
                            class="border-b w-1/5 md:w-1/4"></span></div>
                </div>
            </div>
        </div>
        <footer class="text-gray-600 bg-white body-font ">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <div class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900"><img
                        src="https://huntingcoder.me/img/logo-blue.png" class="rounded h-12" />
                    <div class="ml-3 text-xl">CodeWithAaryan</div>
                </div>
                <p
                    class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 mt-4 md:mt-2 mb-2 md:mb-0 text-center">
                    Copyright © 2022 CodeWithAaryan.com</p>
                <div class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start"
                    style="align-items:center"><a href="https://www.facebook.com/CodeWithAaryan353" target="_blank"
                        rel="noreferrer" class="text-gray-500"><svg fill="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg></a><a href="https://twitter.com/AaryanCode" target="_blank" rel="noreferrer"
                        class="ml-3 text-gray-500"><svg fill="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg></a><a href="https://www.instagram.com/code_with_aaryan/" target="_blank" rel="noreferrer"
                        class="ml-3 text-gray-500"><svg fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg></a><a href="https://github.com/CodeAaryan" target="_blank" rel="noreferrer"
                        class="ml-3 text-gray-500"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 1024 1024" class="text-xl" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0 1 38.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z">
                            </path>
                        </svg></a></div>
            </div>
        </footer>
    </div>
    <script id="__NEXT_DATA__"
        type="application/json">{"props":{"pageProps":{}},"page":"/login","query":{},"buildId":"vLcEzdTiYFZur_b-G2z6N","nextExport":true,"autoExport":true,"isFallback":false,"scriptLoader":[]}</script>
</body>

</html>
