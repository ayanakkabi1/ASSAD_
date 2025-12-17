<?php 
    session_start();
?>

<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ASSAD - User Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec6d",
                        "background-light": "#f6f8f7",
                        "background-dark": "#102218",
                        "input-dark": "#1c2720",
                        "border-dark": "#3b5445",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-white h-screen overflow-hidden selection:bg-primary selection:text-background-dark">
    <div class="flex h-full w-full">
        <div class="hidden lg:flex w-1/2 relative bg-cover bg-center overflow-hidden"
            data-alt="Close up portrait of a majestic lion with golden lighting in the savannah"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAlIgDx6Uw8BB-nO38dLbw7s71Pc9e7Zf578ED1TzliTpWfi5kSdfjeBOAjV4DsgcEME6MYbE0QDEaguX-tKUnteim_eQWD9pZwTMiTCfXX47Kb3aB4usc-a70fslPwzAMl_ouzsiq8U83Img3XfhEnmV0R1vy9nO-szpAPFKVSmFNb2eTqiP8BpEeeIJWpD6BT1-bqzXG2RPgPVyci3zZwB1MVbruuIo9mF25sYI_LGNdb2DiEw6ombrKLiSCSE2uU5oI0Jf27hk3X');">
            <div
                class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/40 to-transparent opacity-90">
            </div>
            <div class="relative z-10 flex flex-col justify-end h-full p-16 max-w-2xl">
                <div class="mb-8">
                    <span
                        class="inline-flex items-center justify-center h-12 w-12 rounded-full bg-primary/20 backdrop-blur-md mb-6 border border-primary/30 text-primary">
                        <span class="material-symbols-outlined text-2xl">public</span>
                    </span>
                    <h2 class="text-5xl font-black tracking-tight text-white mb-4 leading-tight">
                        The Pride of the <br />
                        <span class="text-primary">Atlas Mountains</span>
                    </h2>
                    <p class="text-lg text-gray-300 font-light leading-relaxed max-w-md">
                        Join over 50,000 wildlife enthusiasts exploring the rich heritage of Moroccan fauna through our
                        immersive virtual sanctuary.
                    </p>
                </div>
                <div class="flex items-center gap-4 pt-8 border-t border-white/10">
                    <div class="flex -space-x-3">
                        <img alt="User avatar" class="w-10 h-10 rounded-full border-2 border-background-dark"
                            data-alt="Portrait of a smiling young woman"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDE_G05nAZpuegrUjPiRcUhm1RsqyldKfaTo301YP8eQRVYgI3T4j2j_u1VqcyuemuqKF3vNh_QgSQsXpMi-fd_SCLEeTo-LhLHTZBIZTCbGL54KIguxfdbJ3GU0gO3isoBdWPayxAZgd7lYgqKp68VusomdZpG__QYjl2e1PxuTnYhsdwiBUUp3A_9xqhv_uPTJiLhMqDLCZokvU6Y1pu2rABozuFaUHT2rEQuzjaJ60FnHeJ9yk0_tHOqia_g4gkYv_43XLyql3HL" />
                        <img alt="User avatar" class="w-10 h-10 rounded-full border-2 border-background-dark"
                            data-alt="Portrait of a young man"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCee2IP7MNYgChjPmLHF3qcLBUH0WrppFu8Kz2Z6jhDlzATY8tqvzNCqjXSq2EPlUd83ZuA5Ai2Kk4zgJSF4tANqx_HojLg5awaH41Mcm3ptYXQOs_EBu5QCzDeyZ44ryErVhjLrIyni_Yr2ofJgqGZWB0zgAXZ_AwUYI9TYU5PKkMcBBg_dKDgOGCigVXCInm_3bLpa1HrZQeMiCisd1ZVnid_4li8aBuHBSYbfRwRB6IWvtvtbihecJq4XvoK65dMzgV44JEHtaBm" />
                        <div
                            class="w-10 h-10 rounded-full border-2 border-background-dark bg-primary text-background-dark font-bold flex items-center justify-center text-xs">
                            +2k</div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex text-primary text-sm">
                            <span class="material-symbols-outlined text-[16px] fill">star</span>
                            <span class="material-symbols-outlined text-[16px] fill">star</span>
                            <span class="material-symbols-outlined text-[16px] fill">star</span>
                            <span class="material-symbols-outlined text-[16px] fill">star</span>
                            <span class="material-symbols-outlined text-[16px] fill">star</span>
                        </div>
                        <span class="text-xs text-gray-400 font-medium">Trusted by families worldwide</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center px-6 py-12 relative overflow-y-auto">
            <div
                class="lg:hidden absolute inset-0 -z-10 bg-[url('https://www.transparenttextures.com/patterns/moroccan-flower.png')] opacity-5">
            </div>
            <div class="w-full max-w-[420px] flex flex-col">
                <div class="mb-10 text-center lg:text-left">
                    <div class="inline-flex items-center gap-3 mb-2 text-primary">
                        <span class="material-symbols-outlined text-4xl">pets</span>
                        <span class="text-2xl font-black tracking-tight text-white uppercase">ASSAD</span>
                    </div>
                    <h1 class="text-3xl font-bold text-slate-900 dark:text-white mt-4">Welcome Back</h1>
                    <p class="text-slate-500 dark:text-[#9db9a8] mt-2 text-base">
                        Please enter your details to sign in.
                    </p>
                </div>

                <form class="flex flex-col gap-6" method="post" action="/controllers/auth.php">

                    <div class="flex flex-col gap-2">
                        <label class="text-slate-700 dark:text-white text-sm font-medium" for="email">Email
                            Address</label>
                        <div class="relative group">
                            <div
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 dark:text-[#9db9a8] pointer-events-none group-focus-within:text-primary transition-colors">
                                <span class="material-symbols-outlined text-[20px]">mail</span>
                            </div>
                            <input
                                class="form-input w-full rounded-xl bg-white dark:bg-input-dark border border-slate-200 dark:border-border-dark py-3.5 pl-12 pr-4 text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#9db9a8] focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                                id="email" placeholder="name@example.com" name="email" type="email" />
                        </div>
                            <?php if(isset($_SESSION['errors']['fields'])): ?>
                                    <div class="text-red-500 text-sm mt-1">
                                        <?php echo htmlspecialchars($_SESSION['errors']['fields']); ?>
                                    </div> 
                        <?php elseif($_SESSION["errors"]["database"]) : ?>
                            <div class="text-red-500 text-sm mt-1">
                                <?php echo htmlspecialchars($_SESSION['errors']['database']); ?>
                            </div>
                        <?php elseif($_SESSION["errors"]["email"]) : ?>
                            <div class="text-red-500 text-sm mt-1">
                                <?php echo htmlspecialchars($_SESSION['errors']['email']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-slate-700 dark:text-white text-sm font-medium"
                            for="password">Password</label>
                        <div class="relative group">
                            <div
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 dark:text-[#9db9a8] pointer-events-none group-focus-within:text-primary transition-colors">
                                <span class="material-symbols-outlined text-[20px]">lock</span>
                            </div>
                            <input
                                class="form-input w-full rounded-xl bg-white dark:bg-input-dark border border-slate-200 dark:border-border-dark py-3.5 pl-12 pr-12 text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#9db9a8] focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                                id="password" placeholder="Enter your password" name="password" type="password" />
                            <button
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 dark:text-[#9db9a8] hover:text-slate-600 dark:hover:text-white transition-colors cursor-pointer flex items-center justify-center"
                                type="button">
                            </button>
                        </div>
                            <?php if(isset($_SESSION['errors']['fields'])): ?>
                                    <div class="text-red-500 text-sm mt-1">
                                        <?php echo htmlspecialchars($_SESSION['errors']['fields']); ?>
                                    </div>                            
                        <?php elseif($_SESSION["errors"]["password"]) : ?>
                            <div class="text-red-500 text-sm mt-1">
                                <?php echo htmlspecialchars($_SESSION['errors']['password']); ?>
                            </div>
                        <?php elseif($_SESSION["errors"]["database"]) : ?>
                            <div class="text-red-500 text-sm mt-1">
                                <?php echo htmlspecialchars($_SESSION['errors']['database']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="flex flex-wrap items-center justify-between gap-y-2">

                        <label class="flex items-center gap-3 cursor-pointer group">
                            <div class="relative flex items-center">
                                <input
                                    class="peer h-5 w-5 rounded border-slate-300 dark:border-border-dark bg-transparent text-primary focus:ring-primary focus:ring-offset-0 transition-all checked:bg-primary checked:border-primary cursor-pointer"
                                    type="checkbox" name="remember_me" value="1"/>
                            </div>
                            <span
                                class="text-sm text-slate-600 dark:text-gray-300 group-hover:text-slate-800 dark:group-hover:text-white transition-colors">Remember
                                me</span>
                        </label>
                    </div>

                    <button
                        class="w-full flex items-center justify-center gap-2 h-14 rounded-full bg-primary hover:bg-[#0fd963] active:scale-[0.98] transition-all text-background-dark font-bold text-base tracking-wide shadow-lg shadow-primary/20 mt-2"
                        type="submit">
                        <span>Log In</span>
                        <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                    </button>

                </form>

                <div class="mt-12 text-center">
                    <p class="text-slate-500 dark:text-gray-400 text-sm">
                        Don't have an account yet?
                        <a class="font-bold text-slate-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors inline-flex items-center gap-1 group"
                            href="/src/register.php">
                            Join the Pride
                            <span
                                class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">chevron_right</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php
unset($_SESSION['errors']);
?>