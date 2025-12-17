<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-amber-50 via-orange-50 to-amber-100">
    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-amber-600 to-orange-600 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-paw text-white text-3xl"></i>
                    <a href="index.html" class="text-white font-bold text-2xl">Zoo ASSAD</a>
                </div>
                <a href="index.html" class="text-white hover:text-amber-100 transition">
                    <i class="fas fa-home mr-2"></i>Retour à l'accueil
                </a>
            </div>
        </div>
    </nav>

    <!-- Login/Register Section -->
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full">
            <!-- Tabs -->
            <div class="flex space-x-2 mb-6">
                <button onclick="showTab('login')" id="loginTab" class="flex-1 py-3 px-6 rounded-t-lg font-semibold transition bg-white text-gray-800 shadow-lg">
                    Connexion
                </button>
                <button onclick="showTab('register')" id="registerTab" class="flex-1 py-3 px-6 rounded-t-lg font-semibold transition bg-amber-100 text-amber-800">
                    Inscription
                </button>
            </div>

            <!-- Login Form -->
            <div id="loginForm" class="bg-white rounded-2xl shadow-2xl p-8">
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-amber-500 to-orange-500 rounded-full mb-4">
                        <i class="fas fa-user text-white text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Connexion</h2>
                    <p class="text-gray-600 mt-2">Accédez à votre espace personnel</p>
                </div>

                <form onsubmit="handleLogin(event)" class="space-y-6">
                    <div>
                        <label for="login-email" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-envelope mr-2 text-amber-600"></i>Adresse email
                        </label>
                        <input type="email" id="login-email" name="email" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition"
                            placeholder="votre@email.com">
                    </div>

                    <div>
                        <label for="login-password" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-lock mr-2 text-amber-600"></i>Mot de passe
                        </label>
                        <input type="password" id="login-password" name="password" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition"
                            placeholder="••••••••">
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember" 
                                class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-700">
                                Se souvenir de moi
                            </label>
                        </div>
                        <a href="#" class="text-sm text-amber-600 hover:text-amber-700 font-medium">
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <button type="submit" 
                        class="w-full bg-gradient-to-r from-amber-600 to-orange-600 text-white py-3 rounded-lg font-semibold hover:from-amber-700 hover:to-orange-700 transition shadow-lg">
                        Se connecter
                    </button>
                </form>
            </div>

            <!-- Register Form -->
            <div id="registerForm" class="bg-white rounded-2xl shadow-2xl p-8 hidden">
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-amber-500 to-orange-500 rounded-full mb-4">
                        <i class="fas fa-user-plus text-white text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Inscription</h2>
                    <p class="text-gray-600 mt-2">Créez votre compte gratuitement</p>
                </div>

                <form onsubmit="handleRegister(event)" class="space-y-5">
                    <div>
                        <label for="register-name" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-user mr-2 text-amber-600"></i>Nom complet
                        </label>
                        <input type="text" id="register-name" name="name" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition"
                            placeholder="Mohammed Ali">
                    </div>

                    <div>
                        <label for="register-email" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-envelope mr-2 text-amber-600"></i>Adresse email
                        </label>
                        <input type="email" id="register-email" name="email" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition"
                            placeholder="votre@email.com">
                    </div>

                    <div>
                        <label for="register-password" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-lock mr-2 text-amber-600"></i>Mot de passe
                        </label>
                        <input type="password" id="register-password" name="password" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition"
                            placeholder="••••••••">
                    </div>

                    <div>
                        <label for="register-country" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-globe mr-2 text-amber-600"></i>Pays
                        </label>
                        <select id="register-country" name="country" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                            <option value="">Sélectionnez votre pays</option>
                            <option value="maroc">Maroc</option>
                            <option value="france">France</option>
                            <option value="algerie">Algérie</option>
                            <option value="tunisie">Tunisie</option>
                            <option value="senegal">Sénégal</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-user-tag mr-2 text-amber-600"></i>Rôle
                        </label>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-amber-500 transition">
                                <input type="radio" name="role" value="visiteur" checked class="mr-2">
                                <span class="font-medium">Visiteur</span>
                            </label>
                            <label class="flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-amber-500 transition">
                                <input type="radio" name="role" value="guide" class="mr-2">
                                <span class="font-medium">Guide</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <input type="checkbox" id="terms" name="terms" required 
                            class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded mt-1">
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            J'accepte les <a href="#" class="text-amber-600 hover:text-amber-700 font-medium">conditions d'utilisation</a> et la <a href="#" class="text-amber-600 hover:text-amber-700 font-medium">politique de confidentialité</a>
                        </label>
                    </div>

                    <button type="submit" 
                        class="w-full bg-gradient-to-r from-amber-600 to-orange-600 text-white py-3 rounded-lg font-semibold hover:from-amber-700 hover:to-orange-700 transition shadow-lg">
                        Créer mon compte
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showTab(tab) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const loginTab = document.getElementById('loginTab');
            const registerTab = document.getElementById('registerTab');

            if (tab === 'login') {
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
                loginTab.classList.add('bg-white', 'text-gray-800', 'shadow-lg');
                loginTab.classList.remove('bg-amber-100', 'text-amber-800');
                registerTab.classList.add('bg-amber-100', 'text-amber-800');
                registerTab.classList.remove('bg-white', 'text-gray-800', 'shadow-lg');
            } else {
                loginForm.classList.add('hidden');
                registerForm.classList.remove('hidden');
                registerTab.classList.add('bg-white', 'text-gray-800', 'shadow-lg');
                registerTab.classList.remove('bg-amber-100', 'text-amber-800');
                loginTab.classList.add('bg-amber-100', 'text-amber-800');
                loginTab.classList.remove('bg-white', 'text-gray-800', 'shadow-lg');
            }
        }

        function handleLogin(event) {
            event.preventDefault();
            const email = document.getElementById('login-email').value;
            // Simulate login
            localStorage.setItem('userEmail', email);
            localStorage.setItem('userName', email.split('@')[0]);
            alert('Connexion réussie !');
            window.location.href = 'dashboard.html';
        }

        function handleRegister(event) {
            event.preventDefault();
            const name = document.getElementById('register-name').value;
            const email = document.getElementById('register-email').value;
            const role = document.querySelector('input[name="role"]:checked').value;
            // Simulate registration
            localStorage.setItem('userEmail', email);
            localStorage.setItem('userName', name);
            localStorage.setItem('userRole', role);
            alert('Inscription réussie !');
            window.location.href = 'dashboard.html';
        }
    </script>
</body>
</html>
