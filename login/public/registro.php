<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-white">

    <div class="content">
       
        <form class="form" method="POST" action="actions/register_action.php">

            <div class="grid grid-cols-16 grid-rows-7">

                
                <img 
                    src="assets/fondo.JPG"
                    alt="fondo"
                    class="object-cover col-span-10 row-span-7"
                >

                
                <img 
                    src="assets/logo-Photoroom.png"
                    alt="logo"
                    class="size-30 object-cover col-start-15 col-end-17 row-start-1"
                >

                
                <h1 class="col-start-12 col-span-4 row-start-2 font-bold text-4xl">
                    Crear Cuenta
                </h1>

                
                <h2 class="col-start-12 col-span-4 row-start-3 font-bold text-start">
                    Nombre Completo
                </h2>

               
                <div class="col-start-12 col-span-4 row-start-3 mt-6">
                    <input 
                        type="text"
                        required
                        placeholder="Ingresa tu nombre"
                        class="w-full rounded-md bg-zinc-900 px-3 py-2 text-sm text-white outline-none
                               focus:ring-2 focus:ring-cyan-700"
                        id="nombre"
                        name="nombre"
                    >
                </div>

                
                <h2 class="col-start-12 col-span-4 row-start-4 font-bold text-start">
                    Correo Electrónico
                </h2>

               
                <div class="col-start-12 col-span-4 row-start-4 mt-6">
                    <input 
                        type="email"
                        required
                        placeholder="Ingresa tu correo"
                        class="w-full rounded-md bg-zinc-900 px-3 py-2 text-sm text-white outline-none
                               focus:ring-2 focus:ring-cyan-700"
                        id="email"
                        name="email"
                    >
                </div>

             
                <h2 class="col-start-12 col-span-4 row-start-5 font-bold text-start">
                    Contraseña
                </h2>

                
                <div class="col-start-12 col-span-4 row-start-5 mt-6">
                    <input 
                        type="password"
                        required
                        placeholder="Crea una contraseña"
                        class="w-full rounded-md bg-zinc-900 px-3 py-2 text-sm text-white outline-none
                               focus:ring-2 focus:ring-cyan-700"
                        id="password"
                        name="password"
                    >
                </div>

                
                <h2 class="col-start-12 col-span-4 row-start-6 font-bold text-start">
                    Confirmar Contraseña
                </h2>

                
                <div class="col-start-12 col-span-4 row-start-6 mt-6">
                    <input 
                        type="password"
                        required
                        placeholder="Repite tu contraseña"
                        class="w-full rounded-md bg-zinc-900 px-3 py-2 text-sm text-white outline-none
                               focus:ring-2 focus:ring-cyan-700"
                        id="password2"
                        name="password2"
                    >
                </div>

                
                <div class="col-start-12 col-span-4 row-start-7 mt-6">
                    <button
                        type="submit"
                        id="sendButton"
                        class="w-full rounded-md overflow-hidden
                               bg-gradient-to-br from-cyan-950 via-cyan-700 to-cyan-950
                               border border-cyan-900 py-2 text-center font-bold
                               hover:scale-105 hover:contrast-125 transition"
                    >
                        Registrarse
                    </button>

                    
                </div>           


  

            </div>

        </form>
    </div>

 

</body>
</html>
