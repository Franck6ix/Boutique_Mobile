<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeWatch - Montre Élégante</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'luxe-gold': '#D4AF37',
                        'luxe-black': '#1a1a1a',
                        'luxe-gray': '#2d2d2d'
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(30px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-luxe-black via-luxe-gray to-black min-h-screen text-white">
    <!-- Navigation -->
    <nav class="glass-effect rounded-2xl mx-4 mt-4 p-4 max-w-7xl mx-auto">
        <div class="flex justify-between items-center">
            <div class="text-2xl font-bold text-luxe-gold">LUXE<span class="text-white">WATCH</span></div>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-luxe-gold transition-colors">Boutique</a>
                <a href="#" class="hover:text-luxe-gold transition-colors">Collections</a>
                <a href="#" class="hover:text-luxe-gold transition-colors">À propos</a>
                <a href="#" class="hover:text-luxe-gold transition-colors">Contact</a>
            </div>
            <div class="flex space-x-4">
                <button class="p-2 hover:text-luxe-gold transition-colors">
                    <i class="fas fa-search"></i>
                </button>
                <button class="p-2 hover:text-luxe-gold transition-colors">
                    <i class="fas fa-shopping-bag"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Produit Principal -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center animate-fade-in">
            
            <!-- Gallery Images -->
            <div class="space-y-6">
                <!-- Image Principale -->
                <div class="bg-gradient-to-br from-gray-900 to-black rounded-3xl p-8 relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-r from-luxe-gold/10 to-transparent opacity-50"></div>
                    <img 
                        src="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1280&q=80" 
                        alt="Montre de luxe Élégance Or" 
                        class="w-full h-96 object-contain transform group-hover:scale-105 transition-transform duration-700"
                    >
                    <!-- Badge Nouveauté -->
                    <div class="absolute top-6 left-6">
                        <span class="bg-luxe-gold text-black px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                            NOUVEAU
                        </span>
                    </div>
                </div>

                <!-- Miniatures -->
                <div class="grid grid-cols-4 gap-4">
                    <div class="bg-gray-800 rounded-xl p-3 cursor-pointer border-2 border-luxe-gold/30 hover:border-luxe-gold transition-all">
                        <img src="https://images.unsplash.com/photo-1547996160-81dfd9c4b1b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             class="w-full h-20 object-cover rounded-lg">
                    </div>
                    <div class="bg-gray-800 rounded-xl p-3 cursor-pointer border-2 border-transparent hover:border-luxe-gold transition-all">
                        <img src="https://images.unsplash.com/photo-1587836374828-4dbafa94cf0e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             class="w-full h-20 object-cover rounded-lg">
                    </div>
                    <div class="bg-gray-800 rounded-xl p-3 cursor-pointer border-2 border-transparent hover:border-luxe-gold transition-all">
                        <img src="https://images.unsplash.com/photo-1612817159949-195b6eb9e31a?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             class="w-full h-20 object-cover rounded-lg">
                    </div>
                    <div class="bg-gray-800 rounded-xl p-3 cursor-pointer border-2 border-transparent hover:border-luxe-gold transition-all">
                        <img src="https://images.unsplash.com/photo-1611591437281-460bfbe1220a?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             class="w-full h-20 object-cover rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Détails Produit -->
            <div class="space-y-8 animate-slide-up">
                <!-- Titre et Collection -->
                <div>
                    <span class="text-luxe-gold font-semibold">COLLECTION PRESTIGE</span>
                    <h1 class="text-5xl font-bold mt-2 bg-gradient-to-r from-white to-luxe-gold bg-clip-text text-transparent">
                        Élégance Or
                    </h1>
                    <p class="text-gray-400 mt-4 text-lg">
                        Une montre exceptionnelle alliant tradition horlogère et design contemporain. 
                        Pièce unique pour les esprits raffinés.
                    </p>
                </div>

                <!-- Prix et Promotion -->
                <div class="flex items-center space-x-4">
                    <span class="text-4xl font-bold text-luxe-gold">{{ $product->price }}</span>
                    <span class="text-xl text-gray-400 line-through">{{ $product->price }}</span>
                    <span class="bg-red-500/20 text-red-400 px-3 py-1 rounded-full text-sm font-bold">
                        ÉCONOMISEZ 500€
                    </span>
                </div>

                <!-- Options -->
                <div class="space-y-4">
                    <div>
                        <h3 class="font-semibold mb-3">Cadran</h3>
                        <div class="flex space-x-3">
                            <button class="w-12 h-12 bg-black rounded-full border-2 border-luxe-gold"></button>
                            <button class="w-12 h-12 bg-blue-900 rounded-full border-2 border-gray-600"></button>
                            <button class="w-12 h-12 bg-green-900 rounded-full border-2 border-gray-600"></button>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-semibold mb-3">Bracelet</h3>
                        <div class="flex space-x-3">
                            <button class="px-4 py-2 bg-luxe-gold text-black rounded-lg font-semibold">Cuir</button>
                            <button class="px-4 py-2 bg-gray-700 rounded-lg font-semibold border border-gray-600">Acier</button>
                            <button class="px-4 py-2 bg-gray-700 rounded-lg font-semibold border border-gray-600">Tissu</button>
                        </div>
                    </div>
                </div>

                <!-- Quantité et Bouton -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <span class="font-semibold">Quantité:</span>
                        <div class="flex items-center space-x-3 bg-gray-800 rounded-lg px-4 py-2">
                            <button class="text-luxe-gold hover:text-white transition-colors">
                                <i class="fas fa-minus"></i>
                            </button>
                            <span class="font-bold text-lg">1</span>
                            <button class="text-luxe-gold hover:text-white transition-colors">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Bouton Principal -->
                    <button class="w-full bg-gradient-to-r from-luxe-gold to-yellow-600 text-black font-bold py-4 px-8 rounded-xl text-lg hover:from-yellow-500 hover:to-luxe-gold transform hover:scale-105 transition-all duration-300 shadow-2xl shadow-luxe-gold/30 flex items-center justify-center space-x-3">
                        <i class="fas fa-bolt"></i>
                        <span>AJOUTER AU PANIER - 2 499€</span>
                    </button>

                    <!-- Bouton Secondaire -->
                    <button class="w-full glass-effect font-bold py-4 px-8 rounded-xl text-lg hover:bg-white/20 transition-all duration-300 border border-white/20 flex items-center justify-center space-x-3">
                        <i class="far fa-heart"></i>
                        <span>AJOUTER À LA LISTE DE SOUHAITS</span>
                    </button>
                </div>

                <!-- Garanties -->
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-gray-700">
                    <div class="text-center">
                        <i class="fas fa-shield-alt text-luxe-gold text-2xl mb-2"></i>
                        <p class="text-sm font-semibold">Garantie 5 ans</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-shipping-fast text-luxe-gold text-2xl mb-2"></i>
                        <p class="text-sm font-semibold">Livraison gratuite</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-undo-alt text-luxe-gold text-2xl mb-2"></i>
                        <p class="text-sm font-semibold">Retour 30 jours</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Caractéristiques -->
        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="glass-effect rounded-2xl p-6 text-center">
                <i class="fas fa-gem text-luxe-gold text-3xl mb-4"></i>
                <h3 class="font-bold text-lg mb-2">Mouvement Suisse</h3>
                <p class="text-gray-400">Mécanisme automatique de précision certifié COSC</p>
            </div>
            <div class="glass-effect rounded-2xl p-6 text-center">
                <i class="fas fa-tint text-luxe-gold text-3xl mb-4"></i>
                <h3 class="font-bold text-lg mb-2">Étanchéité</h3>
                <p class="text-gray-400">Résiste jusqu'à 100m de profondeur</p>
            </div>
            <div class="glass-effect rounded-2xl p-6 text-center">
                <i class="fas fa-award text-luxe-gold text-3xl mb-4"></i>
                <h3 class="font-bold text-lg mb-2">Certification</h3>
                <p class="text-gray-400">Or 18 carats certifié responsabilité</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black/50 mt-20 py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="text-2xl font-bold text-luxe-gold mb-4">LUXE<span class="text-white">WATCH</span></div>
            <p class="text-gray-400">L'excellence horlogère depuis 1895</p>
            <div class="flex justify-center space-x-6 mt-6">
                <a href="#" class="text-gray-400 hover:text-luxe-gold transition-colors">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-luxe-gold transition-colors">
                    <i class="fab fa-facebook text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-luxe-gold transition-colors">
                    <i class="fab fa-twitter text-xl"></i>
                </a>
            </div>
        </div>
    </footer>

    <script>
        // Animation au scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'slideUp 0.6s ease-out forwards';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.glass-effect').forEach((el) => {
            observer.observe(el);
        });
    </script>
</body>
</html>