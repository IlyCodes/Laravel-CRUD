@if( session()->has('success') )
    <div class="text-center">
        <span class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">{{ session()->get('success') }}</span>
    </div>
@endif