{{-- <div {{ $attributes->merge([ 'class' => 'rounded-md border border-slate-300 bg-white p-4 shadow-sm' ]) }}> --}}
<article {{ $attributes->class([ 'rounded-md border border-slate-300 bg-white p-4 shadow-sm' ]) }}>
    {{ $slot }}
</article>
