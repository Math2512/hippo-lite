<div>
    <div class="py-4 space-y-2 flex justify-between">
        <x-input class="w-1/4" type="text" wire:model="search" placeholder="Rechercher ..." />
        <x-button class="" onclick="Livewire.emit('openModal', 'modal')">
            {{ __('Ajouter contact') }}
        </x-button>
    </div>
    <div class="overflow-hidden">
        <table wire:loading.class.delay="opacity-50" class="min-w-full ">
            <thead class="border-b bg-gray-50">
                <tr>
                    <th wire:click="sortBy('name')" :direction="$field === 'name' ? $sortDirection : null" scope="col" class="text-sm font-bold text-gray-900 px-6 text-left py-4 cursor-pointer group">
                        <div class="flex items-center ">
                            Nom
                            <svg class="invisible group-hover:visible ml-2 h-3 w-3 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="6" x2="13" y2="6" />  <line x1="4" y1="12" x2="11" y2="12" />  <line x1="4" y1="18" x2="11" y2="18" />  <polyline points="15 15 18 18 21 15" />  <line x1="18" y1="6" x2="18" y2="18" /></svg>
                        </div>
                    </th>
                    <th wire:click="sortBy('activity')" :direction="$field === 'activity' ? $sortDirection : null" scope="col" class="text-sm font-bold text-gray-900 px-6 text-left py-4 cursor-pointer group invisible md:visible">
                        <div class="flex items-center ">
                            Activité
                            <svg class="invisible group-hover:visible ml-2 h-3 w-3 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="6" x2="13" y2="6" />  <line x1="4" y1="12" x2="11" y2="12" />  <line x1="4" y1="18" x2="11" y2="18" />  <polyline points="15 15 18 18 21 15" />  <line x1="18" y1="6" x2="18" y2="18" /></svg>
                        </div>
                    </th>
                    <th wire:click="sortBy('is_client')" :direction="$field === 'is_client' ? $sortDirection : null" scope="col" class="text-sm font-bold text-gray-900 px-6 text-left py-4 cursor-pointer group invisible md:visible">
                        <div class="flex items-center ">
                            Client ?
                            <svg class="invisible group-hover:visible ml-2 h-3 w-3 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="6" x2="13" y2="6" />  <line x1="4" y1="12" x2="11" y2="12" />  <line x1="4" y1="18" x2="11" y2="18" />  <polyline points="15 15 18 18 21 15" />  <line x1="18" y1="6" x2="18" y2="18" /></svg>
                        </div>
                    </th>
                    <th wire:click="sortBy('updated_at')" :direction="$field === 'updated_at' ? $sortDirection : null" scope="col" class="text-sm font-bold text-gray-900 px-6 text-left py-4 cursor-pointer invisible md:visible">
                        <div class="flex items-center ">
                            Date Modification
                            <svg class="invisible group-hover:visible ml-2 h-3 w-3 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="6" x2="13" y2="6" />  <line x1="4" y1="12" x2="11" y2="12" />  <line x1="4" y1="18" x2="11" y2="18" />  <polyline points="15 15 18 18 21 15" />  <line x1="18" y1="6" x2="18" y2="18" /></svg>
                        </div>
                    </th>
                    <th scope="col" class="text-sm font-bold text-gray-900 px-6 text-left py-4">
                    </th>
                </tr>
            </thead class="border-b">
            <tbody>
                @forelse ($contacts as $contact)
                    <tr class="bg-white border-b">
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap transition ease-in-out duration-150">
                            {{ $contact->name }}
                            <!-- <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full">Success</span>
                            <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded-full">Danger</span> -->
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap invisible md:visible">
                            {{ $contact->activity }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap invisible md:visible">
                            {{ ContactHelper::get_clients($contact) }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap invisible md:visible">
                            {{ $contact->updated_at }}
                        </td>
                        <td class="visible">
                            <div class="flex justify-end items-center">
                                <x-button class="mx-1" onclick="Livewire.emit('openModal', 'modal', {{ json_encode(['contact' => $contact]) }})">
                                    <svg class="h-4 w-4 text-white" <svg  width="24"  height="24"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" /></svg>
                                </x-button>
                                <x-button class="mx-1">
                                    <svg class="h-4 w-4 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <line x1="12" y1="8" x2="12" y2="16" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>
                                </x-button>
                                <x-button class="mx-1">
                                    <svg class="h-4 w-4 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />  <circle cx="12" cy="12" r="3" /></svg>
                                </x-button>
                            </div>
                        </td>
                    </tr class="bg-white border-b">
                @empty
                    <tr class="bg-white border-b 0">
                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-90">
                            <div class="flex justify-center items-center py-6">
                                Aucun Résultat
                            </div>
                        </td>
                    </tr class="bg-white border-b">
                @endforelse
            </tbody>
        </table>
        <div class="mt-2">
            {{ $contacts->links() }}
        </div>
    </div>
</div>