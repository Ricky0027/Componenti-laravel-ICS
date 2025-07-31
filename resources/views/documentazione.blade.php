<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Documentazione</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://kit.fontawesome.com/d750cfe593.js" crossorigin="anonymous"></script>


</head>

<body>
    <x-page-title>
        <h1 class="text-center text-4xl font-bold">Documentazione</h1>
    </x-page-title>

    <div>
        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl">🎨 Palette colori ICS</h2>
        </div>
        {{-- <ul class="w-full grid sm:grid-cols-2 lg:grid-cols-3 mt-5 gap-5">
            @foreach ($colori as $categoria => $gruppo)
            @foreach ($gruppo as $colore)
            <li class="flex items-center gap-5">
                <div
                    class="w-20 h-20 bg-{{ $colore['name'] }} {{ $colore['border'] ?? false ? 'border border-black' : '' }}">
                </div>
                <p>hex: {{ $colore['hex'] }}</p>
            </li>
            @endforeach
            @endforeach
        </ul> --}}
        {{-- @php
        $sidebarItems = [
        [
        'label' => 'Dashboard',
        'href' => '/dashboard'
        ],
        [
        'label' => 'Gestione',
        'children' => [
        [
        'label' => 'Utenti',
        'href' => '/utenti'
        ],
        [
        'label' => 'Ruoli',
        'href' => '/ruoli'
        ],
        ]
        ],
        [
        'label' => 'Impostazioni',
        'href' => '/impostazioni'
        ],
        ];
        @endphp

        <x-sidebar-item :items="$sidebarItems" title="Pannello Admin" /> --}}



        <x-section class="flex flex-wrap gap-x-5 justify-center items-center mx-10">
            @foreach ($colori as $gruppo)
                @foreach ($gruppo['items'] as $colore)
                    <x-card class="mt-5">

                        <div
                            class="w-20 h-20 rounded bg-{{ $colore['name'] }} {{ $colore['border'] ?? false ? 'border border-gray-300 border-solid' : '' }}">
                        </div>
                        <div class="grid-cols items-center grow">
                            <p class="font-bold">{{ $colore['name'] }}</p>
                            <div class="flex flex-rows justify-between">
                                <p class="font-light">RGB: <span class="copy-color">{{ $colore['RGB'] }}</span></p>
                                <button onclick="copyColor(this)" class="text-xs rounded-lg bg-ics-primary-100 w-10 h-5 text-ics-gray-100"><i class="fa-solid fa-copy"></i></button>
                            </div>
                            <div class="flex flex-rows justify-between">
                                <p class="font-light">hex: <span class="copy-color">{{ $colore['hex'] }}</span></p>
                                <button onclick="copyColor(this)" class="text-xs rounded-lg bg-ics-primary-100 w-10 h-5 text-ics-gray-100 mt-1"><i class="fa-solid fa-copy"></i></button>
                            </div>
                        </div>

                    </x-card>
                @endforeach
            @endforeach
        </x-section>

        {{-- <x-section-color class="my-5 mx-10">
            <div
                class="w-full h-20 rounded-lg border border-ics-secondary-200 text-center bg-ics-secondary-100 flex justify-center items-center">
                <span class="text-2xl font-bold">Font family</span>&nbsp;<span class="text-2xl">per web, app</span>
            </div>
            <div class="w-full flex">
                <div class="flex flex-col">
                    <p class="font-semibold">Inter</p>
                    <p>variable-font</p>
                    <p>w:100 - 900</p>
                </div>
            </div>
        </x-section-color> --}}
    </div>
    <div>
        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl">Pulsanti</h2>
        </div>
        <x-section class="flex flex-cols mx-10">
            <div class="w-3 h-3">
                <h2 class="font-bold mb-5 underline">Component</h2>
            </div>
            <x-section class="flex felx-cols w-full bg-ics-primary-200 text-ics-gray-100">
                <code class="select-none">
        &lt;button &#123;&#123; $attributes->merge&#40;&#91;'type' => $attributes->get&#40;'type', 'button'&#41;, 'class' => 'w-32 h-10 rounded-lg'&#93;&#41; &#125;&#125;&gt;<br>
            &#123;&#123; $slot &#125;&#125;<br>
        &lt;/button&gt;
                </code>
            </x-section>
        </x-section>

        <x-section class="grid-rows-5 mx-10 my-5">
            <h2 class="font-bold underline">Preview</h2>
            <x-button type="button" class="btn-primary-100">Visualizza</x-button>
            <x-button type="button" class="btn-secondary-200">Visualizza</x-button>
            <x-button type="button" class="btn-success">Visualizza</x-button>
            <x-button type="button" class="btn-warning">Visualizza</x-button>
            <x-button type="button" class="btn-danger">Visualizza</x-button>
            <div class="w-10">
                <h2 class="font-bold underline">Code</h2>
            </div>
            <x-section class="flex flex-cols bg-ics-primary-200 text-ics-gray-100">
                <code class="copy-text">
        &lt;x-button type="button" class="btn-primary-100"&gt;
        Visualizza
        &lt;/x-button&gt;<br>
        &lt;x-button type="button" class="btn-secondary-200""&gt;
        Visualizza
        &lt;/x-button&gt;<br>
        &lt;x-button type="button" class="btn-success"&gt;
        Visualizza
        &lt;/x-button&gt;<br>
        &lt;x-button type="button" class="btn-warning"&gt;
        Visualizza
        &lt;/x-button&gt;<br>
        &lt;x-button type="button" class="btn-danger"&gt;
        Visualizza
        &lt;/x-button&gt;
                </code>
                <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold pt-16 pr-10">📋Copia</button>
            </x-section>
        </x-section>

        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl">Pulsanti Outline</h2>
        </div>
        <x-section class="grid-rows-4 mx-10 my-5">
            <h2 class="font-bold underline">Preview</h2>
            <x-button type="button" class="btn-out btn-out-primary">Visualizza</x-button>
            <x-button type="button" class="btn-out btn-out-success">Visualizza</x-button>
            <x-button type="button" class="btn-out btn-out-warning">Visualizza</x-button>
            <x-button type="button" class="btn-out btn-out-danger">Visualizza</x-button>
            <div class="w-3 h-3">
                <h2 class="font-bold underline">Code</h2>
            </div>

            <x-section class="flex flex-cols bg-ics-primary-200 text-ics-gray-100">
                <code class="copy-text">
        &lt;x-button type="button" class="btn-out btn-out-primary""&gt;
        Visualizza
        &lt;/x-button&gt;<br>
        &lt;x-button type="button" class="btn-out btn-out-success"&gt;
        Visualizza
        &lt;/x-button&gt;<br>
        &lt;x-button type="button" class="btn-out btn-out-warning""&gt;
        Visualizza
        &lt;/x-button&gt;<br>
        &lt;x-button type="button" class="btn-out btn-out-danger"&gt;
        Visualizza
        &lt;/x-button&gt;
                </code>
                <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold pt-10 pr-7">📋Copia</button>
            </x-section>
        </x-section>

        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl">Pulsanti con icone</h2>
        </div>

        <x-section class="grid-rows-3 mx-10 my-5">
            <h2 class="font-bold underline">Preview</h2>
            <x-button type="button" class="btn-danger"><i
                    class="fa-duotone fa-solid fa-trash mr-3"></i>Visualizza</x-button>
            <x-button type="button" class="btn-out btn-out-danger"><i
                    class="fa-duotone fa-solid fa-trash mr-3"></i>Visualizza</x-button>
            <div class="w-3 h-3">
                <h2 class="font-bold underline">Code</h2>
            </div>

            <x-section class="flex flex-cols bg-ics-primary-200 text-ics-gray-100">
                <code class="copy-text">
        &lt;x-button type="button" class="btn-danger""&gt;&lt;i class="fa-doutone fa-solid fa-trash mr-3"&gt;&lt;/i&gt;
        Visualizza
        &lt;/x-button&gt;<br>
        &lt;x-button type="button" class="btn-out btn-out-danger"&gt;&lt;i class="fa-doutone fa-solid fa-trash mr-3"&gt;&lt;/i&gt;
        Visualizza
        &lt;/x-button&gt;
                </code>
                <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold pl-10">📋Copia</button>
            </x-section>
        </x-section>
    </div>

    <div>
        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl">Form</h2>
        </div>
        <x-section class="mx-10">
            <div class="w-40 h-3 mb-5">
                <h2 class="font-bold underline">Component Form</h2>
            </div>
            <x-section class="flex bg-ics-primary-200 text-ics-gray-100">
                <code class="select-none">
            &#64;props&#40;&#91;'id', 'action', 'method', 'enctype' => ''&#93;&#41;<br>
            &lt;form action="&#123;&#123; $action &#125;&#125;" method="&#123;&#123; $method === 'GET' ? 'GET' : 'POST' &#125;&#125;" &#123;&#123; $attributes->merge&#40;&#91;'class' => 'flex flex-col gap-8'&#93;&#41; &#125;&#125;&gt;<br>
                &#64;csrf <br>
                &#64;if &#40;!in_array&#40;$method,&#91;'GET', 'POST'&#93;&#41;&#41;<br>
                &#64;method&#40;$method&#41;<br>
                &#64;endif <br><br>
                &#123;&#123; $slot &#125;&#125;<br><br>
                &lt;div class="pt-5"&gt;<br>
                        &lt;button type="submit" class="bg-ics-primary-100 rounded-lg text-ics-gray-100 w-20 h-10"&gt;Salva&lt;/button&gt;<br>
                &lt;/div&gt;<br>
            &lt;/form&gt;
            
                </code>
            </x-section>
        </x-section>

        <x-section class="mx-10 my-5">
            <div class="w-40 h-3 mb-5">
                <h2 class="font-bold underline">Component Input</h2>
            </div>
            <x-section class="flex bg-ics-primary-200 text-ics-gray-200">
                <code class="select-none">
                &#64;props&#40;&#91;<br>
                    'label' => '', <br>
                    'name',<br>
                    'type' => &#91;<br>    
                        'text' => 'text',<br>
                        'number' => 'number',<br>
                        'file' => 'file', <br>
                        'date' => 'date'<br>
                    &#93;,<br>
                    'placeholder' => '',<br>
                    'id' => '',<br>
                    'value' => '',<br>
                &#93;&#41;<br><br>
                &#64;php<br>
                    $inputId = $id ?? $name;<br>
                &#64;endphp<br><br>
                &lt;div class="mb-4"&gt;<br>
                    &#64;if &#40;$label&#41;<br>
                        &lt;label for="&#123;&#123; $inputId &#125;&#125;" class="block text-sm font-medium text-gray-700"&gt;<br>
                        &#123;&#123; $label &#125;&#125;<br>
                        &lt;/label&gt;<br>
                    &#64;endif<br><br>
                    &#64;if&#40;$type == 'file'&#41;<br>
                    &lt;input <br>
                            type="file"<br>
                            id="&#123;&#123; $inputId &#125;&#125;"<br>
                            name="&#123;&#123; $name &#125;&#125;"<br>
                            class="file:px-4 file:p-2 file:border w-1/2 border border-ics-gray-300 bg-ics-gray-100 file:bg-ics-primary-100 file:text-ics-gray-100"<br>
                            placeholder="&#123;&#123; $placeholder &#125;&#125;"<br>
                            value="&#123;&#123; old&#40;$name, $value&#41; &#125;&#125;"<br>
                    /&gt;<br>
                    &#64;else<br>
                    &lt;input<br>
                            type="&#123;&#123; $type &#125;&#125;"<br>
                            name="&#123;&#123; $name &#125;&#125;"<br>
                            placeholder="&#123;&#123; $placeholder &#125;&#125;"<br>
                            id="&#123;&#123; $inputId &#125;&#125;"<br>
                            value="&#123;&#123; old&#40;$name, $value&#41; &#125;&#125;"<br>
                            &#123;&#123; $attributes->merge&#40;&#91;'class' => 'w-full border border-gray-300 rounded p-2'&#93;&#41; &#125;&#125;<br>
                            /&gt;<br>
                    &#64;endif<br><br>
                    &#64;error&#40;$name&#41;<br>
                            &lt;p class="text-sm text-ics-danger mt-1"&gt;&#123;&#123; $message &#125;&#125;&lt;/p&gt;<br>
                    &#64;enderror<br>
                &lt;/div&gt;
        
                </code>
            </x-section>
        </x-section>

        <x-section class="mx-10 my-5">
            <h2 class="font-bold underline">Preview</h2>
            <x-form action="" method="">
                <x-input label="Text" name="text" type="text" placeholder="Inserisci testo" />
                <x-input label="Number" name="number" type="number" placeholder="Inserisci un numero" />
                <x-input label="Date" name="date" type="date" />
                <x-input label="File" name="File" type="file" />
                <x-checkbox name="checkbox" :checked="true" />
                <x-toggle name="toggle" :checked="false" />
                <div class="w-1/2 flex flex-cols">
                    <x-radio-button name="radio" :checked="true" />
                    <x-radio-button name="radio" :checked="false" />
                </div>
                <x-textarea name="textarea" label="Textarea" />
                <x-select name="select" label="Select" :options="['Option 1', 'Option 2', 'Option 3']" />
                <x-input-group name="inputGroup" label="Input Group" addon="@" placeholder=" Inserisci email" />
            </x-form>
            <div class="w-3 h-3">
                <h2 class="font-bold underline">Code</h2>
            </div>
            <x-section class="flex w-full bg-ics-primary-200 text-ics-gray-100">
                <code class="copy-text">
                &lt;x-form action="" method="GET"&gt;<br>
                &lt;x-input label="Text" name="text" type="text" placeholder="Inserisci testo"/&gt;<br>
                &lt;x-input label="Number" name="number" type="number" placeholder="Inserisci un numero"/&gt;<br>
                &lt;x-input label="Date" name="date" type="date"/&gt;<br>
                &lt;x-input label="File" name="file" type="file"/&gt;<br>
                &lt;x-checkbox name="checkbox" :checked="true"/&gt;<br>
                &lt;x-toggle name="toggle" :checked="false"/&gt;<br>
                &lt;div class="w-1/2 flex flex-cols"&gt;<br>
                &lt;x-radio-button name="radio" :checked="true"/&gt;<br>
                &lt;x-radio-button name="radio" :checked="false"/&gt;<br>
                &lt;/div&gt;<br>
                &lt;x-textarea name="textarea" label="Textarea"/&gt;<br>
                &lt;x-select name="select" label="Select" :options="&#91;'Option 1', 'Option 2', 'Option3'&#93;"/&gt;<br>
                &lt;x-input-group name="inputGroup" label="Input Group" addon="@" placeholder=" Inserisci email" /&gt;<br>
                &lt;/x-form&gt;
                </code>
                <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold ml-96 pt-72">📋Copia</button>
            </x-section>
        </x-section>
    </div>


    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ics: {
                            primary: {
                                100: "#1E2B50",
                                200: "#121A30",
                            },
                            secondary: {
                                100: "#E6F0F6",
                                200: "#CFEAF7",
                            },
                            success: "#1A7F1E",
                            warning: "#F7AD19",
                            danger: "#BF1613",
                            gray: {
                                100: "#FFFFFF",
                                200: "#F1F2F8",
                                300: "#DCDEE7",
                            }
                        }
                    }
                }
            }
        };
    </script>
    <style type="text/tailwindcss">
        @layer components{
            .btn {
                @apply w-32 h-10 rounded-lg;
            }
            .btn-primary-100 {
                @apply bg-ics-primary-100 text-ics-gray-100;
            }
            .btn-secondary-200 {
                @apply bg-ics-secondary-200 text-ics-primary-100;
            }
            .btn-success {
                @apply bg-ics-success text-ics-gray-100;
            }
            .btn-warning {
                @apply bg-ics-warning text-ics-gray-100;
            }
            .btn-danger {
                @apply bg-ics-danger text-ics-gray-100;
            }
            .btn-out {
                @apply border border-2;
            }
            .btn-out-primary {
                @apply border-ics-primary-100 text-ics-primary-100;
            }
            .btn-out-success {
                @apply border-ics-success text-ics-success
            }
            .btn-out-warning {
                @apply border-ics-warning text-ics-warning
            }
            .btn-out-danger {
                @apply border-ics-danger text-ics-danger
            }
        }

    </style>
    <script>
        function copyColor(button) {
            const text = button.previousElementSibling.querySelector('.copy-color').innerText;
            navigator.clipboard.writeText(text).then(() => {
                const oldText = button.innerText;
                alert('Codice copiato!');
                setTimeout(() => button.innerText = oldText, 1500);
            });
        }
    </script>
    <script>
        function copyText(button) {
            const container = button.parentElement;
            const codeBlock = container.querySelector('.copy-text');

            if (!codeBlock) {
                alert("Blocco da copiare non trovato.");
                return;
            }

            const text = codeBlock.innerText;

            navigator.clipboard.writeText(text).then(() => {
                const oldText = button.innerText;
                alert('Codice copiato!');
                setTimeout(() => button.innerText = oldText, 1500);
            }).catch(() => {
                alert("Errore durante la copia.");
            });
        }
    </script>


</body>

</html>