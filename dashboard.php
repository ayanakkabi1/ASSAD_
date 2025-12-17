<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-amber-50 to-orange-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="index.html" class="flex items-center space-x-3">
                    <i class="fas fa-paw text-4xl text-amber-600"></i>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Zoo ASSAD</h1>
                        <p class="text-sm text-gray-600">Tableau de bord</p>
                    </div>
                </a>
                <div class="flex items-center space-x-6">
                    <span class="text-gray-600">
                        <i class="fas fa-user-circle text-2xl text-amber-600 mr-2"></i>
                        <span id="userName">Utilisateur</span>
                    </span>
                    <button onclick="handleLogout()" class="text-red-600 hover:text-red-700 transition">
                        <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-6 py-8">
        <!-- Role Selection -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Sélectionner le mode d'affichage</h2>
            <div class="flex space-x-4">
                <button onclick="showDashboard('visiteur')" id="visiteurBtn" class="flex-1 py-3 px-6 rounded-lg font-semibold transition bg-amber-600 text-white">
                    <i class="fas fa-user mr-2"></i>Visiteur
                </button>
                <button onclick="showDashboard('guide')" id="guideBtn" class="flex-1 py-3 px-6 rounded-lg font-semibold transition bg-gray-200 text-gray-700 hover:bg-gray-300">
                    <i class="fas fa-map-signs mr-2"></i>Guide
                </button>
                <button onclick="showDashboard('admin')" id="adminBtn" class="flex-1 py-3 px-6 rounded-lg font-semibold transition bg-gray-200 text-gray-700 hover:bg-gray-300">
                    <i class="fas fa-user-shield mr-2"></i>Administrateur
                </button>
            </div>
        </div>

        <!-- Visiteur Dashboard -->
        <div id="visiteurDashboard">
            <!-- Stats -->
            <div class="grid md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-calendar-check text-3xl text-amber-600"></i>
                        <span class="text-2xl font-bold text-gray-800">3</span>
                    </div>
                    <p class="text-gray-600">Visites réservées</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-history text-3xl text-green-600"></i>
                        <span class="text-2xl font-bold text-gray-800">12</span>
                    </div>
                    <p class="text-gray-600">Visites complétées</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-paw text-3xl text-blue-600"></i>
                        <span class="text-2xl font-bold text-gray-800">8</span>
                    </div>
                    <p class="text-gray-600">Animaux favoris</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-star text-3xl text-purple-600"></i>
                        <span class="text-2xl font-bold text-gray-800">45</span>
                    </div>
                    <p class="text-gray-600">Points fidélité</p>
                </div>
            </div>

            <!-- Reservations -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Mes réservations</h2>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-3 px-4">Visite</th>
                                <th class="text-left py-3 px-4">Date</th>
                                <th class="text-left py-3 px-4">Heure</th>
                                <th class="text-left py-3 px-4">Guide</th>
                                <th class="text-left py-3 px-4">Statut</th>
                                <th class="text-left py-3 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-4 font-semibold">Safari Matinal</td>
                                <td class="py-4 px-4">15 Déc 2024</td>
                                <td class="py-4 px-4">08:00</td>
                                <td class="py-4 px-4">Mohammed Ali</td>
                                <td class="py-4 px-4"><span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Confirmé</span></td>
                                <td class="py-4 px-4">
                                    <button class="text-amber-600 hover:text-amber-700 mr-2"><i class="fas fa-eye"></i></button>
                                    <button class="text-red-600 hover:text-red-700"><i class="fas fa-times"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-4 font-semibold">Aventure Jungle</td>
                                <td class="py-4 px-4">18 Déc 2024</td>
                                <td class="py-4 px-4">10:00</td>
                                <td class="py-4 px-4">Fatima Zahra</td>
                                <td class="py-4 px-4"><span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">En attente</span></td>
                                <td class="py-4 px-4">
                                    <button class="text-amber-600 hover:text-amber-700 mr-2"><i class="fas fa-eye"></i></button>
                                    <button class="text-red-600 hover:text-red-700"><i class="fas fa-times"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-4 font-semibold">Rencontre avec ASSAD</td>
                                <td class="py-4 px-4">22 Déc 2024</td>
                                <td class="py-4 px-4">14:00</td>
                                <td class="py-4 px-4">Youssef Idrissi</td>
                                <td class="py-4 px-4"><span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Confirmé</span></td>
                                <td class="py-4 px-4">
                                    <button class="text-amber-600 hover:text-amber-700 mr-2"><i class="fas fa-eye"></i></button>
                                    <button class="text-red-600 hover:text-red-700"><i class="fas fa-times"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Favorite Animals -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Animaux favoris</h2>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <img src="/placeholder.svg?height=150&width=150" alt="ASSAD" class="w-full h-40 object-cover rounded-lg mb-3">
                        <h3 class="font-semibold text-gray-800">ASSAD</h3>
                        <p class="text-sm text-gray-600">Lion</p>
                    </div>
                    <div class="text-center">
                        <img src="/placeholder.svg?height=150&width=150" alt="Tembo" class="w-full h-40 object-cover rounded-lg mb-3">
                        <h3 class="font-semibold text-gray-800">Tembo</h3>
                        <p class="text-sm text-gray-600">Éléphant</p>
                    </div>
                    <div class="text-center">
                        <img src="/placeholder.svg?height=150&width=150" alt="Raja" class="w-full h-40 object-cover rounded-lg mb-3">
                        <h3 class="font-semibold text-gray-800">Raja</h3>
                        <p class="text-sm text-gray-600">Tigre</p>
                    </div>
                    <div class="text-center">
                        <img src="/placeholder.svg?height=150&width=150" alt="Bao Bao" class="w-full h-40 object-cover rounded-lg mb-3">
                        <h3 class="font-semibold text-gray-800">Bao Bao</h3>
                        <p class="text-sm text-gray-600">Panda</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Guide Dashboard -->
        <div id="guideDashboard" class="hidden">
            <!-- Stats -->
            <div class="grid md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-calendar-alt text-3xl text-amber-600"></i>
                        <span class="text-2xl font-bold text-gray-800">8</span>
                    </div>
                    <p class="text-gray-600">Visites à venir</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-check-circle text-3xl text-green-600"></i>
                        <span class="text-2xl font-bold text-gray-800">45</span>
                    </div>
                    <p class="text-gray-600">Visites complétées</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-users text-3xl text-blue-600"></i>
                        <span class="text-2xl font-bold text-gray-800">120</span>
                    </div>
                    <p class="text-gray-600">Visiteurs guidés</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-star text-3xl text-purple-600"></i>
                        <span class="text-2xl font-bold text-gray-800">4.8</span>
                    </div>
                    <p class="text-gray-600">Note moyenne</p>
                </div>
            </div>

            <!-- Manage Visits -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Mes visites guidées</h2>
                    <button class="bg-amber-600 text-white px-6 py-2 rounded-lg hover:bg-amber-700 transition">
                        <i class="fas fa-plus mr-2"></i>Créer une visite
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-3 px-4">Titre</th>
                                <th class="text-left py-3 px-4">Date</th>
                                <th class="text-left py-3 px-4">Heure</th>
                                <th class="text-left py-3 px-4">Places</th>
                                <th class="text-left py-3 px-4">Réservations</th>
                                <th class="text-left py-3 px-4">Statut</th>
                                <th class="text-left py-3 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-4 font-semibold">Safari Matinal</td>
                                <td class="py-4 px-4">15 Déc 2024</td>
                                <td class="py-4 px-4">08:00</td>
                                <td class="py-4 px-4">15</td>
                                <td class="py-4 px-4">12/15</td>
                                <td class="py-4 px-4"><span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Active</span></td>
                                <td class="py-4 px-4">
                                    <button class="text-blue-600 hover:text-blue-700 mr-2"><i class="fas fa-edit"></i></button>
                                    <button class="text-amber-600 hover:text-amber-700 mr-2"><i class="fas fa-eye"></i></button>
                                    <button class="text-red-600 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-4 font-semibold">Aventure Jungle</td>
                                <td class="py-4 px-4">18 Déc 2024</td>
                                <td class="py-4 px-4">10:00</td>
                                <td class="py-4 px-4">12</td>
                                <td class="py-4 px-4">8/12</td>
                                <td class="py-4 px-4"><span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Active</span></td>
                                <td class="py-4 px-4">
                                    <button class="text-blue-600 hover:text-blue-700 mr-2"><i class="fas fa-edit"></i></button>
                                    <button class="text-amber-600 hover:text-amber-700 mr-2"><i class="fas fa-eye"></i></button>
                                    <button class="text-red-600 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-4 font-semibold">Rencontre avec ASSAD</td>
                                <td class="py-4 px-4">22 Déc 2024</td>
                                <td class="py-4 px-4">14:00</td>
                                <td class="py-4 px-4">8</td>
                                <td class="py-4 px-4">8/8</td>
                                <td class="py-4 px-4"><span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">Complet</span></td>
                                <td class="py-4 px-4">
                                    <button class="text-blue-600 hover:text-blue-700 mr-2"><i class="fas fa-edit"></i></button>
                                    <button class="text-amber-600 hover:text-amber-700 mr-2"><i class="fas fa-eye"></i></button>
                                    <button class="text-red-600 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Reservations -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Réservations récentes</h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-user-circle text-3xl text-amber-600"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Ahmed Benali</p>
                                <p class="text-sm text-gray-600">Safari Matinal - 15 Déc 2024</p>
                            </div>
                        </div>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Confirmé</span>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-user-circle text-3xl text-amber-600"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Sarah Idrissi</p>
                                <p class="text-sm text-gray-600">Aventure Jungle - 18 Déc 2024</p>
                            </div>
                        </div>
                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">En attente</span>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-user-circle text-3xl text-amber-600"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Omar Tazi</p>
                                <p class="text-sm text-gray-600">Rencontre avec ASSAD - 22 Déc 2024</p>
                            </div>
                        </div>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Confirmé</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Dashboard -->
        <div id="adminDashboard" class="hidden">
            <!-- Stats -->
            <div class="grid md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-users text-3xl text-amber-600"></i>
                        <span class="text-2xl font-bold text-gray-800">234</span>
                    </div>
                    <p class="text-gray-600">Utilisateurs totaux</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-paw text-3xl text-green-600"></i>
                        <span class="text-2xl font-bold text-gray-800">52</span>
                    </div>
                    <p class="text-gray-600">Animaux</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-calendar-check text-3xl text-blue-600"></i>
                        <span class="text-2xl font-bold text-gray-800">156</span>
                    </div>
                    <p class="text-gray-600">Visites ce mois</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-2">
                        <i class="fas fa-exclamation-triangle text-3xl text-red-600"></i>
                        <span class="text-2xl font-bold text-gray-800">5</span>
                    </div>
                    <p class="text-gray-600">En attente</p>
                </div>
            </div>

            <!-- User Management -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Gestion des utilisateurs</h2>
                    <input type="text" placeholder="Rechercher..." class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-500">
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-3 px-4">Utilisateur</th>
                                <th class="text-left py-3 px-4">Email</th>
                                <th class="text-left py-3 px-4">Rôle</th>
                                <th class="text-left py-3 px-4">Pays</th>
                                <th class="text-left py-3 px-4">Statut</th>
                                <th class="text-left py-3 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-user-circle text-2xl text-amber-600"></i>
                                        <span class="font-semibold">Mohammed Ali</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4">mohammed@email.com</td>
                                <td class="py-4 px-4"><span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Guide</span></td>
                                <td class="py-4 px-4">Maroc</td>
                                <td class="py-4 px-4"><span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Actif</span></td>
                                <td class="py-4 px-4">
                                    <button class="text-blue-600 hover:text-blue-700 mr-2"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-700"><i class="fas fa-ban"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-user-circle text-2xl text-amber-600"></i>
                                        <span class="font-semibold">Sarah Benali</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4">sarah@email.com</td>
                                <td class="py-4 px-4"><span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">Visiteur</span></td>
                                <td class="py-4 px-4">France</td>
                                <td class="py-4 px-4"><span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Actif</span></td>
                                <td class="py-4 px-4">
                                    <button class="text-blue-600 hover:text-blue-700 mr-2"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-700"><i class="fas fa-ban"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-user-circle text-2xl text-amber-600"></i>
                                        <span class="font-semibold">Youssef Tazi</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4">youssef@email.com</td>
                                <td class="py-4 px-4"><span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Guide</span></td>
                                <td class="py-4 px-4">Maroc</td>
                                <td class="py-4 px-4"><span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">En attente</span></td>
                                <td class="py-4 px-4">
                                    <button class="text-green-600 hover:text-green-700 mr-2"><i class="fas fa-check"></i></button>
                                    <button class="text-red-600 hover:text-red-700"><i class="fas fa-times"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Animal Management -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Gestion des animaux</h2>
                    <button class="bg-amber-600 text-white px-6 py-2 rounded-lg hover:bg-amber-700 transition">
                        <i class="fas fa-plus mr-2"></i>Ajouter un animal
                    </button>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-lg transition">
                        <img src="/placeholder.svg?height=200&width=300" alt="ASSAD" class="w-full h-40 object-cover rounded-lg mb-3">
                        <h3 class="font-bold text-gray-800 mb-2">ASSAD - Lion</h3>
                        <div class="space-y-1 text-sm text-gray-600 mb-3">
                            <p><i class="fas fa-map-marker-alt mr-2 text-amber-600"></i>Savane - Maroc</p>
                            <p><i class="fas fa-heart-pulse mr-2 text-green-600"></i>En bonne santé</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="flex-1 bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition text-sm">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="flex-1 bg-red-600 text-white py-2 rounded hover:bg-red-700 transition text-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-lg transition">
                        <img src="/placeholder.svg?height=200&width=300" alt="Tembo" class="w-full h-40 object-cover rounded-lg mb-3">
                        <h3 class="font-bold text-gray-800 mb-2">Tembo - Éléphant</h3>
                        <div class="space-y-1 text-sm text-gray-600 mb-3">
                            <p><i class="fas fa-map-marker-alt mr-2 text-amber-600"></i>Savane - Kenya</p>
                            <p><i class="fas fa-heart-pulse mr-2 text-green-600"></i>En bonne santé</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="flex-1 bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition text-sm">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="flex-1 bg-red-600 text-white py-2 rounded hover:bg-red-700 transition text-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-lg transition">
                        <img src="/placeholder.svg?height=200&width=300" alt="Raja" class="w-full h-40 object-cover rounded-lg mb-3">
                        <h3 class="font-bold text-gray-800 mb-2">Raja - Tigre</h3>
                        <div class="space-y-1 text-sm text-gray-600 mb-3">
                            <p><i class="fas fa-map-marker-alt mr-2 text-amber-600"></i>Jungle - Inde</p>
                            <p><i class="fas fa-heart-pulse mr-2 text-green-600"></i>En bonne santé</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="flex-1 bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition text-sm">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="flex-1 bg-red-600 text-white py-2 rounded hover:bg-red-700 transition text-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Approvals -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Approbations en attente</h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                        <div>
                            <p class="font-semibold text-gray-800">Nouvelle demande de guide</p>
                            <p class="text-sm text-gray-600">Youssef Tazi - youssef@email.com</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                                <i class="fas fa-check mr-2"></i>Approuver
                            </button>
                            <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                                <i class="fas fa-times mr-2"></i>Refuser
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                        <div>
                            <p class="font-semibold text-gray-800">Nouvelle visite proposée</p>
                            <p class="text-sm text-gray-600">Nuit sous les étoiles - Fatima Zahra</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                                <i class="fas fa-check mr-2"></i>Approuver
                            </button>
                            <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                                <i class="fas fa-times mr-2"></i>Refuser
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDashboard(role) {
            // Hide all dashboards
            document.getElementById('visiteurDashboard').classList.add('hidden');
            document.getElementById('guideDashboard').classList.add('hidden');
            document.getElementById('adminDashboard').classList.add('hidden');

            // Reset all buttons
            document.getElementById('visiteurBtn').classList.remove('bg-amber-600', 'text-white');
            document.getElementById('visiteurBtn').classList.add('bg-gray-200', 'text-gray-700');
            document.getElementById('guideBtn').classList.remove('bg-amber-600', 'text-white');
            document.getElementById('guideBtn').classList.add('bg-gray-200', 'text-gray-700');
            document.getElementById('adminBtn').classList.remove('bg-amber-600', 'text-white');
            document.getElementById('adminBtn').classList.add('bg-gray-200', 'text-gray-700');

            // Show selected dashboard
            if (role === 'visiteur') {
                document.getElementById('visiteurDashboard').classList.remove('hidden');
                document.getElementById('visiteurBtn').classList.add('bg-amber-600', 'text-white');
                document.getElementById('visiteurBtn').classList.remove('bg-gray-200', 'text-gray-700');
            } else if (role === 'guide') {
                document.getElementById('guideDashboard').classList.remove('hidden');
                document.getElementById('guideBtn').classList.add('bg-amber-600', 'text-white');
                document.getElementById('guideBtn').classList.remove('bg-gray-200', 'text-gray-700');
            } else if (role === 'admin') {
                document.getElementById('adminDashboard').classList.remove('hidden');
                document.getElementById('adminBtn').classList.add('bg-amber-600', 'text-white');
                document.getElementById('adminBtn').classList.remove('bg-gray-200', 'text-gray-700');
            }
        }

        function handleLogout() {
            if (confirm('Voulez-vous vraiment vous déconnecter ?')) {
                alert('Déconnexion réussie !');
                window.location.href = 'index.html';
            }
        }
    </script>
</body>
</html>
