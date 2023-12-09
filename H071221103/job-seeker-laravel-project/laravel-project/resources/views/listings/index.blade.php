<x-Layout>
@include('partials.search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@foreach ($cord as $var)
<x-listing-card :var="$var"/>
@endforeach
</div>
<div class="mt-6 p-4">
    {{ $cord->links() }}
</div>
</x-Layout>
