<div>
    <form wire:submit.prevent="switchLanguage">
        <label for="language">Select Language:</label>
        <select wire:model="selectedLanguage" id="language" wire:change="switchLanguage">
            <option value="en">English</option>
            <option value="km">Khmer</option>
        </select>
    </form>
</div>
