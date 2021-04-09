<button class="font-medium text-red-700 hover:text-red-500" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="delete()">
    Delete
</button>
