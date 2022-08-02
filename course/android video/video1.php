<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta charSet="utf-8" />
    <link rel="shortcut icon" href="https://huntingcoder.me/img/logo-blue.png" type="image/x-icon" />
   
    <title>Creating Our First Android App (with APK) | Android Tutorials in Hindi #2</title>
    <meta name="description" />
    <link rel="icon" href="https://huntingcoder.me/img/logo-blue.png" />
    <meta name="next-head-count" content="7" />
    <meta name="next-font-preconnect" />
    <link rel="preload" href="https://huntingcoder.me/css/c2a8c86eebdcf29d.css" as="style" />
    <link rel="stylesheet" href="https://huntingcoder.me/css/c2a8c86eebdcf29d.css" data-n-g="" />
    <link rel="preload" href="https://huntingcoder.me/css/470c5e8db7cdc7e9.css" as="style" />
    <link rel="stylesheet" href="https://huntingcoder.me/css/470c5e8db7cdc7e9.css" data-n-p="" />
    <link rel="preload" href="https://huntingcoder.me/css/ef46db3751d8e999.css" as="style" />
    <link rel="stylesheet" href="https://huntingcoder.me/css/ef46db3751d8e999.css" data-n-p="" /><noscript data-n-css=""></noscript>

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
                    <a href="/hutningcoder.me/welcome.php">CodeWithAaryan</a>
                </div>
                <div class="flex items-center md:hidden">
                    <div class="text-purple-700 text-md font-semibold">Menu</div><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-purple-700 mt-1"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                        </path>
                    </svg>
                </div><button
                    class="md:hidden text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mx-1 absolute right-3 md:right-12">Login</button>
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
                        <li class="mx-2 my-2 text-black hover:border-b-2 hover:border-purple-700"><a href="/hutningcoder.me/welcome.php">Home</a>
                        </li>
                        <li class="mx-2 my-2 text-black hover:border-b-2 hover:border-purple-700"><a
                                href="/hutningcoder.me/welcomevideo.php">Courses</a></li>

                        <li class="mx-2 my-2 text-black hover:border-b-2 hover:border-purple-700"><a
                                href="/hutningcoder.me/welcomevideo.php">Contact</a></li>
                    </ul>
                    
                </div>
            </div>
            <hr />

            <div class="bg-purple-100 text-center shadow-lg absolute w-full hidden mt-1 md:hidden">
                <ul>
                    <li class="pt-4 text-purple-500 font-bold"><a href="/hutningcoder.me/welcome.php">Home</a></li>
                    <li class="pt-4 text-purple-500 font-bold"><a href="/hutningcoder.me/welcomevideo.php">Courses</a></li>

                    <li class="pt-4 text-purple-500 font-bold pb-5"><a href="/hutningcoder.me/welcomecontact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="Toastify"></div>
        <section class="mx-2 justify-center align-middle">
            <div class="flex flex-wrap lg:-mx-1 xl:-mx-1">
                <div class="w-full border lg:my-1 lg:px-1 lg:w-2/3 xl:my-1 xl:px-1 xl:w-2/3 mx-auto">
                    <div class="h-[30vh] lg:h-[30vh] mx-auto xl:h-[70vh]"><iframe title="YouTube Video"
                            src="https://www.youtube.com/embed/1nWCvEEdgNA" frameBorder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            class="w-full h-full"></iframe></div>
                </div>
                <div class="mx-auto w-full xl:text-lg font-medium pt-3 px-2 rounded-t-lg lg:w-1/3 overflow-x-hidden">
                    <div class="flex items-center font-karla font-medium md:hidden">Show
                        <!-- --> Course Contents
                        <!-- --><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                            class="ml-2 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                            </path>
                        </svg>
                    </div>
                    <div
                        class="my-0 lg:h-[30vh] xl:h-[64vh] w-full lg:my-1 xl:my-1 lg:px-3 transition-all overflow-scroll overflow-x-hidden h-0">
                       <div class="px-2 mt-4 flex lg:px-8 py-2 bg-white rounded-lg shadow-lg"><input type="checkbox"
                            name="" id="" class="mr-2" />
                            <a href="/hutningcoder.me/course/android video/index.php">  <div class="mt-4 cursor-pointer">Installing Android Studio &amp; Setup | Android Tutorials
                            in Hindi #1</div></a>
                    </div>
                   <div class="px-2 mt-4 flex lg:px-8 py-2 bg-white rounded-lg shadow-lg"><input type="checkbox"
                            name="" id="" class="mr-2" />
                            <a href="/hutningcoder.me/course/android video/video1.php"><div class="mt-4 cursor-pointer">Creating Our First Android App (with APK) | Android
                            Tutorials in Hindi #2</div></a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <nav class="mx-2 px-3 tabs flex sm:flex-row overflow-x-scroll lg:overflow-x-hidden"><button
                class="tab active text-gray-600 py-2 px-2 block hover:text-purple-700 focus:outline-none font-medium border-b-2 border-purple-700">Overview</button><button
                class="tab active text-gray-600 py-2 px-2 block hover:text-purple-700 focus:outline-none font-medium false border-purple-700">Q&amp;A</button><button
                class="tab active text-gray-600 py-2 px-2 block hover:text-purple-700 focus:outline-none font-medium false border-purple-700">Downloads</button><button
                class="tab active text-gray-600 py-2 px-2 block hover:text-purple-700 focus:outline-none font-medium false border-purple-700">Announcements</button>
        </nav>
        <div id="panels">
            <div class="lg:w-2/3 mx-4 lg:mx-8 my-2 min-h-screen">
                <h1 class="text-2xl my-4 lg:text-3xl flex font-semibold">Installing Android Studio &amp; Setup | Android
                    Tutorials in Hindi #1
                    <!-- -->
                </h1>
                <div class="cont font-karla text-lg">
                    
                </div>
            </div>
            <div class="flex mx-4 lg:mr-16 my-3 px-3 justify-between lg:w-2/3"><button
                    class="text-white w-20 cursor-pointer justify-center bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mx-1 disabled:bg-gray-200 disabled:text-gray-400 disabled:cursor-default"
                    disabled="/hutningcoder.me/course/android video/index.php"> Previous </button><a href="/course/android video/video1.html"><button
                    class="text-white w-20 cursor-pointer justify-center bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mx-1 disabled:bg-gray-200 disabled:text-gray-400 disabled:cursor-default">
                    Next </button></a></div>
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
                    style="align-items:center"><a href="https://www.facebook.com/CodeWithAaryan353/" target="_blank"
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
        type="application/json">{"props":{"pageProps":{"singleVideo":{"_id":"62becaba78464ef23fb11dde","title":"Installing Android Studio \u0026 Setup | Android Tutorials in Hindi #1","videoId":"InigFUSiPl8","content":"\u003cp\u003eDownload Android Studio by writing \u0026ldquo;download android studio\u0026rdquo; in your browser\u0026rsquo;s search bar. Go to the official android studio website and download android studio!\u003c/p\u003e\n\u003cp\u003eClick on the \u0026nbsp;downloaded android studio in your Downloads folder \u0026nbsp;and install it by following instructions \u0026amp; clicking on \u0026ldquo;Next\u0026rdquo;\u003c/p\u003e\n\u003cp\u003eCreate a new android project by selecting Create New Project \u0026gt; basic activity \u0026gt; name the project \u0026gt; \u0026nbsp;package name \u0026gt; \u0026nbsp;location \u0026gt; \u0026nbsp;language (java/kotlin) \u0026gt; API level(try to use an API which runs on maximum possible phones)\u003c/p\u003e\n\u003cp\u003e\u003cimg style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://api.CodeWithAaryan.com/media/videoSeriesFiles/courseFiles/android-tutorials-in-hindi-1/base64.png\" /\u003e\u003c/p\u003e\n\u003cp\u003eTo be able to zoom in and out using mouse wheel, you will have to activate a setting as mentioned below:-\u003c/p\u003e\n\u003cp\u003eGo to \u0026ldquo;File \u0026gt; Settings \u0026gt; Editor \u0026gt; General and click the checkbox next to \u0026ldquo;change font size with cltr+mouse wheel\u0026rdquo;\u003c/p\u003e\n\u003cp\u003e\u003cimg style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://api.CodeWithAaryan.com/media/videoSeriesFiles/courseFiles/android-tutorials-in-hindi-1/base64_HYorGCN.png\" /\u003e\u003c/p\u003e\n\u003cp\u003e\u0026lt;|AD|\u0026gt;\u003c/p\u003e\n\u003cp\u003e\u003cstrong\u003eTo Create an Emulator for testing your Android app\u003c/strong\u003e:-\u003c/p\u003e\n\u003cp\u003eSelect\u0026nbsp; Tools \u0026gt; AVD\u0026nbsp; manger \u0026gt; Create Virtual Device \u0026gt; Phone/tablet (select the device you want to choose\u0026nbsp; ) \u0026gt; Next \u0026gt; System image (API level) \u0026gt; Finish\u003c/p\u003e\n\u003cp\u003e\u003cimg style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://api.CodeWithAaryan.com/media/videoSeriesFiles/courseFiles/android-tutorials-in-hindi-1/base64_A5XSUT0.png\" /\u003e\u003c/p\u003e\n\u003cp\u003eHere mainly two languages will be used : XML and Java. XML is for designing and Java is for the logic and hence is the brain of the app.\u003c/p\u003e\n\u003cp\u003eCode completion or Auto completion suggests the code while you write it and it is very helpful as it saves a lot of time while coding. There are three types of code completion in Android Studio\u003c/p\u003e\n\u003col\u003e\n\u003cli\u003eBasic completion (auto complets variable name) \u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;Ctrl + Space\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u0026nbsp;\u003c/li\u003e\n\u003cli\u003eSmart completion (auto completes code on the basis of context)\u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp;Ctrl + Shift + Space\u003c/li\u003e\n\u003cli\u003eStatement completion (auto completes brackets , parantheses)\u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp; \u0026nbsp;Ctrl + Shift + Enter\u003c/li\u003e\n\u003c/ol\u003e\n\u003cp\u003e\u003cstrong\u003eDownload Android Studio Here:\u003c/strong\u003e\u003ca href=\"https://developer.android.com/studio\"\u003e https://developer.android.com/studio\u003c/a\u003e\u003c/p\u003e\n\u003cp\u003e\u0026lt;|AD|\u0026gt;\u003c/p\u003e","slug":"android-tutorials-in-hindi-1","announcement":"None","downloads":[],"videoSeries":"62beca60dc0bc3e7145de467","is_published":true,"createdAt":"2022-07-01T10:21:46.641Z","updatedAt":"2022-07-01T10:21:46.641Z","__v":0},"allVideos":[{"_id":"62becaba78464ef23fb11dde","title":"Installing Android Studio \u0026 Setup | Android Tutorials in Hindi #1","slug":"android-tutorials-in-hindi-1"},{"_id":"62becaba78464ef23fb11de0","title":"Creating Our First Android App (with APK) | Android Tutorials in Hindi #2","slug":"android-tutorials-in-hindi-2"},{"_id":"62becaba78464ef23fb11de4","title":"Linear Layout \u0026 Relative Layout In Android | Android Tutorials in Hindi #3","slug":"android-tutorials-in-hindi-3"},{"_id":"62becaba78464ef23fb11de6","title":"Android activity \u0026 Activity Lifecycle | Android Tutorials in Hindi #4","slug":"android-tutorials-in-hindi-4"},{"_id":"62becaba78464ef23fb11de8","title":"Project 1: Tic Tac Toe Game Android Game Development | Android Tutorials in Hindi #5","slug":"android-tutorials-in-hindi-5"},{"_id":"62becabb78464ef23fb11dea","title":"Creating Photo Frame Application In Android: Exercise 1 | Android Tutorials in Hindi #6","slug":"android-tutorials-in-hindi-6"},{"_id":"62becabb78464ef23fb11dec","title":"Creating a Multi Screen Android  Application | Android Tutorials in Hindi #7","slug":"android-tutorials-in-hindi-7"},{"_id":"62becabb78464ef23fb11dee","title":"Creating a Navigation Drawer App with Hamburger Icon In Android | Android Tutorials in Hindi #8","slug":"android-tutorials-in-hindi-8"},{"_id":"62becabb78464ef23fb11df0","title":"Embedding Video with media controls in Android | Android Tutorials in Hindi #9","slug":"android-tutorials-in-hindi-9"},{"_id":"62becabb78464ef23fb11df2","title":"MediaPlayer \u0026 Handling Audio in Android | Android Tutorials in Hindi #10","slug":"android-tutorials-in-hindi-10"},{"_id":"62becabb78464ef23fb11df4","title":"Android SeekBar \u0026 its Methods | Android Tutorials in Hindi #11","slug":"android-tutorials-in-hindi-11"},{"_id":"62becabb78464ef23fb11df6","title":"Dynamic Photo Frame Application In Android Exercise 1: Solution | Android Tutorials in Hindi #12","slug":"android-tutorials-in-hindi-12"},{"_id":"62becabb78464ef23fb11df8","title":"Android ListViews \u0026 Array Adapters | Android Tutorials in Hindi #13","slug":"android-tutorials-in-hindi-13"},{"_id":"62becabb78464ef23fb11dfa","title":"Multiplication Tables Application Project In Android | Android Tutorials in Hindi #14","slug":"android-tutorials-in-hindi-14"},{"_id":"62becabb78464ef23fb11dfc","title":"CountDownTimer, Runnable \u0026 Handler in Android | Android Tutorials in Hindi #15","slug":"android-tutorials-in-hindi-15"},{"_id":"62becabb78464ef23fb11dfe","title":"Performing Tasks in Background in Android | Android Tutorials in Hindi #16","slug":"android-tutorials-in-hindi-16"},{"_id":"62becabb78464ef23fb11e00","title":"What is an API \u0026 how to use API in Android | Android Tutorials in Hindi #17","slug":"android-tutorials-in-hindi-17"},{"_id":"62becabb78464ef23fb11e02","title":"Adding Volley Library dependency \u0026 Fake JSON API | Android Tutorials in Hindi #18","slug":"android-tutorials-in-hindi-18"},{"_id":"62becabb78464ef23fb11e04","title":"Retrieve \u0026 Parse JSON Data from Web URL in Android | Android Tutorials in Hindi #19","slug":"android-tutorials-in-hindi-19"},{"_id":"62becabc78464ef23fb11e06","title":"Multiplication Tables App on Seekbar Change: Exercise 2: Solution | Android Tutorials in Hindi #20","slug":"android-tutorials-in-hindi-20"},{"_id":"62becabc78464ef23fb11e08","title":"Android Exercise 3: Creating a User Display App | Android Tutorials in Hindi #21","slug":"android-tutorials-in-hindi-21"},{"_id":"62becabc78464ef23fb11e0a","title":"Parsing Nested JSON Arrays \u0026 Objects | Android Tutorials in Hindi #22","slug":"android-tutorials-in-hindi-22"},{"_id":"62becabc78464ef23fb11e0c","title":"Shared Preferences: Saving data to Android device | Android Tutorials in Hindi #23","slug":"android-tutorials-in-hindi-23"},{"_id":"62becabc78464ef23fb11e10","title":"Using a Database in Android | Android Tutorials in Hindi #24","slug":"android-tutorials-in-hindi-24"},{"_id":"62becabc78464ef23fb11e12","title":"SQLITE Android CRUD Database in Android | Android Tutorials in Hindi #25","slug":"android-tutorials-in-hindi-25"},{"_id":"62becabc78464ef23fb11e14","title":"SQLite Android CRUD: Adding Contacts to the Database | Android Tutorials in Hindi #26","slug":"android-tutorials-in-hindi-26"},{"_id":"62becabc78464ef23fb11e18","title":"SQLite Android CRUD: Fetching all Contacts | Android Tutorials in Hindi #27","slug":"android-tutorials-in-hindi-27"},{"_id":"62becabc78464ef23fb11e1a","title":"SQLite Android CRUD: Updating Records | Android Tutorials in Hindi #28","slug":"android-tutorials-in-hindi-28"},{"_id":"62becabc78464ef23fb11e1c","title":"SQLite Android CRUD: Deleting Records | Android Tutorials in Hindi #29","slug":"android-tutorials-in-hindi-29"},{"_id":"62becabc78464ef23fb11e1e","title":"SQLite Android CRUD: Deleting Records | Android Tutorials in Hindi #30","slug":"android-tutorials-in-hindi-30"},{"_id":"62becabc78464ef23fb11e20","title":"SQLite Android CRUD: Adding ListView | Android Tutorials in Hindi #31","slug":"android-tutorials-in-hindi-31"},{"_id":"62becabd78464ef23fb11e22","title":"RecyclerView in Android | Android Tutorials in Hindi #32","slug":"android-tutorials-in-hindi-32"},{"_id":"62becabd78464ef23fb11e28","title":"Creating a RecyclerViewAdaper Class | Android Tutorials in Hindi #33","slug":"android-tutorials-in-hindi-33"},{"_id":"62becabd78464ef23fb11e2a","title":"Adding OnClick Listener to RecyclerView | Android Tutorials in Hindi #34","slug":"android-tutorials-in-hindi-34"}]},"__N_SSP":true},"page":"/videos/[slug]","query":{"slug":"android-tutorials-in-hindi-1"},"buildId":"vLcEzdTiYFZur_b-G2z6N","isFallback":false,"gssp":true,"scriptLoader":[]}</script>
</body>

</html>