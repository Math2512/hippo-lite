@props(['formAction' => false, 'method' =>$method])

<div>
    @if($formAction)
        <form method="POST" action="{{ $formAction }}">
        @if ($method == 'PUT')
            @method('PUT')
        @endif
        @csrf
    @endif
            <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">
                @if(isset($title))
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $title }}
                    </h3>
                @endif
            </div>
            <div class="bg-white px-4 sm:p-6">
                <div class="space-y-6">
                    {{ $content }}
                </div>
            </div>

            <div class="bg-white px-4 py-4 sm:px-4 flex justify-end items-center">
                {{ $buttons }}
            </div>
    @if($formAction)
        </form>
    @endif
</div>
