<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBlog  | Modern Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header/Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 md:py-0  flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <a href="./index.html" class="flex items-center space-x-2">
                    <i class="fas fa-blog text-2xl text-blue-600"></i>
                    <h1 class="text-2xl font-bold text-gray-800">I<span class="text-blue-600">Blog</span></h1>
                </a>
            </div>

            <nav class="hidden md:flex space-x-8 items-center">
                <a href="./index.html" class="text-blue-600 font-medium">Home</a>
                <!-- Categories Dropdown -->
                <div class="relative desktop-dropdown">
                    <button class="text-gray-600 hover:text-blue-600 py-4 transition flex items-center">
                        Categories
                        <i class="fas fa-chevron-down ml-1 text-sm"></i>
                    </button>
                    <div class="absolute left-0 w-64 bg-white rounded-md shadow-lg hidden z-50 desktop-dropdown-menu">
                        <div class="py-2">
                            <div class="relative desktop-dropdown-sub">
                                <button class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition flex justify-between items-center w-full text-left">
                                    Web Development
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </button>
                                <div class="absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg hidden desktop-dropdown-submenu">
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Frontend</a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Backend</a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Full Stack</a>
                                </div>
                            </div>
                            <div class="relative desktop-dropdown-sub">
                                <button class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition flex justify-between items-center w-full text-left">
                                    Artificial Intelligence
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </button>
                                <div class="absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg hidden desktop-dropdown-submenu">
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Machine Learning</a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Deep Learning</a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">NLP</a>
                                </div>
                            </div>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Cloud Computing</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Cybersecurity</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">Mobile Development</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">DevOps</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">About</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">Contact</a>
            </nav>

            <div class="flex items-center space-x-4">
                <button class="md:hidden text-gray-600" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <a href="./login.html" class="hidden md:block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                    Login
                </a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <div class="container mx-auto px-4 py-4">
                <a href="#" class="block py-2 text-blue-600 font-medium">Home</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Articles</a>
                <div class="relative">
                    <button class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-toggle">
                        Categories
                        <i class="fas fa-chevron-down ml-1 text-sm"></i>
                    </button>
                    <div id="mobile-categories" class="hidden pl-4 mobile-dropdown-menu">
                        <div class="py-1">
                            <div class="relative">
                                <button class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                                    Web Development
                                    <i class="fas fa-chevron-down ml-1 text-sm"></i>
                                </button>
                                <div id="mobile-webdev-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Frontend</a>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Backend</a>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Full Stack</a>
                                </div>
                            </div>
                            <div class="relative">
                                <button class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                                    Artificial Intelligence
                                    <i class="fas fa-chevron-down ml-1 text-sm"></i>
                                </button>
                                <div id="mobile-ai-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Machine Learning</a>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Deep Learning</a>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">NLP</a>
                                </div>
                            </div>
                            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Cloud Computing</a>
                            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Cybersecurity</a>
                            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Mobile Development</a>
                            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">DevOps</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">About</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Welcome to IBlog</h2>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Discover the latest in technology, programming, and digital innovation</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <input type="text" placeholder="Search articles..." class="px-4 py-3 rounded-md text-gray-800 w-full sm:w-96">
                <button class="bg-white text-blue-600 px-6 py-3 rounded-md font-medium hover:bg-gray-100 transition">
                    <i class="fas fa-search mr-2"></i> Search
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Posts -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-2">Featured Posts</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Featured Post 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://placehold.co/480x200/png" alt="Web Development" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Web Development</span>
                            <span class="mx-2">•</span>
                            <span>May 15, 2023</span>
                            <span class="mx-2">•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">The Future of Web Development in 2023</h3>
                        <p class="text-gray-600 mb-4">Explore the latest trends and technologies shaping the future of web development this year.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </div>

                <!-- Featured Post 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://placehold.co/480x200/png" alt="Artificial Intelligence" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Artificial Intelligence</span>
                            <span class="mx-2">•</span>
                            <span>June 2, 2023</span>
                            <span class="mx-2">•</span>
                            <span>8 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Getting Started with AI and Machine Learning</h3>
                        <p class="text-gray-600 mb-4">A beginner's guide to understanding and implementing AI and machine learning concepts.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </div>

                <!-- Featured Post 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://placehold.co/480x200/png" alt="Cloud Computing" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Cloud Computing</span>
                            <span class="mx-2">•</span>
                            <span>June 10, 2023</span>
                            <span class="mx-2">•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Cloud Computing: Best Practices for 2023</h3>
                        <p class="text-gray-600 mb-4">Learn the most effective strategies for leveraging cloud computing in your projects.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Recent Articles -->
        <main class="lg:w-2/3">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-2">Recent Articles</h2>
            <div class="space-y-8">
                <!-- Recent Post 1 -->
                <article class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="React 18" class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Web Development</span>
                            <span class="mx-2">•</span>
                            <span>July 5, 2023</span>
                            <span class="mx-2">•</span>
                            <span>7 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">React 18: What's New and Improved</h3>
                        <p class="text-gray-600 mb-4">Discover the exciting new features and improvements in React 18 and how they can benefit your projects.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </article>

                <!-- Recent Post 2 -->
                <article class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="Cybersecurity" class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Cybersecurity</span>
                            <span class="mx-2">•</span>
                            <span>July 12, 2023</span>
                            <span class="mx-2">•</span>
                            <span>10 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Cybersecurity Essentials for Developers</h3>
                        <p class="text-gray-600 mb-4">Key security practices every developer should implement to protect their applications and users.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </article>

                <!-- Recent Post 3 -->
                <article class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition flex flex-col md:flex-row">
                    <img src="https://placehold.co/480x200/png" alt="Low-Code Development" class="md:w-1/3 h-48 md:h-auto object-cover">
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Development</span>
                            <span class="mx-2">•</span>
                            <span>July 18, 2023</span>
                            <span class="mx-2">•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">The Rise of Low-Code Development Platforms</h3>
                        <p class="text-gray-600 mb-4">How low-code platforms are changing the software development landscape and who should use them.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </article>
            </div>

            <div class="mt-8 flex justify-center">
                <button class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition">
                    Browse All Articles
                </button>
            </div>
        </main>

        <!-- Sidebar -->
        <aside class="lg:w-1/3 space-y-8">
            <!-- About Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">About The Blog</h3>
                <p class="text-gray-600 mb-4">IBlog brings you the latest news, tutorials, and thought pieces on technology, programming, AI, and the digital world.</p>
                <button class="text-blue-600 font-medium hover:text-blue-800 transition">
                    Read More <i class="fas fa-arrow-right ml-1"></i>
                </button>
            </div>

            <!-- Categories Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Categories</h3>
                <div class="space-y-2">
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Web Development</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">12</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Artificial Intelligence</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">8</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Cloud Computing</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">5</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Cybersecurity</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">7</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">Mobile Development</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">6</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-2 hover:bg-gray-100 rounded-md transition">
                        <span class="text-gray-700">DevOps</span>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">4</span>
                    </a>
                </div>
            </div>

            <!-- Newsletter Widget -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Newsletter</h3>
                <p class="text-gray-600 mb-4">Subscribe to get the latest posts delivered to your inbox.</p>
                <form class="space-y-4">
                    <input type="email" placeholder="Your email address" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
                        Subscribe
                    </button>
                </form>
            </div>
        </aside>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <a href="./index.html" class="flex items-center space-x-2">
                            <i class="fas fa-blog text-2xl text-blue-400"></i>
                            <h3 class="text-2xl font-bold">I<span class="text-blue-400">Blog</span></h3>
                        </a>
                    </div>
                    <p class="text-gray-400">Bringing you the latest in technology and digital innovation since 2025.</p>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Categories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">About Us</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Web Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Artificial Intelligence</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Cloud Computing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Cybersecurity</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition text-xl"><i class="fab fa-github"></i></a>
                    </div>
                    <p class="text-gray-400">contact@iblog.com</p>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2025 IBlog. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="./js/script.js"></script>
</body>
</html>
