<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confecciones Isangeles - Juegos de Cuna y Accesorios de Alta Calidad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Overlock:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/isangeles/public/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="font-sans text-gray-800">
    <!-- Header -->
    <header class="fixed w-full z-50 transition-all duration-300">
        <div class="container mx-auto py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="text-3xl text-red-800">
                        <i class="fas fa-angel"></i>
                    </div>
                    <!-- agregar logo -->
                    <img src="/isangeles/public/img/Isangeles_Logo_Gold.png" alt="Logo" class="logo h-20">
                    <h1 class="text-xl font-bold">Confecciones <span class="text-red-800">Isangeles</span></h1>
                </div>

                <!-- Menú de navegación -->
                <nav class="hidden md:block">
                    <ul class="flex space-x-6">
                        <li><a href="#inicio" class="hover:text-red-800 transition">Inicio</a></li>
                        <li><a href="#nosotros" class="hover:text-red-800 transition">Nosotros</a></li>
                        <li><a href="#servicios" class="hover:text-red-800 transition">Servicios</a></li>
                        <li><a href="#galeria" class="hover:text-red-800 transition">Galería</a></li>
                        <li><a href="#contacto"
                                class="bg-red-800 text-white px-4 py-2 rounded-full hover:bg-amber-700 transition">Contacto</a>
                        </li>
                    </ul>
                </nav>

                <!-- Menú móvil -->
                <button class="md:hidden text-2xl text-red-800">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="hero-section pt-48 pb-64 relative">
        <div class="hero-overlay absolute inset-0"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-2xl text-center md:text-start text-white">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Juegos de Cuna Hechos con Amor y Excelencia</h2>
                <p class="text-xl mb-8">Productos artesanales de alta calidad, confeccionados con los mejores materiales
                    para el bienestar de tu bebé.</p>
                <div class="flex sm:flex-row gap-4 md:block justify-center">
                    <a href="#contacto"
                        class="bg-white text-red-800 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Haz
                        tu pedido</a>
                    <a href="#galeria"
                        class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-red-800 transition">Ver
                        trabajos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="nosotros" class="py-20 bg-amber-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-red-800 mb-4">Sobre Nosotros</h2>
                <div class="w-20 h-1 bg-red-800 mx-auto"></div>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-bold mb-6">Artesanía y dedicación en cada detalle</h3>
                    <p class="mb-4">Confecciones Isangeles nace del amor por la artesanía textil y el deseo de crear
                        productos únicos para los más pequeños. Cada pieza es elaborada con esmero y atención al
                        detalle, garantizando calidad y durabilidad.</p>
                    <p class="mb-4">Nuestra creadora, con años de experiencia en el arte de la costura, selecciona
                        personalmente las telas más suaves y resistentes del mercado, asegurando que cada producto no
                        solo sea hermoso, sino también funcional y seguro para tu bebé.</p>
                    <p>Trabajamos bajo pedido para ofrecerte productos personalizados que se adapten a tus gustos y
                        necesidades, convirtiendo cada cuna en un espacio único lleno de amor y cuidado.</p>
                </div>

                <div class="lg:w-1/2">
                    <img src="/isangeles/public/img/Manos_Maestras_en_Accion.png" alt="Taller de costura"
                        class="rounded-lg shadow-xl w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-red-800 mb-4">Nuestros Servicios</h2>
                <div class="w-20 h-1 bg-red-800 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-white p-8 rounded-xl shadow-md text-center hover:shadow-lg transition">
                    <div
                        class="service-icon w-20 h-20 rounded-full bg-pink-200 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-bed text-3xl text-pink-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Juegos de Cuna</h3>
                    <p class="text-gray-600">Conjuntos completos que incluyen sábanas, fundas de almohada y protectores,
                        diseñados para crear un ambiente armónico en la cuna de tu bebé.</p>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white p-8 rounded-xl shadow-md text-center hover:shadow-lg transition">
                    <div
                        class="service-icon w-20 h-20 rounded-full bg-teal-200 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-pencil-ruler text-3xl text-teal-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Diseño Personalizado</h3>
                    <p class="text-gray-600">Trabajamos contigo para crear diseños únicos que reflejen tu estilo
                        personal y se adapten perfectamente a tus necesidades.</p>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-white p-8 rounded-xl shadow-md text-center hover:shadow-lg transition">
                    <div
                        class="service-icon w-20 h-20 rounded-full bg-yellow-200 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-cut text-3xl text-yellow-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Confección a Medida</h3>
                    <p class="text-gray-600">Productos hechos exactamente a las medidas que necesites, garantizando un
                        ajuste perfecto para cualquier tipo de cuna o accesorio.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="galeria" class="py-20 bg-amber-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-red-800 mb-4">Nuestros Trabajos</h2>
                <div class="w-20 h-1 bg-red-800 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Gallery Item 1 -->
                <div class="gallery-item relative overflow-hidden rounded-lg">
                    <img src="/isangeles/public/img/trabajos/ajuar_completo.png" alt="Ajuar Completo"
                        class="w-full h-64 object-cover">
                    <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="gallery-item relative overflow-hidden rounded-lg">
                    <img src="/isangeles/public/img/trabajos/cojin_lactancia.png" alt="Cojin de Lactancia"
                        class="w-full h-64 object-cover">
                    <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="gallery-item relative overflow-hidden rounded-lg">
                    <img src="/isangeles/public/img/trabajos/cuna_rosada.png" alt="Cuna Rosada"
                        class="w-full h-64 object-cover">
                    <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="gallery-item relative overflow-hidden rounded-lg">
                    <img src="/isangeles/public/img/trabajos/cambiador.png" alt="Cambiador"
                        class="w-full h-64 object-cover">
                    <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="gallery-item relative overflow-hidden rounded-lg">
                    <img src="/isangeles/public/img/trabajos/cuna_colores.png" alt="Set completo"
                        class="w-full h-64 object-cover">
                    <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="gallery-item relative overflow-hidden rounded-lg">
                    <img src="/isangeles/public/img/trabajos/set_sabanas.png" alt="Set de sabanas"
                        class="w-full h-64 object-cover">
                    <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-3xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modals de galeria de trabajos -->
    <!-- Modal Container (oculto por defecto) -->
    <div id="imageModal" class="fixed inset-0 z-50 hidden items-center bg-amber-50 bg-opacity-90 p-4">
        <div class="relative max-w-4xl w-full mx-auto">
            <!-- Botón de cerrar -->
            <button id="closeModal" class="absolute -top-12 right-0 text-white hover:text-gray-300 focus:outline-none">
                <i class="fas fa-times text-3xl"></i>
            </button>

            <!-- Contenedor de la imagen -->
            <div class="flex justify-center">
                <img id="modalImage" src="" alt="" class="max-h-[90vh] object-contain">
            </div>

            <!-- Descripción (opcional) -->
            <p id="modalCaption" class="mt-2 text-center text-white"></p>
        </div>
    </div>

    <!-- Contact Section -->
    <section id="contacto" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-red-800 mb-4">Contacto</h2>
                <div class="w-20 h-1 bg-red-800 mx-auto"></div>
            </div>

            <div class="flex flex-col lg:flex-row gap-12">
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-bold mb-6">Haz tu pedido personalizado</h3>
                    <p class="mb-6">En Confecciones Isangeles estamos comprometidos con brindarte productos de la más
                        alta calidad. Contáctanos para discutir tus necesidades y recibir una cotización personalizada.
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-map-marker-alt text-red-800 mt-1"></i>
                            <span>Dirección: Calle Artesanal #123, Ciudad</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-phone-alt text-red-800"></i>
                            <span>Teléfono: +123 456 7890</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-envelope text-red-800"></i>
                            <span>Email: contacto@confeccionesisangeles.com</span>
                        </div>
                    </div>

                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-red-800 text-white flex items-center justify-center hover:bg-amber-700 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-red-800 text-white flex items-center justify-center hover:bg-amber-700 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-red-800 text-white flex items-center justify-center hover:bg-amber-700 transition">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <form class="bg-white p-8 rounded-xl shadow-md">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nombre</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-800">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-800">
                        </div>
                        <div class="mb-6">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Teléfono</label>
                            <input type="tel" id="phone"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-800">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Describe lo que
                                necesitas</label>
                            <textarea id="message" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-800"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-red-800 text-white py-3 rounded-lg font-semibold hover:bg-amber-700 transition">Enviar
                            Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Confecciones Isangeles</h3>
                    <p>Artesanía textil de alta calidad para el bienestar de tu bebé. Productos hechos con amor y
                        dedicación.</p>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Enlaces Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="#inicio" class="hover:text-amber-400 transition">Inicio</a></li>
                        <li><a href="#nosotros" class="hover:text-amber-400 transition">Nosotros</a></li>
                        <li><a href="#servicios" class="hover:text-amber-400 transition">Servicios</a></li>
                        <li><a href="#galeria" class="hover:text-amber-400 transition">Galería</a></li>
                        <li><a href="#contacto" class="hover:text-amber-400 transition">Contacto</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Contacto</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start space-x-2">
                            <i class="fas fa-map-marker-alt mt-1"></i>
                            <span>Calle Artesanal #123, Ciudad</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-phone-alt"></i>
                            <span>+123 456 7890</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-envelope"></i>
                            <span>contacto@confeccionesisangeles.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-6 border-t border-gray-700 text-center">
                <p>&copy; 2023 Confecciones Isangeles. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    <script src="/isangeles/public/js/script.js"></script>
</body>

</html>