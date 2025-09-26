<x-layouts.app :title="__('Buttons')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden">
            <div>
                    <h3>Main Buttons </h3>
                    <br>
                    {{-- 1. Default button --}}
                    <jet:button>Submit</jet:button>

                    {{-- 2. Variants --}}
                    <jet:button variant="primary">Primary</jet:button>
                    <jet:button variant="secondary">Secondary</jet:button>
                    <jet:button variant="success">Success</jet:button>
                    <jet:button variant="danger">Danger</jet:button>
                    <jet:button variant="warning">Warning</jet:button>
                    <jet:button variant="info">Info</jet:button>
                    <jet:button variant="light">Light</jet:button>
                    <jet:button variant="dark">Dark</jet:button>
                    <jet:button variant="ghost">Ghost</jet:button>
                    <jet:button variant="subtle">Subtle</jet:button>
                    <br>

                    {{-- rounded --}}                    
                    <jet:button rounded>Submit</jet:button>
                    <jet:button rounded variant="primary">Primary</jet:button>
                    <jet:button rounded variant="secondary">Secondary</jet:button>
                    <jet:button rounded variant="success">Success</jet:button>
                    <jet:button rounded variant="danger">Danger</jet:button>
                    <jet:button rounded variant="warning">Warning</jet:button>
                    <jet:button rounded variant="info">Info</jet:button>
                    <jet:button rounded variant="light">Light</jet:button>
                    <jet:button rounded variant="dark">Dark</jet:button>
                    <jet:button rounded variant="ghost">Ghost</jet:button>
                    <jet:button rounded variant="subtle">Subtle</jet:button>
                </div>
                <br><br>

                <div class="space-y-2">
                    <h3>Outline Buttons</h3>

                    {{-- Primary Outline --}}
                    <jet:button variant="outline-primary">Primary Outline</jet:button>

                    {{-- Secondary Outline --}}
                    <jet:button variant="outline-secondary">Secondary Outline</jet:button>

                    {{-- Success Outline --}}
                    <jet:button variant="outline-success">Success Outline</jet:button>

                    {{-- Danger Outline --}}
                    <jet:button variant="outline-danger">Danger Outline</jet:button>

                    {{-- Warning Outline --}}
                    <jet:button variant="outline-warning">Warning Outline</jet:button>

                    {{-- Info Outline --}}
                    <jet:button variant="outline-info">Info Outline</jet:button>

                    {{-- Light Outline --}}
                    <jet:button variant="outline-light">Light Outline</jet:button>

                    {{-- Dark Outline --}}
                    <jet:button variant="outline-dark">Dark Outline</jet:button>

                    {{-- Example with icons --}}
                    <jet:button variant="outline-primary">With Icon</jet:button>
                </div>


                <div>
                    <h3>Button sizes</h3>

                    {{-- 3. Sizes --}}
                    <jet:button size="xs">Extra Small</jet:button>
                    <jet:button size="sm">Small</jet:button>
                    <jet:button size="md">Medium</jet:button>
                    <jet:button size="lg">Large</jet:button>
                    <jet:button size="xl">Extra Large</jet:button>
                    {{-- 6. Square (icon-only forced square) --}}
                    <jet:button square icon.left="lucide-search" />
                    <br>

                    {{-- 4. Full width --}}
                    <jet:button fullWidth>Full Width</jet:button>
                </div>
                <br><br>

                <div>
                    <h3>Rounded Buttons </h3>
                    <br>
                    {{-- 5. Rounded / Pill --}}
                    <jet:button rounded>Rounded</jet:button>
                    <jet:button rounded="md">Rounded</jet:button>
                    <jet:button rounded="lg">Rounded</jet:button>
                    <jet:button rounded="xl">Rounded</jet:button>
                    <jet:button rounded="full">Rounded</jet:button>
                </div>

                <br><br>

                <div>
                    <h3>Shaped Buttons </h3>
                    <br>
                    {{-- 6. square / circular --}}
                    <jet:button circle>cr</jet:button>
                    <jet:button square>sm</jet:button>
                </div>

                <br><br>

                <div>
                    <h3>Buttons with icons </h3>
                    <br>

                    {{-- 7. Icon left --}}
                    <jet:button icon.left="check">Save</jet:button>

                    {{-- 8. Icon right --}}
                    <jet:button icon.right="lucide-arrow-right">Next</jet:button>

                    {{-- 9. Both icons --}}
                    <jet:button icon.left="lucide-arrow-left" icon.right="lucide-arrow-right">Navigate</jet:button>
                </div>
                <br><br>

                <div>
                    <h3>Stateful Buttons </h3>
                    <br>
                    {{-- 10. Loading --}}
                    <jet:button loading>Processing...</jet:button>

                    {{-- 11. Disabled --}}
                    <jet:button disabled>Disabled</jet:button>

                    {{-- 12. Tooltip --}}
                    <jet:button tooltip="Click me!">Hover Me</jet:button>

                    {{-- 13. Combined example --}}
                    <jet:button variant="success" size="lg" rounded icon.left="lucide-check" icon.right="lucide-arrow-right" loading tooltip="Saving...">Save</jet:button>
                </div>
                <br><br>
        </div>
    </div>
</x-layouts.app>
