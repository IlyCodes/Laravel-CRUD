@if( session()->has('error') )
    <div class="text-center">
        <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">{{ session()->get('error') }}</span>
    </div>
@endif