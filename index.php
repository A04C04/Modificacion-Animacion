<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desbloquea Tu Potencial - Flujo Dinámico</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #0e7490;
            --card-bg: #cbd5e1;
            --accent-orange: #fb8c00;
            --dark-teal: #083344;
        }

        body {
            background-color: var(--primary-bg);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            overflow-x: hidden;
        }

        /* Animación de flotación con ritmo normal y fluido */
        @keyframes floatingWave {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); } /* Movimiento sutil pero visible */
            100% { transform: translateY(0px); }
        }

        .step-card {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .step-card.visible {
            opacity: 1;
            transform: translateY(0);
            /* Animación de 4s para un flujo constante y natural */
            animation: floatingWave 4s ease-in-out infinite;
        }

        /* Desfase de animación para efecto de "ola" o escalera temporal */
        .step-card:nth-child(1) { animation-delay: 0s; }
        .step-card:nth-child(2) { animation-delay: 1s; }
        .step-card:nth-child(3) { animation-delay: 2s; }
        .step-card:nth-child(4) { animation-delay: 3s; }

        .cta-card {
            background: linear-gradient(180deg, #1591b5 0%, #0e7490 100%);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .btn-orange {
            background-color: var(--accent-orange);
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-orange:hover {
            background-color: #ef6c00;
            transform: scale(1.03);
            box-shadow: 0 6px 15px rgba(251, 140, 0, 0.4);
        }

        .btn-dark {
            background-color: var(--dark-teal);
            transition: all 0.3s ease;
        }

        .btn-dark:hover {
            background-color: #042f2e;
            transform: scale(1.03);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .img-container {
            height: 180px;
            width: 100%;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            background: #cbd5e1;
        }

        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .step-badge {
            background: white;
            color: #1e293b;
            font-weight: 800;
            padding: 6px 20px;
            border-radius: 9999px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        /* Notificación mejorada */
        #notification {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: white;
            color: #1e293b;
            padding: 1.25rem;
            border-radius: 1rem;
            display: none;
            z-index: 100;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            border-left: 6px solid var(--accent-orange);
            min-width: 300px;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 md:p-12">

    <div id="notification"></div>

    <main class="max-w-7xl mx-auto w-full">
        <header class="text-center mb-16">
            <div class="flex justify-center items-center gap-2 mb-4">
                <div class="h-[2px] w-8 bg-cyan-400 opacity-50"></div>
                <p class="text-xs uppercase tracking-[0.3em] font-medium text-cyan-200">Una guía paso a paso</p>
                <div class="h-[2px] w-8 bg-cyan-400 opacity-50"></div>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 tracking-tight">Desbloquea Tu Potencial Con Pasos Sencillos</h1>
            <p class="text-lg md:text-xl opacity-80 max-w-3xl mx-auto leading-relaxed">
                Mejora tus habilidades con los mejores tutores, de forma fácil y rápida.
            </p>
        </header>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 items-stretch">
            
            <!-- Paso 1 -->
            <section class="step-card bg-[#d1d5db] text-slate-800 p-8 rounded-[2.5rem] flex flex-col items-center justify-between shadow-xl">
                <span class="step-badge mb-8">Paso 1</span>
                <div class="img-container mb-8">
                    <img src="image_5f225e.jpg" alt="Persona registrándose" onerror="this.src='https://www.classgoapp.com/images/home/models/img1.webp'">
                </div>
                <div class="text-center">
                    <h2 class="text-2xl font-extrabold mb-4 text-slate-900">Regístrate</h2>
                    <p class="text-sm text-slate-600 mb-8 leading-relaxed">Crea tu cuenta rápidamente para comenzar a utilizar nuestra plataforma.</p>
                </div>
                <button onclick="handleAction('Registro', 'Cargando módulo de inscripción...')" class="btn-orange text-white font-bold py-4 px-10 rounded-full w-full uppercase text-sm tracking-wider">
                    Comenzar
                </button>
            </section>

            <!-- Paso 2 -->
            <section class="step-card bg-[#d1d5db] text-slate-800 p-8 rounded-[2.5rem] flex flex-col items-center justify-between shadow-xl">
                <span class="step-badge mb-8">Paso 2</span>
                <div class="img-container mb-8">
                    <img src="image_5f9e00.jpg" alt="Estudiantes con tutor" onerror="this.src='https://www.classgoapp.com/images/home/models/img2.webp'">
                </div>
                <div class="text-center">
                    <h2 class="text-2xl font-extrabold mb-4 text-slate-900">Encuentra un tutor</h2>
                    <p class="text-sm text-slate-600 mb-8 leading-relaxed">Busca y selecciona entre tutores calificados según tus necesidades.</p>
                </div>
                <button onclick="handleAction('Búsqueda', 'Analizando perfiles de tutores expertos...')" class="btn-orange text-white font-bold py-4 px-10 rounded-full w-full uppercase text-sm tracking-wider">
                    Buscar Ahora
                </button>
            </section>

            <!-- Paso 3 -->
            <section class="step-card bg-[#d1d5db] text-slate-800 p-8 rounded-[2.5rem] flex flex-col items-center justify-between shadow-xl">
                <span class="step-badge mb-8">Paso 3</span>
                <div class="img-container mb-8">
                    <img src="https://www.classgoapp.com/images/home/models/img5.webp" alt="Calendario de reserva">
                </div>
                <div class="text-center">
                    <h2 class="text-2xl font-extrabold mb-4 text-slate-900">Reserva ahora</h2>
                    <p class="text-sm text-slate-600 mb-8 leading-relaxed">Encuentra el mejor momento y agenda tu sesión fácilmente en nuestra plataforma.</p>
                </div>
                <button onclick="handleAction('Reserva', 'Sincronizando con calendarios locales...')" class="btn-orange text-white font-bold py-4 px-10 rounded-full w-full uppercase text-sm tracking-wider">
                    Empecemos
                </button>
            </section>

            <!-- Paso 4 / CTA -->
            <section class="step-card cta-card p-10 rounded-[2.5rem] flex flex-col items-center justify-center text-center shadow-2xl">
                <div class="bg-white/10 p-6 rounded-3xl mb-8 backdrop-blur-md">
                    <i class="fa-solid fa-person-running text-5xl text-white"></i>
                </div>
                <h2 class="text-3xl font-bold mb-4">Comienza tu jornada</h2>
                <p class="text-sm opacity-90 mb-10 leading-relaxed">Comienza tu viaje educativo con nosotros. ¡Reserva tu primera sesión hoy mismo!</p>
                <button onclick="handleAction('Inicio', '¡Todo listo! Tu aventura educativa comienza hoy.')" class="btn-dark text-white font-bold py-4 px-10 rounded-full w-full uppercase text-sm tracking-wider">
                    Empieza ahora
                </button>
            </section>

        </div>
    </main>

    <script>
        // Lógica de notificaciones
        function handleAction(title, message) {
            const notification = document.getElementById('notification');
            notification.innerHTML = `
                <div class="flex items-center gap-4">
                    <div class="bg-cyan-100 text-cyan-600 p-3 rounded-full">
                        <i class="fa-solid fa-bolt-lightning text-xl"></i>
                    </div>
                    <div>
                        <strong class="block text-slate-900 font-bold text-lg">${title}</strong>
                        <p class="text-sm text-slate-500 mt-1 leading-snug">${message}</p>
                    </div>
                </div>
            `;
            notification.style.display = 'block';
            notification.style.animation = 'slideIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
            
            setTimeout(() => {
                notification.style.animation = 'slideOut 0.5s forwards';
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 500);
            }, 3500);
        }

        // Efecto de aparición gradual
        window.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.step-card');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('visible');
                }, index * 250);
            });
        });

        // Estilos de animación de notificación
        const styleSheet = document.createElement("style");
        styleSheet.innerText = `
            @keyframes slideIn {
                from { transform: translateX(120%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            @keyframes slideOut {
                from { transform: translateX(0); opacity: 1; }
                to { transform: translateX(120%); opacity: 0; }
            }
        `;
        document.head.appendChild(styleSheet);
    </script>
</body>
</html>