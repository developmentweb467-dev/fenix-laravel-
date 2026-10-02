<!DOCTYPE html>
<html lang="ar" dir="rtl" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FENIX LIVE | فينيكس لايف - الإنتاج والتريند</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script> 
   
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        fenix: {
                            dark: '#0B0C10',
                            card: '#151821',
                            red: '#FF2A4B',
                            orange: '#FF5E00',
                            gold: '#FFB800',
                            silver: '#E2E8F0',
                            accent: '#10B981'
                        }
                    },
                    fontFamily: {
                        cairo: ['Cairo', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts: Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- Alpine.js CDN -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { font-family: 'Cairo', sans-serif; }
        .text-metallic {
            background: linear-gradient(180deg, #FFFFFF 0%, #E2E8F0 45%, #94A3B8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .glow-red {
            box-shadow: 0 0 20px rgba(255, 42, 75, 0.4);
        }
        .custom-scrollbar::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #0B0C10;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #FF2A4B;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-fenix-dark text-white min-h-screen flex flex-col selection:bg-fenix-red selection:text-white"
      x-data="{ 
          searchOpen: false, 
          searchQuery: '',
          activeCategory: 'all',
          activeVideo: null,
          mobileMenuOpen: false,
          contactOpen: false,
          privacyOpen: false,
          contactFormSubmitted: false,
          articles: [
              { id: 1, category: 'trends', title: 'Fenix Production Live - تغطية حصرية وتصوير الحفلات والمهرجانات', tag: 'جديد', image: 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=800&q=80', views: '245.2K', isHot: true },
              { id: 2, category: 'interviews', title: 'أحدث الإنتاجات الموسيقية والحفلات المباشرة على قناة FENIX LIVE', tag: 'إنتاج', image: 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80', views: '188.1K', isHot: true },
              { id: 3, category: 'cinema', title: 'كواليس وأبرز لحظات البث المباشر - فينيكس لايف الفنية', tag: 'حفلات', image: 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?auto=format&fit=crop&w=800&q=80', views: '112.3K', isHot: true },
              { id: 4, category: 'backstage', title: 'أجواء ومهرجانات البث المباشر للفروق الموسيقية والفنانين', tag: 'كواليس', image: 'https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?auto=format&fit=crop&w=800&q=80', views: '90.0K', isHot: false },
              { id: 5, category: 'trends', title: 'أحدث الكليبات والمحتوى المرئي المباشر بدقة عالية', tag: 'تريند', image: 'https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=800&q=80', views: '73.7K', isHot: false },
              { id: 6, category: 'interviews', title: 'لقاءات خاصة وحصرية مع نجوم الفن والإنتاج المرئي', tag: 'مقابلات', image: 'https://images.unsplash.com/photo-1598899134739-24c46f58b8c0?auto=format&fit=crop&w=800&q=80', views: '304K', isHot: true }
          ]
      }">

    <!-- Sticky Navigation Bar -->
    <header class="sticky top-0 z-40 bg-fenix-dark/95 backdrop-blur-md border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo Component -->
                <a href="#" class="flex items-center gap-2 group">
                    <div class="relative flex flex-col items-center">
                        <div class="flex items-center gap-1.5">
                            <span class="text-2xl sm:text-3xl font-black text-metallic uppercase tracking-wider font-sans drop-shadow-md">FENIX</span>
                            <!-- Multicolor Phoenix SVG -->
                            <svg class="w-8 h-8 transform group-hover:scale-110 transition duration-300" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 80C30 85 45 70 52 50C58 30 72 15 88 10C72 25 68 45 58 60C48 75 32 85 15 80Z" fill="url(#phoenixGrad1)" />
                                <path d="M8 60C22 65 38 50 45 35C52 20 68 10 82 5C68 18 60 35 50 48C40 60 22 68 8 60Z" fill="url(#phoenixGrad2)" />
                                <circle cx="52" cy="42" r="4" fill="#FFB800" />
                                <defs>
                                    <linearGradient id="phoenixGrad1" x1="15" y1="80" x2="88" y2="10" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF2A4B" />
                                        <stop offset="0.5" stop-color="#FF5E00" />
                                        <stop offset="1" stop-color="#FFB800" />
                                    </linearGradient>
                                    <linearGradient id="phoenixGrad2" x1="8" y1="60" x2="82" y2="5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00F0FF" />
                                        <stop offset="0.5" stop-color="#FF2A4B" />
                                        <stop offset="1" stop-color="#10B981" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        
                        <!-- Glowing Red Lens Bracket + LIVE Text -->
                        <div class="relative border-2 border-fenix-red px-3 py-0.5 rounded-sm flex items-center justify-center -mt-1 shadow-[0_0_12px_rgba(255,42,75,0.6)] w-full">
                            <span class="w-2 h-2 rounded-full bg-fenix-red animate-ping absolute top-1/2 -translate-y-1/2 right-2"></span>
                            <span class="w-2 h-2 rounded-full bg-fenix-red absolute top-1/2 -translate-y-1/2 right-2"></span>
                            <span class="text-xs sm:text-sm font-black tracking-widest text-white uppercase font-sans pr-2">LIVE</span>
                            <div class="absolute -left-2.5 top-1/2 -translate-y-1/2 w-0 h-0 border-t-4 border-t-transparent border-b-4 border-b-transparent border-r-6 border-r-fenix-red"></div>
                        </div>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center gap-8 font-semibold text-gray-300">
                    <a href="#hero" class="hover:text-fenix-red transition duration-200 text-white">الرئيسية</a>
                    <a href="#latest" class="hover:text-fenix-red transition duration-200">أحدث الأخبار</a>
                    <a href="#trending" class="hover:text-fenix-red transition duration-200">الأكثر مشاهدة</a>
                    <a href="#about" class="hover:text-fenix-red transition duration-200">عن فينيكس</a>
                    <button @click="contactOpen = true" class="hover:text-fenix-red transition duration-200">تواصل معنا</button>
                </nav>

                <!-- Header Actions -->
                <div class="flex items-center gap-4">
                    <button @click="searchOpen = !searchOpen" class="p-2.5 rounded-full bg-fenix-card hover:bg-gray-800 text-gray-300 hover:text-white transition">
                        <i class="fa-solid fa-magnifying-glass text-lg"></i>
                    </button>

                    <a href="https://www.youtube.com/@fenixproductionlive" target="_blank" rel="noopener" class="hidden sm:flex items-center gap-2 bg-gradient-to-r from-fenix-red to-fenix-orange text-white text-xs font-bold px-3.5 py-1.5 rounded-full glow-red uppercase animate-pulse">
                        <span class="w-2 h-2 bg-white rounded-full"></span>
                        بث مباشر
                    </a>

                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-gray-300 hover:text-white">
                        <i class="fa-solid" :class="mobileMenuOpen ? 'fa-xmark text-2xl' : 'fa-bars text-2xl'"></i>
                    </button>
                </div>
            </div>

            <!-- Search Drawer -->
            <div x-show="searchOpen" x-transition class="py-4 border-t border-gray-800">
                <div class="relative">
                    <input type="text" x-model="searchQuery" placeholder="ابحث في فيديوهات وانتاجات Fenix Production Live..." class="w-full bg-fenix-card text-white px-5 py-3 pr-12 rounded-xl focus:outline-none focus:ring-2 focus:ring-fenix-red text-sm">
                    <i class="fa-solid fa-magnifying-glass absolute top-1/2 -translate-y-1/2 right-4 text-gray-400"></i>
                </div>
            </div>

            <!-- Mobile Drawer Menu -->
            <div x-show="mobileMenuOpen" x-transition class="md:hidden py-4 border-t border-gray-800 space-y-3">
                <a href="#hero" @click="mobileMenuOpen = false" class="block py-2 text-gray-300 hover:text-fenix-red font-semibold">الرئيسية</a>
                <a href="#latest" @click="mobileMenuOpen = false" class="block py-2 text-gray-300 hover:text-fenix-red font-semibold">أحدث الأخبار</a>
                <a href="#trending" @click="mobileMenuOpen = false" class="block py-2 text-gray-300 hover:text-fenix-red font-semibold">الأكثر مشاهدة</a>
                <a href="#about" @click="mobileMenuOpen = false" class="block py-2 text-gray-300 hover:text-fenix-red font-semibold">عن فينيكس</a>
                <button @click="contactOpen = true; mobileMenuOpen = false" class="block py-2 text-gray-300 hover:text-fenix-red font-semibold text-right w-full">تواصل معنا</button>
                <button @click="privacyOpen = true; mobileMenuOpen = false" class="block py-2 text-gray-300 hover:text-fenix-red font-semibold text-right w-full">سياسة الخصوصية</button>
            </div>
        </div>
    </header>

    <!-- Ticker Banner -->
    <div class="bg-gradient-to-r from-fenix-red via-fenix-orange to-fenix-red text-white py-2 overflow-hidden shadow-lg">
        <div class="max-w-7xl mx-auto px-4 flex items-center gap-3">
            <span class="bg-black/40 text-xs font-black px-2.5 py-1 rounded tracking-wider uppercase shrink-0">مباشر</span>
            <div class="text-xs sm:text-sm font-semibold truncate">
                متابعة قناة FENIX PRODUCTION LIVE الرسمية لمشاهدة التغطيات والمهرجانات الحصرية!
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-16">

        <!-- Hero Section -->
        <section id="hero" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 relative group rounded-3xl overflow-hidden bg-fenix-card h-[420px] sm:h-[500px] border border-gray-800 shadow-2xl">
                <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=1200&q=80" alt="Fenix Production Featured" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                
                <div class="absolute top-4 right-4 flex gap-2">
                    <span class="bg-fenix-red text-white font-bold text-xs px-3 py-1 rounded-full uppercase">FENIX LIVE OFFICIAL</span>
                </div>

                <div class="absolute bottom-0 p-6 sm:p-8 space-y-3 w-full">
                    <div class="flex items-center gap-2 text-fenix-orange font-bold text-sm">
                        <i class="fa-brands fa-youtube"></i>
                        <span>قناة Fenix Production Live الرسمية</span>
                    </div>
                    <h1 class="text-2xl sm:text-4xl font-black text-white leading-tight">
                        شاهد أحدث الإنتاجات والتغطيات المباشرة لأضخم المهرجانات والحفلات
                    </h1>
                    <p class="text-gray-300 text-sm sm:text-base line-clamp-2">
                        تابع جميع الفيديوهات الحصرية والبث المباشر فور نزولها على القناة الرسمية.
                    </p>
                    <div class="pt-2 flex items-center gap-4">
                        <a href="https://www.youtube.com/@fenixproductionlive" target="_blank" rel="noopener" class="bg-fenix-red hover:bg-red-600 text-white font-bold px-6 py-2.5 rounded-full flex items-center gap-2 transition glow-red">
                            <i class="fa-brands fa-youtube"></i>
                            زيارة القناة على YouTube
                        </a>
                    </div>
                </div>
            </div>

            <!-- Side Highlights -->
            <div class="flex flex-col gap-6 h-[420px] sm:h-[500px]">
                <div class="relative flex-1 rounded-2xl overflow-hidden bg-fenix-card border border-gray-800 group">
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 p-4 space-y-1">
                        <span class="text-xs text-fenix-gold font-bold">إنتاج حي</span>
                        <h3 class="text-base font-bold text-white line-clamp-2">تغطية تصوير الفيديو كليب والحفلات المباشرة</h3>
                    </div>
                </div>

                <div class="relative flex-1 rounded-2xl overflow-hidden bg-fenix-card border border-gray-800 group">
                    <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 p-4 space-y-1">
                        <span class="text-xs text-fenix-red font-bold">بث مباشر</span>
                        <h3 class="text-base font-bold text-white line-clamp-2">أعلى مستويات الجودة في الإنتاج المرئي</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest Articles Grid -->
        <section id="latest" class="space-y-6">
            <div class="flex items-center justify-between border-b border-gray-800 pb-4 overflow-x-auto custom-scrollbar">
                <h2 class="text-xl font-black text-white flex items-center gap-2 shrink-0">
                    <i class="fa-solid fa-newspaper text-fenix-red"></i>
                    أحدث الأخبار والإنتاجات
                </h2>
                <div class="flex items-center gap-3">
                    <button @click="activeCategory = 'all'" :class="activeCategory === 'all' ? 'bg-fenix-red text-white' : 'bg-fenix-card text-gray-400 hover:text-white'" class="px-4 py-1.5 rounded-full font-bold text-xs transition whitespace-nowrap">الكل</button>
                    <button @click="activeCategory = 'trends'" :class="activeCategory === 'trends' ? 'bg-fenix-red text-white' : 'bg-fenix-card text-gray-400 hover:text-white'" class="px-4 py-1.5 rounded-full font-bold text-xs transition whitespace-nowrap">إصدارات جديدة</button>
                    <button @click="activeCategory = 'interviews'" :class="activeCategory === 'interviews' ? 'bg-fenix-red text-white' : 'bg-fenix-card text-gray-400 hover:text-white'" class="px-4 py-1.5 rounded-full font-bold text-xs transition whitespace-nowrap">لقاءات</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="item in articles" :key="item.id">
                    <div x-show="(activeCategory === 'all' || item.category === activeCategory) && (searchQuery === '' || item.title.includes(searchQuery))" 
                         x-transition 
                         class="bg-fenix-card rounded-2xl overflow-hidden border border-gray-800 hover:border-fenix-red transition duration-300 flex flex-col group">
                        
                        <div class="relative h-48 overflow-hidden">
                            <img :src="item.image" :alt="item.title" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <span class="absolute top-3 right-3 bg-black/70 backdrop-blur-md text-white text-xs font-bold px-3 py-1 rounded-full" x-text="item.tag"></span>
                            
                            <a href="https://www.youtube.com/@fenixproductionlive" target="_blank" rel="noopener" class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-3xl">
                                <i class="fa-solid fa-circle-play text-fenix-red bg-white rounded-full"></i>
                            </a>
                        </div>

                        <div class="p-5 flex flex-col flex-grow justify-between space-y-4">
                            <h3 class="text-base font-bold text-white group-hover:text-fenix-red transition line-clamp-2" x-text="item.title"></h3>
                            
                            <div class="flex items-center justify-between text-xs text-gray-400 border-t border-gray-800/80 pt-3">
                                <span class="flex items-center gap-1"><i class="fa-solid fa-eye"></i> <span x-text="item.views"></span></span>
                                <span class="flex items-center gap-1"><i class="fa-brands fa-youtube text-red-500"></i> Fenix Production</span>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </section>

        <!-- DEDICATED WORKING TRENDING SECTION (الأكثر مشاهدة) -->
        <section id="trending" class="space-y-6 pt-4">
            <div class="flex items-center justify-between border-b border-gray-800 pb-4">
                <h2 class="text-2xl font-black text-white flex items-center gap-2">
                    <i class="fa-solid fa-fire text-fenix-orange animate-bounce"></i>
                    الأكثر مشاهدة (Top Trending)
                </h2>
                <a href="https://www.youtube.com/@fenixproductionlive" target="_blank" class="text-xs text-fenix-gold font-bold hover:underline">مشاهدة الكل على يوتيوب ←</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Top Trend Card 1 -->
                <div class="bg-fenix-card rounded-2xl overflow-hidden border border-gray-800 hover:border-fenix-orange transition duration-300 group flex flex-col">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1598899134739-24c46f58b8c0?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <span class="absolute top-3 right-3 bg-fenix-orange text-white text-xs font-black px-3 py-1 rounded-full">🔥 #1 الأكثر مشاهدة</span>
                        <a href="https://www.youtube.com/@fenixproductionlive" target="_blank" class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-4xl">
                            <i class="fa-solid fa-circle-play text-fenix-red bg-white rounded-full"></i>
                        </a>
                    </div>
                    <div class="p-5 space-y-3">
                        <h3 class="text-lg font-bold text-white group-hover:text-fenix-orange transition line-clamp-2">لقاءات خاصة وحصرية مع نجوم الفن والإنتاج المرئي</h3>
                        <div class="flex items-center justify-between text-xs text-gray-400 pt-2 border-t border-gray-800">
                            <span><i class="fa-solid fa-eye text-fenix-gold ml-1"></i> 304K مشاهدة</span>
                            <span>FENIX LIVE</span>
                        </div>
                    </div>
                </div>

                <!-- Top Trend Card 2 -->
                <div class="bg-fenix-card rounded-2xl overflow-hidden border border-gray-800 hover:border-fenix-orange transition duration-300 group flex flex-col">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <span class="absolute top-3 right-3 bg-fenix-orange text-white text-xs font-black px-3 py-1 rounded-full">🔥 #2 الأكثر مشاهدة</span>
                        <a href="https://www.youtube.com/@fenixproductionlive" target="_blank" class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-4xl">
                            <i class="fa-solid fa-circle-play text-fenix-red bg-white rounded-full"></i>
                        </a>
                    </div>
                    <div class="p-5 space-y-3">
                        <h3 class="text-lg font-bold text-white group-hover:text-fenix-orange transition line-clamp-2">Fenix Production Live - تغطية حصرية وتصوير الحفلات</h3>
                        <div class="flex items-center justify-between text-xs text-gray-400 pt-2 border-t border-gray-800">
                            <span><i class="fa-solid fa-eye text-fenix-gold ml-1"></i> 245.2K مشاهدة</span>
                            <span>FENIX LIVE</span>
                        </div>
                    </div>
                </div>

                <!-- Top Trend Card 3 -->
                <div class="bg-fenix-card rounded-2xl overflow-hidden border border-gray-800 hover:border-fenix-orange transition duration-300 group flex flex-col">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <span class="absolute top-3 right-3 bg-fenix-orange text-white text-xs font-black px-3 py-1 rounded-full">🔥 #3 الأكثر مشاهدة</span>
                        <a href="https://www.youtube.com/@fenixproductionlive" target="_blank" class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-4xl">
                            <i class="fa-solid fa-circle-play text-fenix-red bg-white rounded-full"></i>
                        </a>
                    </div>
                    <div class="p-5 space-y-3">
                        <h3 class="text-lg font-bold text-white group-hover:text-fenix-orange transition line-clamp-2">أحدث الإنتاجات الموسيقية والحفلات المباشرة</h3>
                        <div class="flex items-center justify-between text-xs text-gray-400 pt-2 border-t border-gray-800">
                            <span><i class="fa-solid fa-eye text-fenix-gold ml-1"></i> 188.1K مشاهدة</span>
                            <span>FENIX LIVE</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Contact Us Modal -->
    <div x-show="contactOpen" x-transition.opacity class="fixed inset-0 z-50 bg-black/80 backdrop-blur-md flex items-center justify-center p-4">
        <div class="relative w-full max-w-lg bg-fenix-card rounded-3xl border border-gray-800 p-6 sm:p-8 space-y-6 shadow-2xl" @click.outside="contactOpen = false">
            <button @click="contactOpen = false" class="absolute top-4 left-4 text-gray-400 hover:text-white transition">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </button>

            <div class="space-y-2">
                <h3 class="text-2xl font-black text-white flex items-center gap-2">
                    <i class="fa-solid fa-envelope text-fenix-red"></i>
                    تواصل مع فينيكس لايف
                </h3>
                <p class="text-gray-400 text-sm">يسعدنا استقبال استفساراتكم، مقترحاتكم، والتغطيات الإنتاجية.</p>
            </div>

            <template x-if="!contactFormSubmitted">
                <form @submit.prevent="contactFormSubmitted = true" class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-300 mb-1">الاسم الكامل</label>
                        <input type="text" required class="w-full bg-fenix-dark text-white rounded-xl px-4 py-2.5 border border-gray-800 focus:border-fenix-red focus:outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-300 mb-1">البريد الإلكتروني</label>
                        <input type="email" required class="w-full bg-fenix-dark text-white rounded-xl px-4 py-2.5 border border-gray-800 focus:border-fenix-red focus:outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-300 mb-1">الرسالة / استفسار إنتاجي</label>
                        <textarea rows="4" required class="w-full bg-fenix-dark text-white rounded-xl px-4 py-2.5 border border-gray-800 focus:border-fenix-red focus:outline-none text-sm"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-fenix-red to-fenix-orange text-white font-bold py-3 rounded-xl glow-red hover:opacity-95 transition">
                        إرسال الرسالة
                    </button>
                </form>
            </template>

            <template x-if="contactFormSubmitted">
                <div class="text-center py-8 space-y-4">
                    <div class="w-16 h-16 bg-fenix-accent/20 text-fenix-accent rounded-full flex items-center justify-center mx-auto text-2xl">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white">تم إرسال رسالتك بنجاح!</h4>
                    <p class="text-gray-400 text-sm">سيقوم فريق FENIX LIVE بالتواصل معك قريباً.</p>
                    <button @click="contactOpen = false; contactFormSubmitted = false" class="bg-gray-800 text-white px-6 py-2 rounded-xl text-sm font-bold">إغلاق</button>
                </div>
            </template>
        </div>
    </div>

    <!-- Privacy Policy Modal -->
    <div x-show="privacyOpen" x-transition.opacity class="fixed inset-0 z-50 bg-black/80 backdrop-blur-md flex items-center justify-center p-4">
        <div class="relative w-full max-w-2xl bg-fenix-card rounded-3xl border border-gray-800 p-6 sm:p-8 space-y-6 shadow-2xl max-h-[85vh] overflow-y-auto custom-scrollbar" @click.outside="privacyOpen = false">
            <button @click="privacyOpen = false" class="absolute top-4 left-4 text-gray-400 hover:text-white transition">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </button>

            <div class="space-y-2 border-b border-gray-800 pb-4">
                <h3 class="text-2xl font-black text-white flex items-center gap-2">
                    <i class="fa-solid fa-shield-halved text-fenix-gold"></i>
                    سياسة الخصوصية (Privacy Policy)
                </h3>
                <p class="text-xs text-gray-400">آخر تحديث: 2026</p>
            </div>

            <div class="space-y-4 text-gray-300 text-sm leading-relaxed">
                <p>تلتزم منصة **FENIX LIVE** بحماية خصوصيتك واحترام بياناتك الشخصية عند استخدام موقعنا والتفاعل مع محتوانا المرئي والإعلامي.</p>
                
                <h4 class="text-white font-bold text-base">1. جمع البيانات</h4>
                <p>قد نجمع بعض المعلومات الأساسية مثل عنوان IP وطبيعة التفاعل مع الفيديوهات والمحتوى لمساعدتنا في تطوير تجربة المستخدم.</p>

                <h4 class="text-white font-bold text-base">2. ملفات تعريف الارتباط (Cookies)</h4>
                <p>نستخدم ملفات الارتباط لتحسين سرعة التصفح وتذكر تفضيلاتك في خيارات الفيديو والعرض.</p>

                <h4 class="text-white font-bold text-base">3. حماية البيانات والأمان</h4>
                <p>نستخدم بروتوكولات أمان معتمدة لحماية كافة البيانات، ولن يتم مشاركة بياناتك الشخصية مع أي طرف ثالث دون موافقتك الصريحة.</p>
            </div>

            <div class="pt-4 border-t border-gray-800 text-left">
                <button @click="privacyOpen = false" class="bg-fenix-red text-white px-6 py-2 rounded-xl text-sm font-bold">موافق وإغلاق</button>
            </div>
        </div>
    </div>

    <!-- Footer / About Us (All Exact Requested Links Included) -->
    <footer id="about" class="bg-fenix-card border-t border-gray-800 mt-20 pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="bg-fenix-dark/80 rounded-3xl p-8 sm:p-12 border border-gray-800 text-center max-w-4xl mx-auto space-y-6 shadow-xl">
                
                <!-- Logo -->
                <div class="flex flex-col items-center justify-center gap-1">
                    <div class="flex items-center gap-2">
                        <span class="text-3xl font-black text-metallic uppercase tracking-wider">FENIX</span>
                        <svg class="w-8 h-8" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 80C30 85 45 70 52 50C58 30 72 15 88 10C72 25 68 45 58 60C48 75 32 85 15 80Z" fill="url(#phoenixGrad1_ft)" />
                            <path d="M8 60C22 65 38 50 45 35C52 20 68 10 82 5C68 18 60 35 50 48C40 60 22 68 8 60Z" fill="url(#phoenixGrad2_ft)" />
                            <defs>
                                <linearGradient id="phoenixGrad1_ft" x1="15" y1="80" x2="88" y2="10" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF2A4B" />
                                    <stop offset="0.5" stop-color="#FF5E00" />
                                    <stop offset="1" stop-color="#FFB800" />
                                </linearGradient>
                                <linearGradient id="phoenixGrad2_ft" x1="8" y1="60" x2="82" y2="5" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#00F0FF" />
                                    <stop offset="0.5" stop-color="#FF2A4B" />
                                    <stop offset="1" stop-color="#10B981" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="border-2 border-fenix-red px-4 py-0.5 rounded-sm">
                        <span class="text-xs font-black tracking-widest text-white uppercase font-sans">LIVE</span>
                    </div>
                </div>

                <h2 class="text-2xl font-black text-white">عن منصة فينيكس لايف (About FENIX LIVE)</h2>
                
                <p class="text-gray-300 leading-relaxed text-sm sm:text-base max-w-2xl mx-auto">
                    منصة **FENIX LIVE** هي منصة الترفيه والإنتاج الحي، المهرجانات، والتريند. نضعك في قلب الحدث عبر تغطيات الإنتاجات المباشرة والحفلات الغنائية بدقة عالية.
                </p>

                <div class="pt-6 border-t border-gray-800 space-y-4">
                    <p class="text-fenix-gold font-bold text-sm">تابع منصاتنا الرسمية والتواصل الاجتماعي عبر الروابط التالية:</p>
                    
                    <!-- Exact Social, Web & Streaming Links Grid -->
                    <div class="flex items-center justify-center gap-3 sm:gap-4 flex-wrap">
                        
                        <!-- Official Website -->
                        <a href="https://fenixproduction.live" target="_blank" rel="noopener" aria-label="Website" class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-fenix-card border border-gray-700 text-gray-200 hover:bg-fenix-red hover:text-white hover:border-fenix-red transition duration-300 shadow-md font-bold text-xs">
                            <i class="fa-solid fa-globe text-sm"></i>
                            <span>الموقع الرسمي</span>
                        </a>

                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@fenixproductionlive" target="_blank" rel="noopener" aria-label="YouTube" class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-fenix-card border border-gray-700 text-red-500 hover:bg-red-600 hover:text-white hover:border-red-600 transition duration-300 shadow-md font-bold text-xs">
                            <i class="fa-brands fa-youtube text-sm"></i>
                            <span>YouTube</span>
                        </a>

                        <!-- Instagram -->
                        <a href="https://instagram.com/fenix_production_lb" target="_blank" rel="noopener" aria-label="Instagram" class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-fenix-card border border-gray-700 text-pink-500 hover:bg-pink-600 hover:text-white hover:border-pink-600 transition duration-300 shadow-md font-bold text-xs">
                            <i class="fa-brands fa-instagram text-sm"></i>
                            <span>Instagram</span>
                        </a>

                        <!-- Facebook -->
                        <a href="https://facebook.com/fenix.production.lb" target="_blank" rel="noopener" aria-label="Facebook" class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-fenix-card border border-gray-700 text-blue-500 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition duration-300 shadow-md font-bold text-xs">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                            <span>Facebook</span>
                        </a>

                        <!-- SoundCloud -->
                        <a href="https://soundcloud.com/fenix-production" target="_blank" rel="noopener" aria-label="SoundCloud" class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-fenix-card border border-gray-700 text-orange-500 hover:bg-orange-600 hover:text-white hover:border-orange-600 transition duration-300 shadow-md font-bold text-xs">
                            <i class="fa-brands fa-soundcloud text-sm"></i>
                            <span>SoundCloud</span>
                        </a>

                        <!-- Anghami -->
                        <a href="https://play.anghami.com/profile/12618045" target="_blank" rel="noopener" aria-label="Anghami" class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-fenix-card border border-gray-700 text-purple-400 hover:bg-purple-600 hover:text-white hover:border-purple-600 transition duration-300 shadow-md font-bold text-xs">
                            <i class="fa-solid fa-music text-sm"></i>
                            <span>Anghami</span>
                        </a>

                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="flex flex-col sm:flex-row items-center justify-between text-gray-500 text-xs border-t border-gray-800/60 pt-8 gap-4">
                <p>© 2026 FENIX LIVE. جميع الحقوق محفوظة لـ فينيكس لايف.</p>
                <div class="flex items-center gap-6">
                    <button @click="contactOpen = true" class="hover:text-white transition">تواصل معنا</button>
                    <button @click="privacyOpen = true" class="hover:text-white transition">سياسة الخصوصية</button>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>  