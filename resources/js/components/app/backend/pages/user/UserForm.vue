<template>
  <div class="intro-y box">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base mr-auto">Input</h2>
                <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                                    <label class="form-check-label ml-0 sm:ml-2" for="show-example-1">Show example code</label>
                                    <input id="show-example-1" data-target="#input" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                </div>
                </div>
                <div id="input" class="p-5">
                                <div class="preview" style="display: none;">
                                    <div>
                                        <label for="regular-form-1" class="form-label">Input Text</label>
                                        <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                                    </div>
                                    <div class="mt-3">
                                        <label for="regular-form-2" class="form-label">Rounded</label>
                                        <input id="regular-form-2" type="text" class="form-control form-control-rounded" placeholder="Rounded">
                                    </div>
                                    <div class="mt-3">
                                        <label for="regular-form-3" class="form-label">With Help</label>
                                        <input id="regular-form-3" type="text" class="form-control" placeholder="With help">
                                        <div class="form-help">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="regular-form-4" class="form-label">Password</label>
                                        <input id="regular-form-4" type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Disabled</label>
                                        <input id="regular-form-5" type="text" class="form-control" placeholder="Disabled" disabled="">
                                    </div>
                                </div>
                                <div class="source-code hidden" style="display: block; opacity: 1;">
                                    <button data-target="#copy-input" class="copy-code btn py-1 px-2 btn-outline-secondary"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file w-4 h-4 mr-2"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Copy example code </button>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <pre id="copy-input" class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10 hljs xml"> <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"regular-form-1"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Input Text<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"regular-form-1"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Input text"</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mt-3"</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"regular-form-2"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Rounded<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"regular-form-2"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control form-control-rounded"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Rounded"</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mt-3"</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"regular-form-3"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>With Help<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"regular-form-3"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"With help"</span>&gt;</span>
     <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-help"</span>&gt;</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
 <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mt-3"</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"regular-form-4"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Password<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"regular-form-4"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"password"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Password"</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mt-3"</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"regular-form-5"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Disabled<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"regular-form-5"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Disabled"</span> <span class="hljs-attr">disabled</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code> <textarea style="margin-left: 1000000px;" class="fixed w-1 h-1"></textarea></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
</template>
<script>
 export default{

 }
</script>
