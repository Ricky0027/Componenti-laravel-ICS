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
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://kit.fontawesome.com/d750cfe593.js" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}



</head>

<body class="font-inter">
    <x-page-title>
        <h1 class="text-center text-4xl text-ics-primary-100 font-bold">Documentazione</h1>
    </x-page-title>

    <div>
        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl font-semibold">🎨 Palette colori ICS</h2>
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
                                <button onclick="copyColor(this)" class="text-xs rounded-lg bg-ics-primary-100 w-10 h-5 text-white" title="copia"><i class="fa-solid fa-copy"></i></button>
                            </div>
                            <div class="flex flex-rows justify-between">
                                <p class="font-light">hex: <span class="copy-color">{{ $colore['hex'] }}</span></p>
                                <button onclick="copyColor(this)" class="text-xs rounded-lg bg-ics-primary-100 w-10 h-5 text-white mt-1" title="copia"><i class="fa-solid fa-copy"></i></button>
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
            <h2 class="text-2xl font-semibold">Pulsanti</h2>
        </div>
        <x-section class="flex flex-cols mx-10">
            <div class="w-3 h-3">
                <h2 class="font-bold mb-5 underline">Component</h2>
            </div>
            <x-section class="flex felx-cols w-full bg-ics-primary-200 text-white">
                <pre class="select-none">
&lt;button &#123;&#123; $attributes->merge&#40;&#91;'type' => $attributes->get&#40;'type', 'button'&#41;, 'class' => 'btn'&#93;&#41; &#125;&#125;&gt;
    &#123;&#123; $slot &#125;&#125;
&lt;/button&gt;
                </pre>
            </x-section>
        </x-section>

        <x-section class="grid-rows-5 mx-10 my-5">
            <h2 class="font-bold underline">Preview</h2>
            <x-button type="button" class="btn-primary-100 hover:btn-primary-200">Visualizza</x-button>
            <x-button type="button" class="btn-secondary-200 hover:btn-secondary-300">Visualizza</x-button>
            <x-button type="button" class="btn-success-100 hover:btn-success-200">Visualizza</x-button>
            <x-button type="button" class="btn-warning-100 hover:btn-warning-200">Visualizza</x-button>
            <x-button type="button" class="btn-danger-100 hover:btn-danger-200">Visualizza</x-button>
            <div class="w-10">
                <h2 class="font-bold underline">Code</h2>
            </div>
            <x-section class="flex flex-cols bg-ics-primary-200 text-white">
                <pre class="copy-text">
&lt;x-button type="button" class="btn-primary-100 hover:btn-primary-200"&gt;Visualizza&lt;/x-button&gt;
&lt;x-button type="button" class="btn-secondary-200 hover:btn-secondary-300"&gt;Visualizza&lt;/x-button&gt;
&lt;x-button type="button" class="btn-success-100 hover:btn-success-200"&gt;Visualizza&lt;/x-button&gt;
&lt;x-button type="button" class="btn-warning-100 hover:btn-warning-200"&gt;Visualizza&lt;/x-button&gt;
&lt;x-button type="button" class="btn-danger-100 hover:btn-danger-200"&gt;Visualizza&lt;/x-button&gt;
                </pre>
            </x-section>
            <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold">📋Copia</button>        
        </x-section>

        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl font-semibold">Pulsanti Outline</h2>
        </div>
        <x-section class="grid-rows-4 mx-10 my-5">
            <h2 class="font-bold underline">Preview</h2>
            <x-button type="button" class="btn-out btn-out-primary hover:btn-primary-100">Visualizza</x-button>
            <x-button type="button" class="btn-out btn-out-success hover:btn-success-100">Visualizza</x-button>
            <x-button type="button" class="btn-out btn-out-warning hover:btn-warning-100">Visualizza</x-button>
            <x-button type="button" class="btn-out btn-out-danger hover:btn-danger-100">Visualizza</x-button>
            <div class="w-3 h-3">
                <h2 class="font-bold underline">Code</h2>
            </div>

            <x-section class="flex flex-cols bg-ics-primary-200 text-white">
                <pre class="copy-text">
&lt;x-button type="button" class="btn-out btn-out-primary hover:btn-primary-100"&gt;Visualizza&lt;/x-button&gt;
&lt;x-button type="button" class="btn-out btn-out-success hover:btn-success-100"&gt;Visualizza&lt;/x-button&gt;
&lt;x-button type="button" class="btn-out btn-out-warning hover:btn-warning-100"&gt;Visualizza&lt;/x-button&gt;
&lt;x-button type="button" class="btn-out btn-out-danger hover:btn-danger-100"&gt;Visualizza&lt;/x-button&gt;
                </pre>
            </x-section>
            <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold">📋Copia</button>       
        </x-section>

        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl font-semibold">Pulsanti con icone</h2>
        </div>

        <x-section class="grid-rows-3 mx-10 my-5">
            <h2 class="font-bold underline">Preview</h2>
            <x-button type="button" class="btn-danger-100 hover:btn-danger-200"><i class="fa-duotone fa-solid fa-trash mr-3"></i>Visualizza</x-button>
            <x-button type="button" class="btn-out btn-out-danger hover:btn-danger-100"><i class="fa-duotone fa-solid fa-trash mr-3"></i>Visualizza</x-button>
            <div class="w-3 h-3">
                <h2 class="font-bold underline">Code</h2>
            </div>

            <x-section class="flex flex-cols bg-ics-primary-200 text-white">
                <pre class="copy-text">
&lt;x-button type="button" class="btn-danger-100 hover:btn-danger-200"&gt;&lt;i class="fa-duotone fa-solid fa-trash mr-3"&gt;&lt;/i&gt;Visualizza&lt;/x-button&gt;
&lt;x-button type="button" class="btn-out btn-out-danger hover:btn-danger-100"&gt;&lt;i class="fa-duotone fa-solid fa-trash mr-3"&gt;&lt;/i&gt;Visualizza&lt;/x-button&gt;
                </pre>
            </x-section>
            <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold">📋Copia</button>        
        </x-section>
    </div>

    <div>
        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl font-semibold">Form</h2>
        </div>
        <x-section class="mx-10">
            <div class="w-40 h-3 mb-5">
                <h2 class="font-bold underline">Component Form</h2>
            </div>
            <x-section class="flex bg-ics-primary-200 text-white">
                <pre class="select-none">
&#64;props&#40;&#91;'id', 'action', 'method', 'enctype' => ''&#93;&#41;
&lt;form action="&#123;&#123; $action &#125;&#125;" method="&#123;&#123; $method === 'GET' ? 'GET' : 'POST' &#125;&#125;" &#123;&#123; $attributes->merge&#40;&#91;'class' => 'flex flex-col gap-8'&#93;&#41; &#125;&#125;&gt;
    &#64;csrf 
    &#64;if &#40;!in_array&#40;$method,&#91;'GET', 'POST'&#93;&#41;&#41;
    &#64;method&#40;$method&#41;
    &#64;endif 
    &#123;&#123; $slot &#125;&#125;
    &lt;div class="pt-5"&gt;
        &lt;button type="submit" class="bg-ics-primary-100 rounded-lg text-white w-20 h-10"&gt;Salva&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
            </pre>
            </x-section>
        </x-section>

        <x-section class="mx-10 my-5">
            <div class="w-40 h-3 mb-5">
                <h2 class="font-bold underline">Component Input</h2>
            </div>
            <x-section class="flex bg-ics-primary-200 text-white">
                <pre class="select-none">
&#64;props&#40;&#91;
    'label' => '', 
    'name',
    'type' => &#91;    
        'text' => 'text',
        'number' => 'number',
        'file' => 'file', 
        'date' => 'date'
    &#93;,
    'placeholder' => '',
    'id' => '',
    'value' => '',
&#93;&#41;

&#64;php
    $inputId = $id ?? $name;
&#64;endphp

&lt;div class="mb-4"&gt;
    &#64;if &#40;$label&#41;
        &lt;label for="&#123;&#123; $inputId &#125;&#125;" class="block text-sm font-medium text-gray-700"&gt;
        &#123;&#123; $label &#125;&#125;
        &lt;/label&gt;
    &#64;endif
    &#64;if&#40;$type == 'file'&#41;
    &lt;input 
            type="file"
            id="&#123;&#123; $inputId &#125;&#125;"
            name="&#123;&#123; $name &#125;&#125;"
            class="file:px-4 file:p-2 file:border w-1/2 border border-ics-gray-200 bg-white file:bg-ics-primary-100 file:text-white"
            placeholder="&#123;&#123; $placeholder &#125;&#125;"
            value="&#123;&#123; old&#40;$name, $value&#41; &#125;&#125;"
    /&gt;
    &#64;else
    &lt;input
            type="&#123;&#123; $type &#125;&#125;"
            name="&#123;&#123; $name &#125;&#125;"
            placeholder="&#123;&#123; $placeholder &#125;&#125;"
            id="&#123;&#123; $inputId &#125;&#125;"
            value="&#123;&#123; old&#40;$name, $value&#41; &#125;&#125;"
            &#123;&#123; $attributes->merge&#40;&#91;'class' => 'w-full border border-gray-300 rounded p-2'&#93;&#41; &#125;&#125;
    /&gt;
    &#64;endif
    &#64;error&#40;$name&#41;
            &lt;p class="text-sm text-ics-danger-100 mt-1"&gt;&#123;&#123; $message &#125;&#125;&lt;/p&gt;
    &#64;enderror
&lt;/div&gt;
                </pre>
            </x-section>
        </x-section>

        <x-section class="mx-10 my-5">
            <h2 class="font-bold underline">Preview</h2>
            <x-form action="" method="">
                <x-input label="Text" name="text" type="text" placeholder="Inserisci testo" />
                <x-input label="Number" name="number" type="number" placeholder="Inserisci un numero" />
                <x-input label="Date" name="date" type="date" />
                <x-input label="File" name="File" type="file" />
                <x-checkbox id="accetto" name="checkbox"/>
                <x-toggle name="toggle" :checked="false" />
                <div class="w-1/2 flex flex-cols">
                    <x-radio-button name="radio" :options="['1' => 'Option 1', '2' => 'Option 2']" selected="1" label="radio"/>
                </div>
                <x-textarea name="textarea" label="Textarea" />
                <x-select name="select" label="Select" :options="['Option 1', 'Option 2', 'Option 3']" />
                <x-input-group name="inputGroup" label="Input Group" addon="@" placeholder=" Inserisci email" />
            </x-form>
            <div class="w-3 h-3">
                <h2 class="font-bold underline">Code</h2>
            </div>
            <x-section class="flex w-full bg-ics-primary-200 text-white">
                <pre class="copy-text">
&lt;x-form action="" method="GET"&gt;
    &lt;x-input label="Text" name="text" type="text" placeholder="Inserisci testo"/&gt;
    &lt;x-input label="Number" name="number" type="number" placeholder="Inserisci un numero"/&gt;
    &lt;x-input label="Date" name="date" type="date"/&gt;
    &lt;x-input label="File" name="file" type="file"/&gt;
    &lt;x-checkbox id="accetto" name="checkbox"/&gt;
    &lt;x-toggle name="toggle" :checked="false"/&gt;
    &lt;div class="w-1/2 flex flex-cols"&gt;
        &lt;x-radio-button name="radio" :options="&#91;'1' => 'Option 1', '2' => 'Option 2'&#93;" selected="1" label="radio"/&gt;
    &lt;/div&gt;
    &lt;x-textarea name="textarea" label="Textarea"/&gt;
    &lt;x-select name="select" label="Select" :options="&#91;'Option 1', 'Option 2', 'Option3'&#93;"/&gt;
    &lt;x-input-group name="inputGroup" label="Input Group" addon="@" placeholder=" Inserisci email" /&gt;
&lt;/x-form&gt;
                </pre>
            </x-section>
            <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold">📋Copia</button>
        </x-section>
    </div>

    <div>
        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl font-semibold">Modale</h2>
        </div>

        <x-section class="mx-10 my-5">
            <div class="w-40 h-5">
                <h2 class="font-bold underline">Component</h2>
            </div>

            <x-section class="flex bg-ics-primary-200 text-white">
                <pre class="select-none">  
&#64;props&#40;&#91;
    'id' => 'modal-id',
    'title' => '',
    'subtitle' => '',
    'show' => '',
&#93;&#41;

&lt;div
    x-data="&#123; open: &#64;js&#40;$show&#41; &#125;"
    x-show="open"
    x-cloak
    id="&#123;&#123; $id &#125;&#125;"
    &#64;open-modal.window="if &#40;$event.detail.id === '&#123;&#123; $id &#125;&#125;'&#41; open = true"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"&gt;
    &lt;div &#64;click.away="open = false" class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative"&gt;
        &lt;div class="pb-2 mb-4"&gt;
            &lt;div class="flex justify-center items-start"&gt;
                &lt;div&gt;
                    &lt;h2 class="text-xl font-bold text-ics-primary-100"&gt;&#123;&#123; $title &#125;&#125;&lt;/h2&gt;
                    &lt;h3 class="text-sm font-medium text-ics-primary-100 mt-1"&gt;&#123;&#123; $subtitle &#125;&#125;&lt;/h3&gt;
                &lt;/div&gt;
                &lt;button &#64;click="open = false" class="text-md btn-out w-8 h-8 btn-out-primary rounded-full hover:btn-primary-100"&gt;&amp;times;&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="mb-4 font-regular text-ics-primary-100"&gt; 
            &#123;&#123; $slot &#125;&#125;
        &lt;/div&gt;

        &#64;isset&#40;$footer&#41;
            &lt;div class="flex justify-end gap-2 mt-4"&gt;
                &#123;&#123; $footer &#125;&#125;
            &lt;/div&gt;
        &#64;endisset
    &lt;/div&gt;
&lt;/div&gt;
                </pre>
            </x-section>
        </x-section>
        
        
        <x-section class="mx-10 my-5">
            <div class="w-full h-3">
                <h2 class="font-bold underline">Preview</h2>
            </div>
            <x-button onclick="window.dispatchEvent(new CustomEvent('open-modal', { detail: { id: 'myModal' } }))" class="bg-ics-primary-100 text-white hover:bg-ics-primary-200">Apri modale</x-button>
            <x-modale id="myModal" title="Servizio" subtitle="Prova modale"> 
                <p>Contenuto Modale</p>
                <x-slot name="footer">
                    <x-button class="btn-primary-100 hover:btn-primary-200">Salva</x-button>
                    <x-button class="btn-secondary-200 hover:btn-secondary-300">Annulla</x-button>
                </x-slot>
            </x-modale>

            <div class="w-3 h-3">
                <h2 class="font-bold underline">Code</h2>
            </div>
            <x-section class="flex bg-ics-primary-200 text-white my-5">
                <pre class="copy-text">
&lt;x-button onclick="window.dispatchEvent&#40;new CustomEvent&#40;'open-modal', &#123; detail: &#123; id: 'myModal' &#125; &#125;&#41;&#41;" class="bg-ics-primary-100 text-white 
hover:bg-ics-primary-200"&gt;Apri modale&lt;/x-button&gt;
&lt;x-modale id="myModal" title="Servizio" subtitle="Prova modale"&gt;
    &lt;p&gt;Contenuto Modale&lt;/p&gt;
    &lt;x-slot name="footer"&gt;
        &lt;x-button class="btn-primary-100"&gt;Salva&lt;/x-button&gt;
        &lt;x-button class="btn-secondary-200"&gt;Annulla&lt;/x-button&gt;
    &lt;x-slot&gt;
&lt;/x-modale&gt;
                </pre>
            </x-section>
            <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold">📋Copia</button>
        </x-section>
    </div>

    <div>
        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl font-semibold">Tabelle</h2>
        </div>

        <x-section class="mx-10 my-5">
            <div class="w-40 h-3 mb-5">
                <h2 class="font-bold underline">Component</h2>
            </div>

            <x-section class="flex bg-ics-primary-200 text-white">
                <pre class="select-none">
&#64;props&#40;&#91;
    'headers' => &#91;&#93;,
    'striped' => false,
&#93;&#41;

&lt;table &#123;&#123; $attributes->merge&#40;&#91;'class' => 'w-full table-auto'&#93;&#41; &#125;&#125;&gt;
    &lt;thead class="bg-ics-secondary-100 text-ics-primary-100"&gt;
        &lt;tr&gt;
            &#64;foreach &#40;$headers as $header&#41;
                &lt;th class="px-4 py-2 text-left border-b border-ics-primary-100 &#123;&#123; !$loop->last ? 'border-r border-ics-primary-100' : '' &#125;&#125;"&gt;
                    &#123;&#123; $header &#125;&#125;
                &lt;/th&gt;
            &#64;endforeach
        &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody class="text-sm font-light text-ics-primary-100"&gt;
            &#123;&#123; $slot &#125;&#125;
        &lt;/tbody&gt;
&lt;/table&gt;
                </pre>
            </x-section>

        </x-section>
        <x-section class="mx-10 my-5">
            <div class="w-3 h-3">
                <h2 class="font-bold underline">Preview</h2>
            </div>
            <x-table :headers="['Nome', 'Email', 'Ruolo']" class="text-ics-primary-100 font-semibold">
            <tr>
                <td class="px-4 py-2 border-b border-r border-ics-primary-100">Mario Rossi</td>
                <td class="px-4 py-2 border-b border-r border-ics-primary-100">mario@example.com</td>
                <td class="px-4 py-2 border-b border-ics-primary-100">Admin</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border-r border-ics-primary-100">Luca Verdi</td>
                <td class="px-4 py-2 border-r border-ics-primary-100">luca@example.com</td>
                <td class="px-4 py-2 border-ics-primary-100">Utente</td>
            </tr>
            </x-table>

            <div class="w-3 h-3">
                <h2 class="font-bold underline">Code</h2>
            </div>

            <x-section class="flex bg-ics-primary-200 text-white">
                <pre class="copy-text">
&lt;x-table :headers="&#91;'Nome', 'Email', 'Ruolo'&#93;" class="text-ics-primary-100 font-semibold"&gt;
&lt;tr&gt;
    &lt;td class="px-4 py-2 border-b border-r border-ics-primary-100"&gt;Mario Rossi&lt;/td&gt;
    &lt;td class="px-4 py-2 border-b border-r border-ics-primary-100"&gt;mario@example.com&lt;/td&gt;
    &lt;td class="px-4 py-2 border-b border-ics-primary-100"&gt;Admin&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td class="px-4 py-2 border-r border-ics-primary-100"&gt;Luca Verdi&lt;/td&gt;
    &lt;td class="px-4 py-2 border-r border-ics-primary-100"&gt;luca@example.com&lt;/td&gt;
    &lt;td class="px-4 py-2 border-ics-primary-100"&gt;Utente&lt;/td&gt;
&lt;/tr&gt;
&lt;/x-table&gt;
                </pre>
            </x-section>
            <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold">📋Copia</button>
        </x-section>
    </div>

    <div>
        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl font-semibold">Tabs</h2>
        </div>

        <x-section class="mx-10 my-5">
            <div class="w-40 h-3 mb-5">
                <h2 class="font-bold underline">Component</h2>
            </div>
        
            <x-section class="flex bg-ics-primary-200 text-white">
                <pre class="select-none">
&#64;props&#40;&#91;
    'tabs' => &#91;&#93;,
    'active' => '',
&#93;&#41;

&lt;div x-data="&#123; activeTab: '&#123;&#123; $active ?: array_values&#40;$tabs&#41;&#91;0&#93; &#125;&#125;' &#125;" class="w-full"&gt;
    &lt;div class="flex space-x-4"&gt;
        &#64;foreach &#40;$tabs as $label => $id&#41;
            &lt;button
                &#64;click="activeTab = '&#123;&#123; $id &#125;&#125;'"
                class="px-20 py-2 border-t border-l border-r rounded-t-lg font-medium transition-all"
                :class="activeTab" === '&#123;&#123; $id &#125;&#125;' 
                    ? 'bg-white text-ics-primary-100'#121A30
                    : 'bg-ics-secondary-200 text-ics-primary-100 hover:bg-ics-secondary-300'"&Gt;
                &#123;&#123; $label &#125;&#125;
            &lt;/button&gt;
        &#64;endforeach
    &lt;/div&gt;

    &lt;div class="mt-4"&gt;
        &#123;&#123; $slot &#125;&#125;
    &lt;/div&gt;
&lt;/div&gt;
                </pre>

            </x-section>
        </x-section>


        <x-section class="mx-10 my-5">
            <div class="w-3 h-3">
                <h2 class="font-bold underline">Preview</h2>
            </div>
            <x-tabs :tabs="['Tab 1' => 'tab1', 'Tab 2' => 'tab2', 'Tab 3' => 'tab3']" active="tab1">
                <div x-show="activeTab === 'tab1'" class="p-4">
                    Contenuto della prima tab.
                </div>
                <div x-show="activeTab === 'tab2'" class="p-4" x-cloak>
                    Contenuto della seconda tab.
                </div>
                <div x-show="activeTab === 'tab3'" class="p-4" x-cloak>
                    Contenuto della terza tab.
                </div>
            </x-tabs>

            <div class="w-3 h-3">
                <h2 class="font-bold underline">Code</h2>
            </div>
            <x-section class="flex bg-ics-primary-200 text-white">
                <pre class="copy-text">
&lt;x-tabs :tabs="&#91;'Tab 1' => 'tab1', 'Tab 2' => 'tab2', 'Tab 3' => 'tab3'&#93;" active="tab1"&gt;
    &lt;div x-show="activeTab === 'tab1'"&gt;
        Contenuto della prima tab.
    &lt;/div&gt;
    &lt;div x-show="activeTab === 'tab2'" x-cloak&gt;
        Contenuto della seconda tab.
    &lt;/div&gt;
    &lt;div x-show="activeTab === 'tab3'" x-cloak&gt;
        Contenuto della terza tab.
    &lt;/div&gt;
&lt;/x-tabs&gt;
                </pre>  
            </x-section>
            <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold">📋Copia</button>
         </x-section>
    </div>
                
    <div>
        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl font-semibold">Badge</h2>
        </div>
        <x-section class="mx-10">
            <div class="w-40 h-3 mb-5">
                <h2 class="font-bold underline">Component</h2>
            </div>
            <x-section class="flex bg-ics-primary-200 text-white">
                <pre class="select-none">
&#64;props&#40;&#91;
    'type' => '',
    'rounded' => true,
&#93;&#41;

&#64;php
    $base = 'inline-block text-md font-semibold px-2 py-1';
    $colors = &#91;
        'primary' => 'bg-ics-primary-100 text-white',
        'secondary' => 'bg-ics-secondary-200 text-ics-primary-100',
        'success' => 'bg-ics-success-100 text-white',
        'warning' => 'bg-ics-warning-100 text-white',
        'danger' => 'bg-ics-danger-100 text-white',
    &#93;
    $rounded = 'rounded';
&#64;endphp

&lt;span &#123;&#123; $attributes->merge&#40;&#91;'class' => "$base " . &#40;isset&#40;$colors&#91;$type&#93;&#41; ? $colors&#91;$type&#93; : $colors&#91;'primary'&#93;&#41; . " rounded"&#93;&#41; &#125;&#125;&gt;
    &#123;&#123; $slot &#125;&#125;
&lt;/span&gt;
                </pre>
            </x-section>
        </x-section>
            
        <x-section class="mx-10 my-5">
            <div class="w-40 h-3 mb-5">
                <h2 class="font-bold underline">Preview</h2>
            </div>
            <x-badge>Default</x-badge>
            <x-badge type="secondary">Secondary</x-badge>
            <x-badge type="success">Success</x-badge>
            <x-badge type="warning">Warning</x-badge>
            <x-badge type="danger">Danger</x-badge>

            <div class="w-3 h-3">
                <h2 class="font-bold underline">Code</h2>
            </div>
            <x-section class="flex bg-ics-primary-200 text-white">
                <pre class="copy-text">
&lt;x-badge&gt;Default&lt;/x-badge&gt;
&lt;x-badge type="secondary"&gt;Secondary&lt;/x-badge&gt;
&lt;x-badge type="success"&gt;Success&lt;/x-badge&gt;
&lt;x-badge type="warning"&gt;Warning&lt;/x-badge&gt;
&lt;x-badge type="danger"&gt;Danger&lt;/x-badge&gt;
                </pre>
            </x-section>
            <button onclick="copyText(this)" class="text-sm text-blue-500 hover:font-bold">📋Copia</button>
        </x-section>
    
    </div>
    
    <div>
        <div class="w-full h-20 flex justify-center items-center">
            <h2 class="text-2xl font-semibold">Accordion</h2>
        </div>
        <x-section class="mx-10">
            <div class="w-40 h-3 mb-5">
                <h2 class="font-bold underline">Preview</h2>
            </div>
            <x-accordion title="Accordion 1" :open="true">
                <p>Contenuto Accordion 1</p>
            </x-accordion>
            
            <x-accordion title="Accordion 2">
                <p>Contenuto Accordion 2</p>
            </x-accordion>
        </x-section>
 
    </div>
    
    
    
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        ics: {
                            primary: {
                                100: "#1E2B50",
                                200: "#121A30",
                            },
                            secondary: {
                                100: "#E6F0F6",
                                200: "#CFEAF7",
                                300: "#A3D7F0",
                            },
                            success: {
                                100: "#1A7F1E",
                                200: "#135D16",
                            },
                            warning:{
                                100: "#F7AD19",
                                200: "#CC8800",
                            },
                            danger: {
                                100: "#BF1613",
                                200: "#980906",
                            },
                            gray: {
                                100: "#F1F2F8",
                                200: "#DCDEE7",
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
                @apply bg-ics-primary-100 text-white;
            }
            .btn-primary-200 {
                @apply bg-ics-primary-200 text-white;
            }
            .btn-secondary-200 {
                @apply bg-ics-secondary-200 text-ics-primary-100;
            }
            .btn-secondary-300 {
                @apply bg-ics-secondary-300 text-ics-primary-100;
            }
            .btn-success-100 {
                @apply bg-ics-success-100 text-white;
            }
            .btn-success-200 {
                @apply bg-ics-success-200 text-white;
            }
            .btn-warning-100 {
                @apply bg-ics-warning-100 text-white;
            }
            .btn-warning-200 {
                @apply bg-ics-warning-200 text-white;
            }
            .btn-danger-100 {
                @apply bg-ics-danger-100 text-white;
            }
            .btn-danger-200 {
                @apply bg-ics-danger-200 text-white;
            }
            .btn-out {
                @apply border border-2;
            }
            .btn-out-primary {
                @apply border-ics-primary-100 text-ics-primary-100;
            }
            .btn-out-success {
                @apply border-ics-success-100 text-ics-success-100
            }
            .btn-out-warning {
                @apply border-ics-warning-100 text-ics-warning-100
            }
            .btn-out-danger {
                @apply border-ics-danger-100 text-ics-danger-100
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