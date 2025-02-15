<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

</body>

</html>
<div class="topbar">
    <div class="prev-next-buttons">
        <button type="button" class="fa fas fa-chevron-left"></button>
        <button type="button" class="fa fas fa-chevron-right"></button>
    </div>
    <div class="navbar">
        <ul>
            <li>
                <a href="#">Premium</a>
            </li>
            <li>
                <a href="#">Support</a>
            </li>
            <li>
                <a href="#">Download</a>
            </li>
            <li class="divider">|</li>

            <?php if (!isset($_SESSION['email'])): ?>
            <li>
                <a href="<?php echo URLROOT; ?>/pages/signup">Sign Up</a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/pages/login">
                    <button type="button">Log In</button>
                </a>
            </li>
            <?php else: ?>
            <li class="">
                <button class="bg-rose-500 text-white rounded-md px-4 py-2transition"
                    onclick="openModal('modelConfirm')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16" fill="none">
                        <g clip-path="url(#clip0_13_2)">
                            <path
                                d="M16 7.992C16 3.58 12.416 0 8 0C3.584 0 0 3.58 0 7.992C0 10.422 1.104 12.612 2.832 14.082C2.848 14.098 2.864 14.098 2.864 14.114C3.008 14.226 3.152 14.338 3.312 14.45C3.392 14.498 3.456 14.561 3.536 14.625C4.85807 15.5214 6.41871 16.0004 8.016 16C9.61329 16.0004 11.1739 15.5214 12.496 14.625C12.576 14.577 12.64 14.514 12.72 14.465C12.864 14.354 13.024 14.242 13.168 14.13C13.184 14.114 13.2 14.114 13.2 14.098C14.896 12.611 16 10.422 16 7.992ZM8 14.993C6.496 14.993 5.12 14.513 3.984 13.714C4 13.586 4.032 13.459 4.064 13.331C4.15934 12.9841 4.29917 12.651 4.48 12.34C4.656 12.036 4.864 11.764 5.12 11.524C5.36 11.284 5.648 11.061 5.936 10.885C6.24 10.709 6.56 10.581 6.912 10.485C7.26674 10.3894 7.6326 10.3413 8 10.342C9.09065 10.3343 10.1412 10.7526 10.928 11.508C11.296 11.876 11.584 12.308 11.792 12.803C11.904 13.091 11.984 13.395 12.032 13.714C10.8512 14.5442 9.44343 14.9907 8 14.993ZM5.552 7.593C5.41102 7.27022 5.34013 6.9212 5.344 6.569C5.344 6.218 5.408 5.866 5.552 5.546C5.696 5.226 5.888 4.939 6.128 4.699C6.368 4.459 6.656 4.268 6.976 4.124C7.296 3.98 7.648 3.916 8 3.916C8.368 3.916 8.704 3.98 9.024 4.124C9.344 4.268 9.632 4.46 9.872 4.699C10.112 4.939 10.304 5.227 10.448 5.546C10.592 5.866 10.656 6.218 10.656 6.569C10.656 6.937 10.592 7.273 10.448 7.592C10.309 7.90727 10.1138 8.19461 9.872 8.44C9.62653 8.68149 9.33919 8.87633 9.024 9.015C8.36283 9.28671 7.62117 9.28671 6.96 9.015C6.64481 8.87633 6.35747 8.68149 6.112 8.44C5.86981 8.19819 5.67929 7.91068 5.552 7.593ZM12.976 12.899C12.976 12.867 12.96 12.851 12.96 12.819C12.8026 12.3184 12.5707 11.8444 12.272 11.413C11.973 10.9784 11.6056 10.5951 11.184 10.278C10.862 10.0358 10.513 9.83175 10.144 9.67C10.3119 9.55925 10.4674 9.43085 10.608 9.287C10.8465 9.0515 11.056 8.7883 11.232 8.503C11.5864 7.92081 11.7694 7.25049 11.76 6.569C11.7649 6.06451 11.667 5.56432 11.472 5.099C11.2795 4.65064 11.0025 4.24356 10.656 3.9C10.31 3.56003 9.90288 3.28859 9.456 3.1C8.98991 2.90539 8.48906 2.80774 7.984 2.813C7.47887 2.80806 6.97802 2.90605 6.512 3.101C6.06125 3.28919 5.65311 3.56638 5.312 3.916C4.97204 4.26159 4.70059 4.66842 4.512 5.115C4.31705 5.58032 4.21905 6.08051 4.224 6.585C4.224 6.937 4.272 7.273 4.368 7.592C4.464 7.928 4.592 8.232 4.768 8.519C4.928 8.807 5.152 9.063 5.392 9.303C5.536 9.447 5.696 9.574 5.872 9.686C5.50184 9.85206 5.15272 10.0615 4.832 10.31C4.416 10.63 4.048 11.013 3.744 11.429C3.44226 11.8586 3.21008 12.3331 3.056 12.835C3.04 12.867 3.04 12.899 3.04 12.915C1.776 11.636 0.992 9.91 0.992 7.992C0.992 4.14 4.144 0.991 8 0.991C11.856 0.991 15.008 4.14 15.008 7.992C15.0059 9.83196 14.2753 11.5962 12.976 12.899Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_13_2">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg></button>


            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/Users/logout">Logout</a>

            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>


<div id="modelConfirm" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
    <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">

        <div class="flex justify-end p-2">
            <button onclick="closeModal('modelConfirm')" type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div class="p-6 pt-0 text-center">
            <h1 class="text-3xl font-semibold mb-2">
                Hello, <?php echo $_SESSION["username"]; ?>
            </h1>
            <p class="text-gray-600">Here's some information about your account:</p>

            <div class="mt-4">
                <label for="email" class="text-sm font-medium text-gray-500">Email:</label>
                <p class="text-lg font-semibold"><?php echo $_SESSION["email"]; ?></p>
            </div>

            <div class="mt-6">
                <a href="#" onclick="closeModal('modelConfirm')"
                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-4 py-2.5 text-center mr-4">
                    Delete Account
                </a>

                <a href="#" onclick="closeModal('modelConfirm')"
                    class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-4 py-2.5 text-center"
                    data-modal-toggle="change-password-modal">
                    Change Password
                </a>
            </div>
        </div>


    </div>
</div>

<script type="text/javascript">
window.openModal = function(modalId) {
    document.getElementById(modalId).style.display = 'block'
    document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
}

window.closeModal = function(modalId) {
    document.getElementById(modalId).style.display = 'none'
    document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
}

// Close all modals when press ESC
document.onkeydown = function(event) {
    event = event || window.event;
    if (event.keyCode === 27) {
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
        let modals = document.getElementsByClassName('modal');
        Array.prototype.slice.call(modals).forEach(i => {
            i.style.display = 'none'
        })
    }
};
</script>