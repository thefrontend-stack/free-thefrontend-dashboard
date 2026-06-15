<?php include_once "includes/header.php" ;?>
<title>Material Modals — Code Snippets</title>   
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row">

    <?php include_once "includes/sidebar.php" ;?>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full">
        
    <?php include_once "includes/menu.php" ;?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 space-y-8">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-neutral-200/60 pb-6">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-neutral-900">Material Modal Components</h1>
                    <span class="text-[11px] uppercase font-semibold tracking-wider text-neutral-400">UI Showcase · Interactive Variants · Copy & Paste Ready</span>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-12 pb-10">

                <?php 
                function renderModal($id, $title, $description, $modalContent, $isFullPage = false, $maxWidthClass = 'max-w-sm') {
                    // Define as classes do container interno baseado se é Full Page ou não
                    $cardClasses = $isFullPage 
                        ? 'bg-white w-screen h-screen min-h-screen flex flex-col relative' 
                        : 'bg-white rounded-2xl shadow-2xl w-full ' . $maxWidthClass . ' relative transform transition-all';

                    // Monta o HTML limpo que o usuário vai copiar e colar (Sem botões de gatilho poluindo)
                    $fullHtml = '
<div id="modal-' . $id . '" class="fixed inset-0 z-50 hidden bg-neutral-900/60 backdrop-blur-sm flex items-center justify-center ' . ($isFullPage ? '' : 'p-4') . ' transition-opacity">
    
    <div class="' . $cardClasses . '">
        
        <button onclick="closeModal(\'modal-' . $id . '\')" class="absolute top-4 right-4 p-1 text-neutral-400 hover:text-neutral-900 hover:bg-neutral-100 rounded-full transition-colors z-50">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        
        ' . $modalContent . '
        
    </div>
</div>';

                    $escapedHtml = htmlspecialchars($fullHtml, ENT_QUOTES, 'UTF-8');
                    echo '
                    <div class="bg-white border border-neutral-200 rounded-2xl shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-neutral-100">
                            <h3 class="text-base font-bold text-neutral-900">' . $title . '</h3>
                            <p class="text-xs text-neutral-500 mt-1">' . $description . '</p>
                        </div>
                        <div class="p-8 bg-neutral-50 border-b border-neutral-100 flex justify-center items-center min-h-[120px]">
                            <button onclick="openModal(\'modal-' . $id . '\')" class="px-5 py-2.5 bg-white border border-neutral-300 text-neutral-900 text-sm font-semibold rounded-lg shadow-sm hover:bg-neutral-50 transition-colors">
                                Preview: ' . $title . '
                            </button>
                        </div>
                        <div class="bg-[#0d1117] relative">
                            <div class="px-4 py-2 bg-[#161b22] border-b border-neutral-800 flex justify-between items-center">
                                <span class="text-[10px] font-mono text-neutral-400 uppercase tracking-widest">HTML / Tailwind</span>
                                <button onclick="copySnippet(\'code-' . $id . '\', this)" class="text-[10px] font-semibold text-neutral-300 hover:text-white bg-neutral-800 hover:bg-neutral-700 px-2 py-1 rounded transition-all">Copy</button>
                            </div>
                            <pre class="p-4 overflow-x-auto text-[11px] font-mono text-neutral-300"><code id="code-' . $id . '">' . $escapedHtml . '</code></pre>
                        </div>
                    </div>';
                    
                    // Injeta a estrutura real no final do buffer do grid para os testes funcionarem na página
                    echo $fullHtml;
                }
                ?>

                <?php renderModal('01', '01. Standard Alert Modal', 'A classic modal for confirming destructive actions.', '
<div class="p-6 space-y-4 pt-8">
    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center text-red-600 mb-4">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
    </div>
    <h2 class="text-lg font-bold text-neutral-900">Delete Content?</h2>
    <p class="text-sm text-neutral-500">This action is permanent and cannot be undone. Are you sure you want to proceed?</p>
    <div class="flex space-x-3 pt-4">
        <button onclick="closeModal(\'modal-01\')" class="flex-1 px-4 py-2.5 rounded-lg border border-neutral-300 hover:bg-neutral-50 font-medium text-sm text-neutral-700">Cancel</button>
        <button onclick="closeModal(\'modal-01\')" class="flex-1 px-4 py-2.5 rounded-lg bg-red-600 text-white hover:bg-red-700 font-medium text-sm">Delete</button>
    </div>
</div>', false, 'max-w-sm'); ?>

                <?php renderModal('02', '02. Success Feedback Modal', 'Used to confirm successful process completion.', '
<div class="p-6 text-center pt-10">
    <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
    </div>
    <h2 class="text-lg font-bold text-neutral-900">Generation Complete</h2>
    <p class="text-sm text-neutral-500 mt-2">All tasks have been successfully processed and queued.</p>
    <button onclick="closeModal(\'modal-02\')" class="w-full mt-6 bg-black text-white py-3 rounded-xl font-bold hover:bg-neutral-800 text-sm">Done</button>
</div>', false, 'max-w-sm'); ?>

                <?php renderModal('07', '07. Full Page Workspace Modal', 'A completely expanded fullscreen modal canvas that covers everything.', '
<div class="flex-1 flex flex-col h-full overflow-hidden">
    <div class="h-16 border-b border-neutral-200 px-6 flex items-center justify-between bg-white shrink-0">
        <div>
            <h2 class="text-lg font-bold text-neutral-900">Workspace Editor</h2>
            <p class="text-[11px] text-neutral-500">Advanced configuration and multi-channel publication dashboard</p>
        </div>
    </div>
    
    <div class="flex-1 overflow-y-auto p-6 md:p-10 bg-neutral-50 space-y-8">
        <div class="max-w-4xl mx-auto space-y-6">
            
            <div class="bg-white border border-neutral-200 rounded-xl p-6 space-y-6 shadow-sm">
                <h3 class="text-sm font-bold text-neutral-900 uppercase tracking-wider text-neutral-400">Content Targeting Engine</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-neutral-700 uppercase">Targeting Domain Market</label>
                        <input type="text" value="US Market (High CPC)" class="w-full p-3 bg-neutral-50 border border-neutral-200 rounded-lg text-xs font-medium focus:ring-1 focus:ring-black outline-none">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-neutral-700 uppercase">Indexing Channels</label>
                        <select class="w-full p-3 bg-neutral-50 border border-neutral-200 rounded-lg text-xs font-medium focus:ring-1 focus:ring-black outline-none">
                            <option>Google Discover Optimization</option>
                            <option>Standard Search Engine (SEO)</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-neutral-200 rounded-xl p-6 space-y-4 shadow-sm">
                <h3 class="text-sm font-bold text-neutral-900 uppercase tracking-wider text-neutral-400">Automation Scripting & Metadata</h3>
                <p class="text-xs text-neutral-500">Inject programmatic parameters down below to automate structured JSON-LD schemes or custom microdata variants across scaled architectures.</p>
                <textarea rows="8" class="w-full p-4 bg-neutral-900 text-neutral-100 rounded-xl text-xs font-mono focus:ring-1 focus:ring-neutral-700 outline-none placeholder-neutral-600" placeholder="// Paste script nodes here..."></textarea>
            </div>
            
        </div>
    </div>

    <div class="h-16 border-t border-neutral-200 px-6 flex items-center justify-end space-x-3 bg-white shrink-0">
        <button onclick="closeModal(\'modal-07\')" class="px-5 py-2.5 rounded-lg border border-neutral-300 hover:bg-neutral-50 font-medium text-xs text-neutral-700">Close Editor</button>
        <button onclick="closeModal(\'modal-07\')" class="px-5 py-2.5 rounded-lg bg-black text-white hover:bg-neutral-800 font-medium text-xs">Deploy Variables</button>
    </div>
</div>', true); ?>

                </div>
        </main>
    <?php include_once "includes/copyright.php" ;?>
    </div>

    <script>
        function copySnippet(id, btn) {
            const code = document.getElementById(id).innerText;
            navigator.clipboard.writeText(code);
            const original = btn.innerText;
            btn.innerText = 'Copied!';
            setTimeout(() => btn.innerText = original, 2000);
        }

        function openModal(id) {
            const modal = document.getElementById(id);
            if (modal) {
                modal.classList.remove('hidden');
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        closeModal(id);
                    }
                });
            }
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            if (modal) {
                modal.classList.add('hidden');
            }
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape") {
                const openModals = document.querySelectorAll('.fixed.z-50:not(.hidden)');
                openModals.forEach(modal => {
                    modal.classList.add('hidden');
                });
            }
        });
    </script>
    <?php include_once "includes/footer.php" ;?>
