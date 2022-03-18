<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css">
        <script src="https://kit.fontawesome.com/d70a89f18c.js" crossorigin="anonymous"></script>
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        @yield('cssSpe')
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            header {
                background: rgb(255 207 0);
            }
            .nav-top{
                font-size: x-large;
                font-weight: bold;
                color: black;
                width: calc(100% - 107px);
                justify-content: space-between;
                align-items: center;
                padding-left: revert;
            }
            footer {
                background: rgb(3 103 166);
                color: black;
            }
        </style>
    </head>
    <body class="antialiased">
        <header>
            <div class="container d-flex flex-wrap py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 text-dark text-decoration-none">
                    <svg width="107" height="64" viewBox="0 0 214 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M212.338 72.1187V45.2927C212.338 42.8802 211.971 40.7037 211.237 38.7632C210.555 36.7703 209.296 35.0658 207.46 33.6498C205.677 32.2338 203.186 31.1324 199.987 30.3457C196.84 29.559 192.828 29.1657 187.951 29.1657C183.073 29.1657 179.035 29.559 175.836 30.3457C172.637 31.1324 170.119 32.2338 168.284 33.6498C166.5 35.0658 165.242 36.7703 164.507 38.7632C163.826 40.7037 163.485 42.8802 163.485 45.2927V72.1187C163.485 74.5312 163.826 78.2829 164.507 80.2758C165.242 82.2163 166.5 83.8946 168.284 85.3106C170.119 86.6742 172.637 87.7494 175.836 88.536C179.035 89.3227 183.073 89.7161 187.951 89.7161C192.828 89.7161 196.84 89.3227 199.987 88.536C203.186 87.7494 205.677 86.6742 207.46 85.3106C209.296 83.8946 210.555 82.2163 211.237 80.2758C211.971 78.2829 212.338 74.5312 212.338 72.1187ZM181.343 69.2866V49.1737C181.343 48.1772 181.736 47.3381 182.523 46.6563C183.309 45.9221 185.119 45.555 187.951 45.555C190.783 45.555 192.592 45.9221 193.379 46.6563C194.165 47.3381 194.559 48.1772 194.559 49.1737V69.2866C194.559 70.3356 194.165 71.2271 193.379 71.9614C192.592 72.6432 190.783 72.9841 187.951 72.9841C185.119 72.9841 183.309 72.6432 182.523 71.9614C181.736 71.2271 181.343 70.3356 181.343 69.2866Z" fill="#038C25"/>
                        <path d="M198.265 93.3592C196.43 94.9326 193.86 96.1388 190.556 96.978C187.252 97.8696 183.003 98.3153 177.811 98.3153C172.672 98.3153 168.45 97.7647 165.146 96.6633C161.894 95.6144 159.324 94.1984 157.436 92.4152C155.601 90.632 154.316 88.5867 153.581 86.2791C152.9 83.9714 152.559 81.5852 152.559 79.1202V54.6543C152.559 52.2418 152.9 50.0129 153.581 47.9675C154.263 45.8696 155.496 44.0865 157.279 42.618L167.506 34.1218C169.341 32.5484 171.885 31.3422 175.137 30.503C178.441 29.6115 182.715 29.1657 187.96 29.1657C193.099 29.1657 197.295 29.5852 200.547 30.4244C203.851 31.2635 206.42 32.4435 208.256 33.9645C210.144 35.4329 211.429 37.2161 212.111 39.3139C212.793 41.3593 213.134 43.6145 213.134 46.0794V72.9054C213.134 75.3179 212.793 77.5468 212.111 79.5922C211.429 81.6376 210.197 83.3945 208.413 84.863L198.265 93.3592ZM212.347 72.9054V46.0794C212.347 43.6669 211.98 41.4904 211.245 39.5499C210.564 37.557 209.305 35.8525 207.469 34.4365C205.686 33.0204 203.195 31.9191 199.996 31.1324C196.849 30.3457 192.837 29.9524 187.96 29.9524C183.082 29.9524 179.044 30.3457 175.845 31.1324C172.645 31.9191 170.128 33.0204 168.292 34.4365C166.509 35.8525 165.251 37.557 164.516 39.5499C163.835 41.4904 163.494 43.6669 163.494 46.0794V72.9054C163.494 75.3179 163.835 77.5206 164.516 79.5136C165.251 81.4541 166.509 83.1323 168.292 84.5483C170.128 85.9119 172.645 86.9871 175.845 87.7738C179.044 88.5604 183.082 88.9538 187.96 88.9538C192.837 88.9538 196.849 88.5604 199.996 87.7738C203.195 86.9871 205.686 85.9119 207.469 84.5483C209.305 83.1323 210.564 81.4541 211.245 79.5136C211.98 77.5206 212.347 75.3179 212.347 72.9054ZM203.772 71.096C203.772 74.2428 202.644 76.8126 200.389 78.8055C198.134 80.746 193.938 81.7163 187.802 81.7163C181.666 81.7163 177.497 80.746 175.294 78.8055C173.091 76.8126 171.99 74.2428 171.99 71.096V47.8888C171.99 44.7421 173.091 42.1984 175.294 40.2579C177.497 38.265 181.666 37.2685 187.802 37.2685C193.938 37.2685 198.134 38.265 200.389 40.2579C202.644 42.1984 203.772 44.7421 203.772 47.8888V71.096ZM172.777 71.096C172.777 74.033 173.825 76.4193 175.923 78.2549C178.021 80.038 181.981 80.9296 187.802 80.9296C193.624 80.9296 197.61 80.038 199.76 78.2549C201.91 76.4193 202.985 74.033 202.985 71.096V47.8888C202.985 44.9518 201.91 42.5918 199.76 40.8086C197.61 38.973 193.624 38.0552 187.802 38.0552C181.981 38.0552 178.021 38.973 175.923 40.8086C173.825 42.5918 172.777 44.9518 172.777 47.8888V71.096ZM181.351 70.0733V48.9115C181.351 47.915 181.745 47.0759 182.531 46.3941C183.318 45.6599 185.127 45.2927 187.96 45.2927C190.792 45.2927 192.601 45.6599 193.388 46.3941C194.174 47.0759 194.568 47.915 194.568 48.9115V70.0733C194.568 71.1222 194.174 72.0138 193.388 72.7481C192.601 73.4299 190.792 73.7708 187.96 73.7708C185.127 73.7708 183.318 73.4299 182.531 72.7481C181.745 72.0138 181.351 71.1222 181.351 70.0733ZM182.138 70.0733C182.138 70.5978 182.243 71.0698 182.453 71.4894C182.663 71.8565 183.056 72.1712 183.633 72.4334V57.4864C183.633 56.9619 183.528 56.5161 183.318 56.149C183.108 55.7294 182.715 55.4148 182.138 55.205V70.0733Z" fill="black"/>
                        <path d="M155.242 88.6187C156.265 88.6187 156.992 88.4033 157.422 87.9725C157.907 87.4879 158.149 86.7341 158.149 85.7111V59.453C158.149 58.43 157.907 57.7031 157.422 57.2723C156.992 56.7877 156.265 56.5454 155.242 56.5454H142.723C141.7 56.5454 140.946 56.7877 140.461 57.2723C140.031 57.7031 139.815 58.43 139.815 59.453V72.0526H131.981C130.743 72.0526 129.8 71.7295 129.154 71.0834C128.562 70.4372 128.266 69.4411 128.266 68.095V51.0354C128.266 49.6893 128.67 48.6931 129.477 48.047C130.285 47.347 131.523 46.997 133.193 46.997H149.992C151.015 46.997 151.006 46.4227 151.437 45.9919C151.921 45.5074 152.9 44.7715 152.9 43.7484V32.0732C152.9 31.0502 152.657 30.3233 152.173 29.8925C151.742 29.4079 151.015 29.1656 149.992 29.1656H129.8C123.07 29.1656 118.062 30.5117 114.778 33.2039C111.547 35.8962 109.932 40.0422 109.932 45.642L109.573 71.5141C109.573 77.1139 111.188 82.5612 114.419 85.2534C117.703 87.9456 123.07 88.6187 129.8 88.6187H155.242Z" fill="#F25C05"/>
                        <path d="M144.832 97.7363H119.391C112.337 97.7363 107.114 95.9056 103.722 92.2442C100.384 88.5828 98.7145 83.8445 98.7145 78.0293V55.2532C98.7145 52.2918 99.1452 49.7342 100.007 47.5804C100.868 45.4266 102.134 43.6229 103.803 42.1691L114.222 33.3655C115.891 31.9656 118.018 30.9156 120.602 30.2156C123.241 29.5157 126.31 29.1657 129.81 29.1657H150.001C151.293 29.1657 152.236 29.4618 152.828 30.0541C153.42 30.6464 153.716 31.5887 153.716 32.8809V42.6537C153.716 43.3536 153.609 43.9459 153.393 44.4305C153.232 44.9151 152.963 45.319 152.586 45.642L142.086 54.3648C141.871 54.5802 141.521 54.7686 141.036 54.9302C140.605 55.0917 140.121 55.1725 139.582 55.1725H129.083V66.8028C129.136 66.6951 129.217 66.5874 129.325 66.4798C129.486 66.3182 129.621 66.1836 129.729 66.0759L140.148 57.2724C140.417 57.057 140.767 56.8955 141.198 56.7878C141.682 56.6263 142.194 56.5455 142.732 56.5455H155.251C156.543 56.5455 157.485 56.8416 158.078 57.4339C158.67 58.0262 158.966 58.9685 158.966 60.2607V85.2176C158.966 85.9175 158.859 86.5098 158.643 86.9944C158.482 87.479 158.212 87.8828 157.835 88.2059L147.336 96.9287C147.12 97.1441 146.77 97.3325 146.286 97.494C145.855 97.6556 145.371 97.7363 144.832 97.7363ZM155.251 88.1251C156.274 88.1251 157.001 87.9098 157.432 87.479C157.916 86.9944 158.159 86.2406 158.159 85.2176V60.2607C158.159 59.2377 157.916 58.5108 157.432 58.08C157.001 57.5954 156.274 57.3531 155.251 57.3531H142.732C141.709 57.3531 140.955 57.5954 140.471 58.08C140.04 58.5108 139.825 59.2377 139.825 60.2607V72.8603H131.99C130.752 72.8603 129.81 72.5372 129.163 71.8911C128.571 71.245 128.275 70.2488 128.275 68.9027V49.5996C128.275 48.2535 128.679 47.2574 129.486 46.6112C130.294 45.9112 131.533 45.5613 133.202 45.5613H150.001C151.024 45.5613 151.751 45.3459 152.182 44.9151C152.666 44.4305 152.909 43.6767 152.909 42.6537V32.8809C152.909 31.8579 152.666 31.131 152.182 30.7002C151.751 30.2156 151.024 29.9733 150.001 29.9733H129.81C123.079 29.9733 118.071 31.3194 114.787 34.0117C111.556 36.7039 109.941 40.8499 109.941 46.4497V71.6488C109.941 77.2486 111.556 81.3946 114.787 84.0868C118.071 86.779 123.079 88.1251 129.81 88.1251H155.251ZM133.282 80.8562C130.321 80.8562 127.898 80.6677 126.014 80.2908C124.129 79.9139 122.648 79.3216 121.571 78.5139C120.494 77.6524 119.741 76.5756 119.31 75.2833C118.933 73.9372 118.745 72.3219 118.745 70.4373V47.8227C118.745 43.9998 119.606 41.2806 121.329 39.6653C123.052 38.05 126.498 37.2423 131.667 37.2423H145.64V38.05H131.667C126.929 38.05 123.725 38.8038 122.056 40.3114C120.387 41.7652 119.552 44.269 119.552 47.8227V70.4373C119.552 73.9372 120.468 76.414 122.298 77.8678C124.183 79.3216 127.844 80.0485 133.282 80.0485H148.547V64.6221H149.355V80.8562H133.282Z" fill="black"/>
                        <path d="M104.323 88.6187C103.892 89.0495 104.224 89.561 103.201 89.561H65.7252C64.7022 89.561 63.9484 89.3456 63.4638 88.9149C63.033 88.4303 62.1625 87.6764 62.1625 86.6534V32.0733C62.1625 31.0502 63.033 30.3233 63.4638 29.8926C63.9484 29.408 64.7022 29.1657 65.7252 29.1657H103.201C104.224 29.1657 104.951 29.408 105.382 29.8926C105.866 30.3233 106.566 31.0502 106.566 32.0733V42.6267C106.566 43.6498 105.866 44.4036 105.382 44.8882C104.951 45.319 104.224 45.5343 103.201 45.5343H81.3205V50.6495H96.6587C97.6818 50.6495 98.4087 50.8918 98.8394 51.3764C99.324 51.8072 99.5663 52.5341 99.5663 53.5571V64.4426C99.5663 65.4657 99.1984 65.699 98.7138 66.1836C98.283 66.6144 97.6818 67.3502 96.6587 67.3502L81.8875 67.3054V72.0078L103.201 72.0526C104.224 72.0526 104.951 72.2949 105.382 72.7795C105.866 73.2103 106.566 73.9372 106.566 74.9602V86.6534C106.566 87.6764 104.807 88.1341 104.323 88.6187Z" fill="#0367A6"/>
                        <path d="M92.7916 97.7363H55.316C54.0237 97.7363 53.0814 97.4402 52.4891 96.8479C51.8969 96.2556 51.6007 95.3134 51.6007 94.0211V41.6845C51.6007 40.9845 51.6815 40.3922 51.843 39.9076C52.0584 39.423 52.3545 39.0192 52.7314 38.6961L63.1503 29.8926C63.4195 29.6772 63.7695 29.5157 64.2003 29.408C64.6849 29.2464 65.1964 29.1657 65.7348 29.1657H103.21C104.503 29.1657 105.445 29.4618 106.037 30.0541C106.63 30.6464 106.926 31.5887 106.926 32.8809V42.3306C106.926 43.0306 106.818 43.6229 106.603 44.1075C106.441 44.5921 106.172 44.9959 105.795 45.319L98.849 51.0534C99.3875 51.3226 99.7644 51.7264 99.9798 52.2649C100.249 52.8033 100.384 53.5033 100.384 54.3648V63.0068C100.384 63.7068 100.276 64.2991 100.061 64.7837C99.899 65.2683 99.6298 65.6721 99.2529 65.9952L92.0647 72.0526H103.21C104.503 72.0526 105.445 72.3488 106.037 72.9411C106.63 73.5334 106.926 74.4756 106.926 75.7679V85.2176C106.926 85.9175 106.818 86.5098 106.603 86.9944C106.441 87.479 106.172 87.8828 105.795 88.2059L95.2953 96.9287C95.0799 97.1441 94.73 97.3325 94.2454 97.494C93.8146 97.6556 93.33 97.7363 92.7916 97.7363ZM103.21 88.1251C104.233 88.1251 104.96 87.9098 105.391 87.479C105.876 86.9944 106.118 86.2406 106.118 85.2176V75.7679C106.118 74.7448 105.876 74.0179 105.391 73.5872C104.96 73.1026 104.233 72.8603 103.21 72.8603H80.9189V65.9144H96.6684C97.6914 65.9144 98.4183 65.699 98.849 65.2683C99.3336 64.7837 99.5759 64.0298 99.5759 63.0068V54.3648C99.5759 53.3418 99.3336 52.6149 98.849 52.1841C98.4183 51.6995 97.6914 51.4572 96.6684 51.4572H80.9189V45.2382H103.21C104.233 45.2382 104.96 45.0228 105.391 44.5921C105.876 44.1075 106.118 43.3536 106.118 42.3306V32.8809C106.118 31.8579 105.876 31.131 105.391 30.7002C104.96 30.2156 104.233 29.9733 103.21 29.9733H65.7348C64.7118 29.9733 63.958 30.2156 63.4734 30.7002C63.0426 31.131 62.8272 31.8579 62.8272 32.8809V85.2176C62.8272 86.2406 63.0426 86.9944 63.4734 87.479C63.958 87.9098 64.7118 88.1251 65.7348 88.1251H103.21ZM98.849 80.0485V80.8562H71.6308V37.2423H98.849V38.05H72.4384V58.3223H92.307V59.13H72.4384V80.0485H98.849Z" fill="black"/>
                        <path d="M55.2353 89.561C56.2584 89.561 56.7789 89.0495 57.2096 88.6187C57.6942 88.1341 58.1429 87.6764 58.1429 86.6534V58.9685C58.1429 57.9454 57.9006 57.2185 57.416 56.7878C56.9853 56.3032 56.2584 56.0609 55.2353 56.0609H43.5242C42.5012 56.0609 41.7473 56.3032 41.2628 56.7878C40.832 57.2185 40.6166 57.9454 40.6166 58.9685V72.0526H29.5516V32.0733C29.5516 31.0502 29.3093 30.3233 28.8247 29.8926C28.394 29.408 27.6671 29.1657 26.644 29.1657H14.1252C13.1022 29.1657 12.3484 29.408 11.8638 29.8926C11.433 30.3233 11.2177 31.0502 11.2177 32.0733V86.6534C11.2177 87.6764 11.433 88.4303 11.8638 88.9149C12.3484 89.3456 13.1022 89.561 14.1252 89.561H55.2353Z" fill="#FFCF00"/>
                        <path d="M44.8253 97.7363H3.71525C2.42299 97.7363 1.48072 97.4402 0.88843 96.8479C0.296143 96.2556 0 95.3134 0 94.0211V41.6845C0 40.9845 0.0807664 40.3922 0.242299 39.9076C0.457676 39.423 0.75382 39.0192 1.13073 38.6961L11.5496 29.8926C11.8188 29.6772 12.1688 29.5157 12.5996 29.408C13.0842 29.2464 13.5957 29.1657 14.1341 29.1657H26.6529C27.9452 29.1657 28.8874 29.4618 29.4797 30.0541C30.072 30.6464 30.3682 31.5887 30.3682 32.8809V65.7529L30.5297 65.5913L40.9486 56.7878C41.2178 56.5724 41.5678 56.4109 41.9985 56.3032C42.4831 56.1417 42.9946 56.0609 43.5331 56.0609H55.2442C56.5365 56.0609 57.4787 56.357 58.071 56.9493C58.6633 57.5416 58.9595 58.4839 58.9595 59.7761V85.2176C58.9595 85.9175 58.8518 86.5098 58.6364 86.9944C58.4749 87.479 58.2056 87.8828 57.8287 88.2059L47.3291 96.9287C47.1137 97.1441 46.7637 97.3325 46.2791 97.494C45.8484 97.6556 45.3638 97.7363 44.8253 97.7363ZM55.2442 88.1251C56.2673 88.1251 56.9941 87.9098 57.4249 87.479C57.9095 86.9944 58.1518 86.2406 58.1518 85.2176V59.7761C58.1518 58.7531 57.9095 58.0262 57.4249 57.5954C56.9941 57.1108 56.2673 56.8685 55.2442 56.8685H43.5331C42.51 56.8685 41.7562 57.1108 41.2716 57.5954C40.8409 58.0262 40.6255 58.7531 40.6255 59.7761V72.8603H29.5605V32.8809C29.5605 31.8579 29.3182 31.131 28.8336 30.7002C28.4028 30.2156 27.676 29.9733 26.6529 29.9733H14.1341C13.1111 29.9733 12.3573 30.2156 11.8727 30.7002C11.4419 31.131 11.2265 31.8579 11.2265 32.8809V85.2176C11.2265 86.2406 11.4419 86.9944 11.8727 87.479C12.3573 87.9098 13.1111 88.1251 14.1341 88.1251H55.2442ZM20.0301 80.8562V37.2423H20.8377V80.0485H48.9444V64.1375H49.7521V80.8562H20.0301Z" fill="black"/>
                        <path d="M35.2346 24.0886C35.1149 24.5911 34.8397 25.0099 34.409 25.3449C33.9782 25.68 33.5116 25.8355 33.009 25.8116C32.5304 25.7877 32.1595 25.5962 31.8962 25.2373C31.633 24.8783 31.5612 24.4475 31.6809 23.945C31.9441 23.2271 32.5902 20.3673 33.6193 15.3658C34.6722 10.3643 35.2705 7.50455 35.4141 6.78662C33.0688 9.1797 30.2929 12.2428 27.0862 15.976C26.7272 16.4068 26.2845 16.67 25.758 16.7658C25.2554 16.8615 24.8247 16.7777 24.4657 16.5145C24.4657 16.4906 24.4538 16.4786 24.4298 16.4786C24.2384 16.335 24.0948 16.1675 23.9991 15.976C23.2812 14.5641 22.0368 12.4223 20.2659 9.55063L18.507 6.75073C18.1959 8.54553 17.801 10.6036 17.3224 12.9249C17.0592 14.0735 16.6523 15.8803 16.1019 18.3452C15.5515 20.8101 15.1327 22.6767 14.8456 23.945C14.7498 24.4475 14.4866 24.8783 14.0558 25.2373C13.649 25.5723 13.1943 25.7398 12.6918 25.7398C12.1892 25.7398 11.7944 25.5723 11.5072 25.2373C11.244 24.8783 11.1602 24.4475 11.2559 23.945C11.5431 22.6767 11.9619 20.8101 12.5123 18.3452C13.0627 15.8803 13.4695 14.0616 13.7328 12.889C14.69 8.41392 15.3122 4.81233 15.5994 2.08422C15.6472 1.58168 15.8626 1.13896 16.2455 0.756064C16.6523 0.373171 17.107 0.157794 17.6096 0.109933C17.8728 0.0860023 18.1001 0.109933 18.2916 0.181724C18.842 0.205656 19.2488 0.432999 19.5121 0.863753L23.4965 7.21738C24.6213 9.01218 25.5665 10.5797 26.3323 11.9198C30.5681 7.03789 34.1457 3.31666 37.0653 0.756064C37.1849 0.660341 37.2926 0.576583 37.3884 0.50479C37.843 0.145828 38.3217 -0.021687 38.8242 0.00224346C39.3267 0.0261754 39.7096 0.217622 39.9729 0.576583C40.2361 0.935545 40.2959 1.3663 40.1524 1.86885C39.5302 4.38158 38.7045 8.11478 37.6755 13.0685C36.6704 17.9982 35.8568 21.6716 35.2346 24.0886Z" fill="black"/>
                        <path d="M38.3676 32.9908C37.7933 32.9908 37.3506 32.8472 37.0395 32.5601C36.7284 32.2729 36.5728 31.89 36.5728 31.4114C36.5728 30.9089 36.7643 30.4542 37.1472 30.0473C37.5301 29.6645 38.0087 29.4491 38.583 29.4012C39.4445 29.3294 40.0907 29.2457 40.5214 29.1499C40.9522 29.0542 41.3231 28.9106 41.6342 28.7192C42.3043 28.3363 42.9025 27.6662 43.429 26.709C43.788 26.0629 44.0512 25.656 44.2187 25.4885C44.0991 25.321 44.0153 25.0937 43.9674 24.8065C43.9435 23.0596 43.6324 20.3314 43.0341 16.6222C42.5555 13.6069 42.2205 11.0583 42.0291 8.97629C41.9812 8.37802 42.1367 7.86351 42.4957 7.43275C42.8786 7.002 43.3811 6.78662 44.0033 6.78662C44.458 6.78662 44.829 6.94217 45.1161 7.25327C45.4033 7.54044 45.5588 7.95923 45.5828 8.50964C45.6306 9.32328 45.9298 11.7283 46.4802 15.7248L47.0186 19.7451L48.5622 17.017C51.0749 12.542 52.9056 9.41901 54.0543 7.64813C54.485 7.02593 55.0474 6.6909 55.7414 6.64304C56.1482 6.61911 56.4952 6.73876 56.7824 7.002C57.0935 7.26524 57.261 7.60027 57.2849 8.00709C57.2849 8.43785 57.1533 8.85663 56.8901 9.26346C56.5072 9.78994 55.9568 10.6873 55.2388 11.9557L54.1979 13.7146C53.5039 14.8393 52.8338 15.9641 52.1877 17.0888C51.5415 18.1896 50.8834 19.3264 50.2134 20.499L49.1365 22.4374L48.6339 23.4424C48.4904 23.7057 48.1912 24.3279 47.7365 25.309C47.2579 26.2663 46.7793 27.1756 46.3007 28.0372C45.4392 29.5927 44.3503 30.7892 43.0341 31.6268C41.5504 32.5361 39.9949 32.9908 38.3676 32.9908Z" fill="black"/>
                        <path d="M109.073 124.975C108.953 125.477 108.678 125.896 108.247 126.231C107.841 126.566 107.386 126.734 106.883 126.734C106.381 126.734 105.998 126.554 105.735 126.195C105.471 125.836 105.388 125.406 105.483 124.903C106.01 122.701 106.728 119.172 107.637 114.314C108.546 109.432 109.348 105.579 110.042 102.755C110.186 102.276 110.473 101.87 110.904 101.535C111.334 101.176 111.789 101.008 112.268 101.032C112.746 101.056 113.117 101.247 113.381 101.606C113.668 101.965 113.751 102.396 113.632 102.899C113.01 105.459 112.363 108.51 111.693 112.052C117.389 111.861 121.541 111.777 124.149 111.801C124.819 108.498 125.513 105.507 126.231 102.827C126.375 102.324 126.662 101.918 127.093 101.606C127.524 101.271 127.99 101.116 128.493 101.14C128.995 101.164 129.366 101.367 129.606 101.75C129.845 102.109 129.905 102.54 129.785 103.042C129.067 105.842 128.481 108.223 128.026 110.186C127.524 112.555 126.985 115.223 126.411 118.19C125.86 121.134 125.418 123.383 125.083 124.939C124.987 125.441 124.724 125.872 124.293 126.231C123.886 126.566 123.431 126.734 122.929 126.734C122.426 126.734 122.031 126.566 121.744 126.231C121.481 125.872 121.397 125.441 121.493 124.939C121.684 124.101 122.331 120.871 123.431 115.247C120.847 115.223 116.707 115.307 111.011 115.498C110.246 119.59 109.599 122.749 109.073 124.975Z" fill="black"/>
                        <path d="M142.472 127.093C140.51 127.093 138.727 126.698 137.124 125.908C135.544 125.094 134.288 123.946 133.355 122.462C132.421 120.978 131.955 119.231 131.955 117.221C131.955 114.326 132.649 111.633 134.037 109.145C135.425 106.656 137.232 104.682 139.457 103.222C141.683 101.762 143.98 101.032 146.349 101.032C146.565 101.032 146.804 101.068 147.067 101.14C147.354 101.212 147.546 101.247 147.641 101.247C149.293 101.247 150.836 101.75 152.272 102.755C153.708 103.76 154.845 105.112 155.682 106.811C156.544 108.51 156.974 110.329 156.974 112.268C156.974 114.804 156.316 117.221 155 119.519C153.684 121.792 151.913 123.623 149.688 125.011C147.462 126.399 145.057 127.093 142.472 127.093ZM143.226 123.718C144.877 123.718 146.481 123.216 148.036 122.211C149.616 121.206 150.884 119.866 151.841 118.19C152.822 116.491 153.313 114.673 153.313 112.734C153.313 111.466 153.086 110.257 152.631 109.109C152.2 107.96 151.53 107.003 150.621 106.237C149.711 105.447 148.587 104.981 147.247 104.837C146.289 104.741 145.416 104.693 144.626 104.693C142.855 105.076 141.276 105.878 139.888 107.099C138.524 108.319 137.471 109.767 136.729 111.442C135.987 113.117 135.616 114.792 135.616 116.467C135.616 118.908 136.286 120.727 137.626 121.924C138.967 123.12 140.833 123.718 143.226 123.718Z" fill="black"/>
                        <path d="M183.729 125.047C183.61 125.549 183.335 125.968 182.904 126.303C182.473 126.638 182.006 126.794 181.504 126.77C181.025 126.746 180.654 126.554 180.391 126.195C180.128 125.836 180.056 125.406 180.176 124.903C180.439 124.185 181.085 121.325 182.114 116.324C183.167 111.322 183.765 108.463 183.909 107.745C181.564 110.138 178.788 113.201 175.581 116.934C175.222 117.365 174.779 117.628 174.253 117.724C173.75 117.82 173.32 117.736 172.961 117.473C172.961 117.449 172.949 117.437 172.925 117.437C172.733 117.293 172.59 117.126 172.494 116.934C171.776 115.522 170.532 113.38 168.761 110.509L167.002 107.709C166.691 109.504 166.296 111.562 165.817 113.883C165.554 115.032 165.147 116.838 164.597 119.303C164.046 121.768 163.628 123.635 163.34 124.903C163.245 125.406 162.981 125.836 162.551 126.195C162.144 126.53 161.689 126.698 161.187 126.698C160.684 126.698 160.289 126.53 160.002 126.195C159.739 125.836 159.655 125.406 159.751 124.903C160.038 123.635 160.457 121.768 161.007 119.303C161.558 116.838 161.964 115.02 162.228 113.847C163.185 109.372 163.807 105.77 164.094 103.042C164.142 102.54 164.357 102.097 164.74 101.714C165.147 101.331 165.602 101.116 166.104 101.068C166.368 101.044 166.595 101.068 166.786 101.14C167.337 101.164 167.744 101.391 168.007 101.822L171.991 108.175C173.116 109.97 174.061 111.538 174.827 112.878C179.063 107.996 182.641 104.275 185.56 101.714C185.68 101.618 185.787 101.535 185.883 101.463C186.338 101.104 186.817 100.936 187.319 100.96C187.822 100.984 188.204 101.176 188.468 101.535C188.731 101.894 188.791 102.324 188.647 102.827C188.025 105.34 187.199 109.073 186.17 114.026C185.165 118.956 184.352 122.63 183.729 125.047Z" fill="black"/>
                        <path d="M204.057 126.734H192.391C191.673 126.734 191.158 126.494 190.847 126.016C190.536 125.513 190.476 124.855 190.667 124.042C190.715 123.874 191.014 122.51 191.565 119.949C191.661 119.447 191.768 118.932 191.888 118.406C192.008 117.879 192.127 117.329 192.247 116.755C192.893 113.691 193.348 111.609 193.611 110.509C194.209 107.063 194.796 104.586 195.37 103.078C195.49 102.719 195.693 102.396 195.98 102.109C196.291 101.822 196.614 101.63 196.949 101.535C197.38 101.224 197.799 101.068 198.206 101.068L212.564 101.032C213.043 101.032 213.402 101.164 213.641 101.427C213.88 101.69 214 102.025 214 102.432C214 102.935 213.797 103.401 213.39 103.832C212.983 104.263 212.445 104.478 211.774 104.478C205.074 104.478 200.635 104.49 198.457 104.514C198.337 104.801 198.218 105.196 198.098 105.699C198.002 106.201 197.895 106.787 197.775 107.457L197.165 110.58L196.878 111.873L208.939 111.909C209.393 111.909 209.74 112.04 209.98 112.303C210.243 112.567 210.374 112.902 210.374 113.309C210.374 113.835 210.171 114.326 209.764 114.78C209.357 115.211 208.819 115.426 208.149 115.426L201.149 115.355H196.088L194.472 123.216H196.196C200.407 123.264 203.135 123.288 204.38 123.288L208.005 123.252C208.484 123.252 208.843 123.371 209.082 123.611C209.345 123.85 209.477 124.173 209.477 124.58C209.477 125.13 209.274 125.621 208.867 126.052C208.484 126.482 207.957 126.698 207.287 126.698L204.057 126.734Z" fill="black"/>
                    </svg>
                </a>
        
                <ul class="nav nav-pills nav-top">
                    <li class="nav-item"><a href="/">Accueil</a></li>
                    <li class="nav-item"><a href="/products">Catalogue</a></li>
                    <li class="nav-item"><a href="/about">A propos</a></li>
                    <li class="nav-item"><a href="/cart" style="padding-right: 1em"><i class="fa-solid fa-basket-shopping"></i></a><i class="fa-solid fa-magnifying-glass" style="padding-right: 0.5em"></i><input></li>
                </ul>
            </div>
        </header>
        @yield('content')
        <footer class="footer mt-auto py-3">
            <div class="container" style="display: flex; justify-content: space-between; ">
                <div>
                    <p>My Lego Home<br>16 Bd Maréchal Lyautey,<br>38000 Grenoble<br>contact@mylegohome.com</p>
                </div>
                <div style="text-align: center;">
                    <p>@copyright - tous droits réservés<br>MyLego Home<br>2022</p>
                </div>
                <div style="text-align: center;">
                    <p>Suivez-nous</p>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook-square"></i>
                </div>
            </div>
        </footer>
    </body>
</html>
