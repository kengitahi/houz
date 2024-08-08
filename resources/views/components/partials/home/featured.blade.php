<section class="container my-20">
    <x-partials.sections.header subTitle="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, minus."
        title="Featured Properties" />

    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">

        {{-- for each here --}}
        @foreach ($properties as $property)
            <livewire:cards.property-card :property="$property" />
        @endforeach
        <div>
</section>
