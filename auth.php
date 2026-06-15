<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        .fade-in {
            animation: fadeIn 0.25s ease-in-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(4px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-white text-neutral-900 antialiased min-h-screen w-full flex flex-col md:flex-row overflow-x-hidden">

    <div class="w-full md:w-[42%] bg-black p-8 sm:p-12 md:p-16 flex flex-col justify-between text-white border-b md:border-b-0 md:border-r border-neutral-900 relative flex-shrink-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,#111111_0%,#000000_80%)] pointer-events-none"></div>

        <div class="relative z-10 flex items-center space-x-3">
            <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
            </svg>
            <span class="text-xs font-mono tracking-widest text-neutral-400 uppercase">thefrontend</span>
        </div>

        <div class="relative z-10 my-16 md:my-0 max-w-sm">
            <div id="text-login" class="fade-in space-y-4">
                <h1 class="text-4xl font-bold tracking-tight text-white leading-tight">Welcome back.</h1>
                <p class="text-sm text-neutral-400 leading-relaxed">Sign in to manage your secure network layer, view analytics engines, and configure global platform performance settings.</p>
            </div>
            
            <div id="text-register" class="fade-in hidden space-y-4">
                <h1 class="text-4xl font-bold tracking-tight text-white leading-tight">Start building.</h1>
                <p class="text-sm text-neutral-400 leading-relaxed">Deploy micro-services instantly, scale backend resources globally, and shield your application architecture on our edge platform.</p>
            </div>

            <div id="text-recovery" class="fade-in hidden space-y-4">
                <h1 class="text-4xl font-bold tracking-tight text-white leading-tight">Secure your account.</h1>
                <p class="text-sm text-neutral-400 leading-relaxed">Initiate our automated verification routing protocol to safely update encryption settings and restore full terminal access.</p>
            </div>
        </div>

        <div class="relative z-10 hidden md:block text-xs font-mono text-neutral-600">
            SYS_LOC: EDGE_NODE // PROTOCOL: TLS_1.3
        </div>
    </div>


    <div class="w-full md:w-[58%] bg-white p-8 sm:p-12 md:p-20 flex flex-col justify-center items-center relative overflow-y-auto">
        <div class="w-full max-w-[400px] space-y-8">

            <div id="view-login" class="fade-in space-y-7">
                <div class="space-y-2">
                    <h2 class="text-xl font-semibold tracking-tight text-neutral-900">Sign in to dashboard</h2>
                    <p class="text-sm text-neutral-500">Provide your system credentials to proceed</p>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <button class="flex items-center justify-center space-x-2.5 border border-neutral-200 rounded-lg py-2.5 hover:bg-neutral-50 hover:border-neutral-300 transition-all text-sm font-medium text-neutral-700 shadow-sm">
                        <svg class="w-4 h-4 fill-current text-neutral-900" viewBox="0 0 24 24">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.48 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.577.688.479C19.138 20.164 22 16.418 22 12c0-5.523-4.477-10-10-10z"/>
                        </svg>
                        <span>GitHub</span>
                    </button>
                    <button class="flex items-center justify-center space-x-2.5 border border-neutral-200 rounded-lg py-2.5 hover:bg-neutral-50 hover:border-neutral-300 transition-all text-sm font-medium text-neutral-700 shadow-sm">
                        <svg class="w-4 h-4 fill-current text-neutral-900" viewBox="0 0 24 24">
                            <path d="M12.152 6.896c-.194 0-.414-.01-.617-.024a3.138 3.138 0 0 1-2.51-2.14 3.42 3.42 0 0 1 .425-2.73 3.284 3.284 0 0 1 2.645-1.42c.18 0 .37.01.564.03a3.155 3.155 0 0 1 2.503 2.194c.311 1.04-.013 2.146-.665 2.695a3.422 3.422 0 0 1-2.346.395zm6.541 7.424c-.035 2.473 2.011 3.666 2.054 3.69-.017.057-.323 1.113-1.076 2.215-.65 1.002-1.326 1.933-2.435 1.953-1.09.02-1.442-.644-2.688-.644-1.244 0-1.632.624-2.682.664-1.074.04-1.85-.86-2.504-1.822-1.34-1.967-2.362-5.553-.984-7.95 0.684-1.19 1.91-1.944 3.23-1.964 1.004-.015 1.953.682 2.564.682 0.612 0 1.76-.84 2.973-.717 0.507.02 1.934.204 2.854 1.554-.074.046-1.71 1.002-1.692 2.983z"/>
                        </svg>
                        <span>Apple</span>
                    </button>
                </div>

                <div class="relative flex items-center justify-center my-3">
                    <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-neutral-200"></div></div>
                    <span class="relative bg-white px-4 text-xs font-medium uppercase tracking-wider text-neutral-400">Or use traditional mail</span>
                </div>

                <form class="space-y-4" action="index.php" method="post">
                    <div class="space-y-1.5">
                        <label class="text-xs font-semibold uppercase tracking-wider text-neutral-500">Email Address</label>
                        <input type="email" placeholder="you@domain.com" class="w-full bg-neutral-50 border border-neutral-200 rounded-lg px-3.5 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition-all">
                    </div>
                    <div class="space-y-1.5">
                        <div class="flex items-center justify-between">
                            <label class="text-xs font-semibold uppercase tracking-wider text-neutral-500">Password</label>
                            <button type="button" onclick="navigateAuth('recovery')" class="text-sm text-neutral-400 hover:text-black hover:underline transition-colors">Forgot?</button>
                        </div>
                        <input type="password" placeholder="••••••••" class="w-full bg-neutral-50 border border-neutral-200 rounded-lg px-3.5 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition-all">
                    </div>
                    <button type="submit" class="w-full bg-black hover:bg-neutral-800 text-white font-medium py-3 rounded-lg transition-all text-sm shadow-sm mt-2">
                        Continue
                    </button>
                </form>

                <p class="text-center text-sm text-neutral-400 pt-2">
                    Don't have an account? 
                    <button onclick="navigateAuth('register')" class="text-neutral-900 hover:underline font-semibold ml-0.5">Sign up</button>
                </p>
            </div>

            <div id="view-register" class="hidden fade-in space-y-7">
                <div class="space-y-2">
                    <h2 class="text-xl font-semibold tracking-tight text-neutral-900">Create global account</h2>
                    <p class="text-sm text-neutral-500">Get deployment authorization in minutes</p>
                </div>

                <form class="space-y-4" onsubmit="event.preventDefault();">
                    <div class="space-y-1.5">
                        <label class="text-xs font-semibold uppercase tracking-wider text-neutral-500">Full Name</label>
                        <input type="text" placeholder="Name" class="w-full bg-neutral-50 border border-neutral-200 rounded-lg px-3.5 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition-all">
                    </div>
                    <div class="space-y-1.5">
                        <label class="text-xs font-semibold uppercase tracking-wider text-neutral-500">Email Address</label>
                        <input type="email" placeholder="you@domain.com" class="w-full bg-neutral-50 border border-neutral-200 rounded-lg px-3.5 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition-all">
                    </div>
                    <div class="space-y-1.5">
                        <label class="text-xs font-semibold uppercase tracking-wider text-neutral-500">Secure Password</label>
                        <input type="password" placeholder="At least 8 characters" class="w-full bg-neutral-50 border border-neutral-200 rounded-lg px-3.5 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition-all">
                    </div>
                    <div class="text-xs text-neutral-400 leading-relaxed">
                        By signing up, you authorize full consensus with our <a href="#" class="text-neutral-700 hover:underline">Terms of Service</a> and <a href="#" class="text-neutral-700 hover:underline">Privacy Framework</a>.
                    </div>
                    <button type="submit" class="w-full bg-black hover:bg-neutral-800 text-white font-medium py-3 rounded-lg transition-all text-sm shadow-sm mt-2">
                        Create Account
                    </button>
                </form>

                <p class="text-center text-sm text-neutral-400 pt-2">
                    Already a platform member? 
                    <button onclick="navigateAuth('login')" class="text-neutral-900 hover:underline font-semibold ml-0.5">Sign in</button>
                </p>
            </div>

            <div id="view-recovery" class="hidden fade-in space-y-7">
                <div class="space-y-2">
                    <h2 class="text-xl font-semibold tracking-tight text-neutral-900">Reset system password</h2>
                    <p class="text-sm text-neutral-500">A security payload verification link will be issued</p>
                </div>

                <form class="space-y-4" onsubmit="event.preventDefault();">
                    <div class="space-y-1.5">
                        <label class="text-xs font-semibold uppercase tracking-wider text-neutral-500">Account Identity Email</label>
                        <input type="email" placeholder="you@domain.com" class="w-full bg-neutral-50 border border-neutral-200 rounded-lg px-3.5 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition-all">
                    </div>
                    <button type="submit" class="w-full bg-black hover:bg-neutral-800 text-white font-medium py-3 rounded-lg transition-all text-sm shadow-sm mt-2">
                        Send Recovery Instructions
                    </button>
                </form>

                <div class="text-center pt-2">
                    <button onclick="navigateAuth('login')" class="inline-flex items-center space-x-2 text-sm text-neutral-400 hover:text-black font-semibold transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span>Return to dashboard login</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <script>
        function navigateAuth(viewState) {
            const viewPanels = ['login', 'register', 'recovery'];

            viewPanels.forEach(panel => {
                const textColumnElement = document.getElementById(`text-${panel}`);
                const formColumnElement = document.getElementById(`view-${panel}`);

                if (panel === viewState) {
                    textColumnElement.classList.remove('hidden');
                    formColumnElement.classList.remove('hidden');
                } else {
                    textColumnElement.classList.add('hidden');
                    formColumnElement.classList.add('hidden');
                }
            });
        }
    </script>
</body>
</html>