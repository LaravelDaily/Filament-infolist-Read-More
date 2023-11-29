<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <div x-data="{ isCollapsed: false, maxLength: @js($getMaxLength()), originalContent: '', content: '' }"
         x-init="originalContent = @js($getState()); content = originalContent.slice(0, maxLength) + '...'"
    >
        <span x-text="isCollapsed ? originalContent : content"></span>
        <x-filament::button
            size="xs"
            color="gray"
            @click="isCollapsed = !isCollapsed"
            x-show="originalContent.length > maxLength"
            x-text="isCollapsed ? 'Show less' : 'Show more'"
        ></x-filament::button>
    </div>
</x-dynamic-component>
