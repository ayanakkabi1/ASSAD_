<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo ASSAD - Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-b from-amber-50 to-orange-50">
    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-amber-600 to-orange-600 shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-paw text-white text-3xl"></i>
                    <span class="text-white font-bold text-2xl">Zoo ASSAD</span>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="index.html" class="text-white hover:text-amber-100 transition font-medium">Accueil</a>
                    <a href="login.html" class="bg-white text-orange-600 px-6 py-2 rounded-lg hover:bg-amber-50 transition font-semibold">Connexion</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative h-[600px] bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('/placeholder.svg?height=600&width=1920');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="text-white max-w-2xl">
                <h1 class="text-5xl md:text-6xl font-bold mb-4 text-balance">Découvrez le Royaume d'ASSAD</h1>
                <p class="text-xl md:text-2xl mb-8 text-pretty">Le lion de l'Atlas, symbole de force et de majesté pour la CAN 2025</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#assad-section" class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 rounded-lg font-semibold transition shadow-lg">
                        Rencontrer ASSAD
                    </a>
                    <a href="#visits-section" class="bg-white hover:bg-gray-100 text-orange-600 px-8 py-3 rounded-lg font-semibold transition shadow-lg">
                        Réserver une Visite
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Bienvenue au Zoo ASSAD</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">À l'occasion de la Coupe d'Afrique des Nations 2025, découvrez les merveilles de la faune africaine</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-amber-50 to-orange-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="text-amber-600 text-5xl mb-4">
                        <i class="fas fa-lion"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Lions de l'Atlas</h3>
                    <p class="text-gray-600">Découvrez ASSAD, notre majestueux lion de l'Atlas, et apprenez sur cette espèce emblématique.</p>
                </div>
                
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="text-green-600 text-5xl mb-4">
                        <i class="fas fa-binoculars"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Visites Guidées</h3>
                    <p class="text-gray-600">Réservez une visite guidée virtuelle pour explorer nos habitats et animaux africains.</p>
                </div>
                
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="text-blue-600 text-5xl mb-4">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Conservation</h3>
                    <p class="text-gray-600">Engagés pour la préservation de la faune africaine et leurs habitats naturels.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Animals Section -->
    <div id="animals-section" class="py-16 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-gray-800 mb-12 text-center">Nos Animaux Vedettes</h2>
            
            <div class="bg-white p-6 rounded-xl shadow-md mb-8">
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Rechercher</label>
                        <input type="text" id="animal-search" onkeyup="filterAnimals()" placeholder="Nom ou espèce..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Habitat</label>
                        <select id="habitat-filter" onchange="filterAnimals()" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                            <option value="">Tous les habitats</option>
                            <option value="savane">Savane</option>
                            <option value="foret">Forêt</option>
                            <option value="jungle">Jungle</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pays d'origine</label>
                        <select id="country-filter" onchange="filterAnimals()" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                            <option value="">Tous les pays</option>
                            <option value="maroc">Maroc</option>
                            <option value="kenya">Kenya</option>
                            <option value="tanzanie">Tanzanie</option>
                            <option value="congo">Congo</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="grid md:grid-cols-4 gap-6" id="animals-grid">
                <div class="animal-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:-translate-y-2" data-habitat="savane" data-country="maroc" data-name="assad lion">
                    <img src="/placeholder.svg?height=250&width=400" alt="Lion" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg text-gray-800">ASSAD</h3>
                            <span class="bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded">Savane</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-1">Lion de l'Atlas</p>
                        <p class="text-xs text-gray-500"><i class="fas fa-map-marker-alt text-amber-600 mr-1"></i>Maroc</p>
                    </div>
                </div>
                
                <div class="animal-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:-translate-y-2" data-habitat="savane" data-country="kenya" data-name="tembo elephant">
                    <img src="/placeholder.svg?height=250&width=400" alt="Éléphant" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg text-gray-800">Tembo</h3>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Savane</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-1">Éléphant d'Afrique</p>
                        <p class="text-xs text-gray-500"><i class="fas fa-map-marker-alt text-amber-600 mr-1"></i>Kenya</p>
                    </div>
                </div>
                
                <div class="animal-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:-translate-y-2" data-habitat="savane" data-country="tanzanie" data-name="twiga giraffe">
                    <img src="/placeholder.svg?height=250&width=400" alt="Girafe" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg text-gray-800">Twiga</h3>
                            <span class="bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded">Savane</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-1">Girafe de Masaï</p>
                        <p class="text-xs text-gray-500"><i class="fas fa-map-marker-alt text-amber-600 mr-1"></i>Tanzanie</p>
                    </div>
                </div>
                
                <div class="animal-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:-translate-y-2" data-habitat="foret" data-country="congo" data-name="koko gorilla">
                    <img src="/placeholder.svg?height=250&width=400" alt="Gorille" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg text-gray-800">Koko</h3>
                            <span class="bg-emerald-100 text-emerald-800 text-xs px-2 py-1 rounded">Forêt</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-1">Gorille des Montagnes</p>
                        <p class="text-xs text-gray-500"><i class="fas fa-map-marker-alt text-amber-600 mr-1"></i>Congo</p>
                    </div>
                </div>

                <div class="animal-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:-translate-y-2" data-habitat="savane" data-country="kenya" data-name="duma cheetah">
                    <img src="/placeholder.svg?height=250&width=400" alt="Guépard" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg text-gray-800">Duma</h3>
                            <span class="bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded">Savane</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-1">Guépard</p>
                        <p class="text-xs text-gray-500"><i class="fas fa-map-marker-alt text-amber-600 mr-1"></i>Kenya</p>
                    </div>
                </div>

                <div class="animal-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:-translate-y-2" data-habitat="savane" data-country="tanzanie" data-name="punda zebra">
                    <img src="/placeholder.svg?height=250&width=400" alt="Zèbre" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg text-gray-800">Punda</h3>
                            <span class="bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded">Savane</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-1">Zèbre des Plaines</p>
                        <p class="text-xs text-gray-500"><i class="fas fa-map-marker-alt text-amber-600 mr-1"></i>Tanzanie</p>
                    </div>
                </div>

                <div class="animal-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:-translate-y-2" data-habitat="jungle" data-country="congo" data-name="simba tiger">
                    <img src="/placeholder.svg?height=250&width=400" alt="Tigre" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg text-gray-800">Simba</h3>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Jungle</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-1">Tigre du Bengale</p>
                        <p class="text-xs text-gray-500"><i class="fas fa-map-marker-alt text-amber-600 mr-1"></i>Congo</p>
                    </div>
                </div>

                <div class="animal-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:-translate-y-2" data-habitat="savane" data-country="kenya" data-name="kifaru rhino">
                    <img src="/placeholder.svg?height=250&width=400" alt="Rhinocéros" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg text-gray-800">Kifaru</h3>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Savane</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-1">Rhinocéros Noir</p>
                        <p class="text-xs text-gray-500"><i class="fas fa-map-marker-alt text-amber-600 mr-1"></i>Kenya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ASSAD Special Section -->
    <div id="assad-section" class="py-16 bg-gradient-to-r from-amber-600 to-orange-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-5xl font-bold mb-6">Rencontrez ASSAD</h2>
                    <p class="text-xl mb-6 leading-relaxed">Le lion de l'Atlas, mascotte emblématique de la CAN 2025. ASSAD incarne la puissance, la fierté et l'esprit du football africain.</p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-2xl mt-1"></i>
                            <div>
                                <h4 class="font-bold text-lg">Symbole National</h4>
                                <p>Représente la force et la majesté du Maroc</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-2xl mt-1"></i>
                            <div>
                                <h4 class="font-bold text-lg">Espèce Protégée</h4>
                                <p>Lion de l'Atlas, espèce rare et menacée</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-2xl mt-1"></i>
                            <div>
                                <h4 class="font-bold text-lg">Ambassadeur CAN 2025</h4>
                                <p>Mascotte officielle de la compétition</p>
                            </div>
                        </div>
                    </div>
                    <a href="login.html" class="inline-block bg-white text-orange-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-amber-50 transition shadow-lg">
                        Réserver une Visite
                    </a>
                </div>
                <div class="relative">
                    <img src="/placeholder.svg?height=600&width=800" alt="ASSAD" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-white text-gray-800 p-6 rounded-xl shadow-xl">
                        <p class="text-3xl font-bold text-amber-600">ASSAD</p>
                        <p class="text-lg">Lion de l'Atlas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Visits Section -->
    <div id="visits-section" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Visites Guidées Virtuelles</h2>
                <p class="text-xl text-gray-600">Explorez notre zoo avec des guides passionnés</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-amber-500 hover:shadow-xl transition">
                    <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-sun text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Safari Matinal</h3>
                    <p class="text-gray-600 mb-4">Découvrez les animaux de la savane au lever du soleil</p>
                    <div class="space-y-2 text-sm text-gray-600 mb-6">
                        <p><i class="fas fa-clock text-amber-600 mr-2"></i>08:00 - 10:00</p>
                        <p><i class="fas fa-users text-amber-600 mr-2"></i>15 places max</p>
                        <p><i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>Zone Savane</p>
                    </div>
                    <a href="login.html" class="block text-center bg-amber-600 hover:bg-amber-700 text-white py-3 rounded-lg font-semibold transition">
                        Réserver
                    </a>
                </div>

                <div class="bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-amber-500 hover:shadow-xl transition">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-tree text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Aventure Jungle</h3>
                    <p class="text-gray-600 mb-4">Explorez les mystères de la forêt tropicale</p>
                    <div class="space-y-2 text-sm text-gray-600 mb-6">
                        <p><i class="fas fa-clock text-green-600 mr-2"></i>10:00 - 12:00</p>
                        <p><i class="fas fa-users text-green-600 mr-2"></i>12 places max</p>
                        <p><i class="fas fa-map-marker-alt text-green-600 mr-2"></i>Zone Jungle</p>
                    </div>
                    <a href="login.html" class="block text-center bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg font-semibold transition">
                        Réserver
                    </a>
                </div>

                <div class="bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-amber-500 hover:shadow-xl transition">
                    <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-crown text-orange-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Rencontre ASSAD</h3>
                    <p class="text-gray-600 mb-4">Visite exclusive avec le lion emblématique</p>
                    <div class="space-y-2 text-sm text-gray-600 mb-6">
                        <p><i class="fas fa-clock text-orange-600 mr-2"></i>14:00 - 15:30</p>
                        <p><i class="fas fa-users text-orange-600 mr-2"></i>8 places max</p>
                        <p><i class="fas fa-star text-orange-600 mr-2"></i>Expérience VIP</p>
                    </div>
                    <a href="login.html" class="block text-center bg-orange-600 hover:bg-orange-700 text-white py-3 rounded-lg font-semibold transition">
                        Réserver
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-gradient-to-br from-gray-800 to-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-4">Prêt pour l'aventure ?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Créez votre compte et commencez à explorer la faune africaine dès aujourd'hui</p>
            <a href="login.html" class="inline-block bg-amber-600 text-white px-10 py-4 rounded-lg font-bold text-lg hover:bg-amber-700 transition shadow-lg">
                Commencer maintenant
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-paw text-2xl text-amber-600"></i>
                        <span class="font-bold text-xl">Zoo ASSAD</span>
                    </div>
                    <p class="text-gray-400">Découvrez la faune africaine pour la CAN 2025</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Navigation</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#animals-section" class="hover:text-amber-600 transition">Animaux</a></li>
                        <li><a href="#visits-section" class="hover:text-amber-600 transition">Visites</a></li>
                        <li><a href="#assad-section" class="hover:text-amber-600 transition">ASSAD</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Compte</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="login.html" class="hover:text-amber-600 transition">Connexion</a></li>
                        <li><a href="dashboard.html" class="hover:text-amber-600 transition">Tableau de bord</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Réseaux Sociaux</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-amber-600 transition"><i class="fab fa-facebook text-2xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-amber-600 transition"><i class="fab fa-twitter text-2xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-amber-600 transition"><i class="fab fa-instagram text-2xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Zoo ASSAD - CAN 2025. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        function filterAnimals() {
            const searchTerm = document.getElementById('animal-search').value.toLowerCase();
            const habitatFilter = document.getElementById('habitat-filter').value.toLowerCase();
            const countryFilter = document.getElementById('country-filter').value.toLowerCase();
            const cards = document.querySelectorAll('.animal-card');

            cards.forEach(card => {
                const name = card.getAttribute('data-name').toLowerCase();
                const habitat = card.getAttribute('data-habitat').toLowerCase();
                const country = card.getAttribute('data-country').toLowerCase();

                const matchesSearch = name.includes(searchTerm);
                const matchesHabitat = habitatFilter === '' || habitat === habitatFilter;
                const matchesCountry = countryFilter === '' || country === countryFilter;

                if (matchesSearch && matchesHabitat && matchesCountry) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
