<div class="container grid gap-8 pt-24" style="grid-template-columns: 3fr 1fr;">
    <main>
        <x-partials.properties.gallery />
        <x-partials.sections.header
            subTitle="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus voluptatum officia dicta expedita a cupiditate repudiandae beatae aspernatur quidem perferendis!"
            title="Single Property" />
        <x-partials.sections.title title="Description" />
        <x-partials.properties.description />
        <x-partials.sections.title title="Features" />
        <div class="mb-3 flex flex-wrap gap-3 font-normal text-gray-700 dark:text-gray-400">
            <x-property-feature icon="house.png" name="rooms" />
            <x-property-feature icon="house.png" name="number of bathrooms" />
            <x-property-feature icon="house.png" name="garages" />
            <x-property-feature icon="house.png" name="area" />
            <x-property-feature icon="house.png" name="rooms" />
            <x-property-feature icon="house.png" name="number of bathrooms" />
            <x-property-feature icon="house.png" name="garages" />
            <x-property-feature icon="house.png" name="area" />
        </div>
        <x-partials.properties.related />
    </main>
    <aside>
        <livewire:cards.agent />

    </aside>
</div>
