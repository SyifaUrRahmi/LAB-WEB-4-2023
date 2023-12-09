@props(['var'])
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$var->logo!='none'? asset('storage/'.$var->logo) :
            asset('images/no-image.png') }}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="listing/{{$var->id}}">{{ $var->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $var['a'] }}</div>
            <x-listing-tags :tags="$var->tags"/>
        </div>
    </div>
</x-card>
