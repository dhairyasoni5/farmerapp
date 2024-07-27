<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmerApp</title>
    <meta name="description" content="FarmerApp - A platform for farmers and distributors.">
    <meta property="og:title" content="FarmerApp">
    <meta property="og:description" content="A platform for farmers and distributors to manage their produce and stay updated.">
    <meta property="og:image" content="/path/to/image.jpg">
    <meta property="og:url" content="https://example.com">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
    session_start();
    ?>

    <div class="flex flex-col w-full min-h-screen">
        <header class="flex items-center h-16 px-4 border-b shrink-0 md:px-6 bg-[#1e293b] text-white">
            <div class="flex items-center gap-4">
                <img
                    src="/placeholder.svg"
                    alt="Logo"
                    class="h-10 w-10"
                    width="40"
                    height="40"
                    style="aspect-ratio: 40 / 40; object-fit: cover;"
                />
                <h1 class="text-xl font-bold">FarmerApp</h1>
            </div>
            <form class="flex-1 ml-auto sm:flex-initial max-w-[300px]">
                <div class="relative">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground"
                    >
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    <input
                        class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-8 bg-[#334155] text-white placeholder:text-gray-400 focus:bg-[#475569]"
                        placeholder="Search"
                        type="search"
                    />
                </div>
            </form> 
            <nav class="flex items-center gap-6 ml-auto">
                <a class="text-white hover:text-gray-300" href="#">
                    Home
                </a>
                <a class="text-white hover:text-gray-300" href="includes/schemes.php">
                    Govt. Schemes
                </a>
                <a class="text-white hover:text-gray-300" href="#">
                    Rewards
                </a>
                <a class="flex items-center gap-2 text-white hover:text-gray-300" href="includes/profiledetails.php">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="h-4 w-4"
                    >
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    Profile
                </a>
            </nav>
        </header>
        <main class="flex flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10 bg-[#f1f5f9]">
            <section class="p-4 bg-white rounded-md shadow-md">
            <h2 class="text-xl font-bold">
    <?php echo isset($_SESSION['name']) ? "Welcome, " . htmlspecialchars($_SESSION['name']) . " (" . htmlspecialchars($_SESSION['type']) . ")" : "Welcome to FarmerApp"; ?>
</h2>
                <div class="flex items-center justify-center gap-4 mt-4">
                    <button
                        class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:text-accent-foreground h-10 flex items-center gap-2 text-[#4f46e5] hover:bg-[#f1f5f9] px-6 py-3"
                        onclick="window.location.href='includes/SellProduce.html'"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-4 w-4"
                        >
                            <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path>
                            <path d="M15 18H9"></path>
                            <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path>
                            <circle cx="17" cy="18" r="2"></circle>
                            <circle cx="7" cy="18" r="2"></circle>
                        </svg>
                        Sell Produce
                    </button>
                    <button
                        class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:text-accent-foreground h-10 flex items-center gap-2 text-[#4f46e5] hover:bg-[#f1f5f9] px-6 py-3"
                        onclick="window.location.href='includes/submit_crop.php'"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-4 w-4"
                        >
                            <circle cx="8" cy="21" r="1"></circle>
                            <circle cx="19" cy="21" r="1"></circle>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                        </svg>
                        Buy Produce
                    </button>
                </div>
            </section>
            <section
                class="relative w-full h-[300px] bg-cover bg-center"
                style="background-image: url('photos/banner2.jpg');"
            >
                <div class="absolute inset-0 bg-[#1e293b] bg-opacity-50"></div>
            </section>
            <section class="p-4 bg-white rounded-md shadow-md">
                <h2 class="text-xl font-bold">Recent News and Updates</h2>
                <div class="flex items-center gap-4 mt-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="h-6 w-6 text-[#475569]"
                    >
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold">New Agricultural Policy Announced</h3>
                        <p class="text-[#475569]">
                            The government has introduced a new policy aimed at increasing crop yields and supporting farmers with
                            better access to technology and resources.
                        </p>
                        <a class="text-[#4f46e5] hover:text-[#3730a3]" href="#">
                            Read More
                        </a>
                    </div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="h-6 w-6 text-[#475569]"
                    >
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </div>
            </section>
            <section class="p-4 bg-white rounded-md shadow-md">
                <div class="flex items-center gap-4">
                    <span class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full">
                        <img class="aspect-square h-full w-full" alt="User" src="/placeholder.svg?height=40&amp;width=40" />
                    </span>
                    <input
                        class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 flex-1 bg-[#f1f5f9] focus:bg-white"
                        placeholder="Start a post"
                    />
                </div>
                <div class="flex items-center justify-center gap-4 mt-4">
                    <button class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:text-accent-foreground h-10 px-4 py-2 flex items-center gap-2 text-[#4f46e5] hover:bg-[#f1f5f9]">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-4 w-4"
                        >
                            <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                            <circle cx="9" cy="9" r="2"></circle>
                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                        </svg>
                        Photo
                    </button>
                    <button class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:text-accent-foreground h-10 px-4 py-2 flex items-center gap-2 text-[#4f46e5] hover:bg-[#f1f5f9]">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-4 w-4"
                        >
                            <path d="M16 13 21.223 16.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path>
                            <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                        </svg>
                        Video
                    </button>
                    <button class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:text-accent-foreground h-10 px-4 py-2 flex items-center gap-2 text-[#4f46e5] hover:bg-[#f1f5f9]">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-4 w-4"
                        >
                            <path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path>
                            <polyline points="8 10 12 14 16 10"></polyline>
                        </svg>
                        Portfolio
                    </button>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
